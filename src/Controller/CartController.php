<?php

namespace App\Controller;

use App\Repository\CartItemRepository;
use App\Repository\CartRepository;
use App\Repository\CategoryRepository;
use App\Repository\ProductVariantRepository;
use App\Service\CartService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    private CartService $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    #[Route('/cart', name: 'app_cart')]
    public function index(
        CategoryRepository $categoryRepository,
        Security $security
    ): Response
    {

        $categories = $categoryRepository->findMotherCategories();

        $cart = $this->cartService->getUserCart();

        return $this->render('cart/index.html.twig', [
            'categories' => $categories,
            'cart' => $cart
        ]);
    }

    #[Route('/cart/add', name: 'app_cart_add', methods: ['POST'])]
    public function addToCart(
        Request $request,
    ): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $variantId = (int) $data['variantId'];
        $quantity = (int) $data['quantity'];

        $cartItem = $this->cartService->addToCart($variantId, $quantity);

        return new JsonResponse([
            'success' => $cartItem !== null,
            'message' => 'Ajouté au panier.'
        ]);
    }

    #[Route('/cart/count', name: 'app_cart_count', methods: ['GET'])]
    public function getCartCount(
    ): JsonResponse
    {
        $cart = $this->cartService->getUserCart();
        if (!$cart) {
            return new JsonResponse(['count' => '']);
        }

        $count = 0;
        foreach ($cart->getCartItems() as $item) {
            $count += $item->getQuantity();
        }

        return new JsonResponse(['count' => $count]);
    }

    #[Route('/cart/update', name: 'app_cart_update', methods: ['POST'])]
    public function updateQuantity(
        Request $request,
        CartItemRepository $cartItemRepository,
        ProductVariantRepository $productVariantRepository
    ): JsonResponse
    {
        $variantId = (int) $request->request->get('variantId');
        $variant = $productVariantRepository->find($variantId);
        $quantity = (int) $request->request->get('quantity');

        if ($quantity > $variant->getStock()) {
            $quantity = $variant->getStock();
        }

        $cart = $this->cartService->getUserCart();

        $cartItem = $cartItemRepository->findOneBy([
            'cart' => $cart,
            'variant' => $variant
        ]);

        if ($cartItem) {
            $cartItemRepository->updateQuantity($cartItem, $quantity);
        }
        return new JsonResponse(['success' => true, 'message' => 'Quantité mise à jour']);
    }

    #[Route('/cart/delete/{variantId}', name: 'app_cart_item_delete', methods: ['POST', 'DELETE'])]
    public function deleteItem(
        int $variantId,
        CartItemRepository $cartItemRepository,
        CartRepository $cartRepository,
        ProductVariantRepository $productVariantRepository,
        SessionInterface $session
    ): JsonResponse
    {
        $variant = $productVariantRepository->find($variantId);

        $cart = $this->cartService->getUserCart();

        if (!$cart) {
            return new JsonResponse(['success' => false]);
        }
        $cartItem = $cartItemRepository->findOneBy([
            'cart' => $cart,
            'variant' => $variant
        ]);
        if (!$cartItem) {
            return new JsonResponse(['success' => false]);
        }
        $cartItemRepository->remove($cartItem, true);
        if ($cart->getCartItems()->isEmpty()) {
            $cartRepository->remove($cart, true);
            $session->remove('cart');
            return new JsonResponse(['success' => true, 'empty' => true]);
        }
        return new JsonResponse(['success' => true]);
    }
}