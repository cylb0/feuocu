<?php

namespace App\Service;

use App\Entity\Cart;
use App\Entity\CartItem;
use App\Repository\CartItemRepository;
use App\Repository\CartRepository;
use App\Repository\ProductVariantRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService
{
    private CartItemRepository $cartItemRepository;
    private CartRepository $cartRepository;
    private ProductVariantRepository $productVariantRepository;
    private RequestStack $requestStack;
    private Security $security;
    private UserRepository $userRepository;

    public function __construct(
        CartItemRepository $cartItemRepository,
        CartRepository $cartRepository,
        ProductVariantRepository $productVariantRepository,
        RequestStack $requestStack,
        Security $security,
        UserRepository $userRepository)
    {
        $this->cartItemRepository = $cartItemRepository;
        $this->cartRepository = $cartRepository;
        $this->productVariantRepository = $productVariantRepository;
        $this->requestStack = $requestStack;
        $this->security = $security;
        $this->userRepository = $userRepository;
    }

    public function getUserCart(): ?Cart
    {
        // Si l'utilisateur n'est pas connecté
        if (!$this->security->getUser()) {
            $session = $this->requestStack->getSession();
            $cartId = $session->get('cartId');
            if ($cartId) {
                return $this->cartRepository->find($cartId);
            }
            return null;
        }

        // Sinon
        $userEmail = $this->security->getUser()->getUserIdentifier();
        $user = $this->userRepository->findOneBy(['email' => $userEmail]);
        return $user->getCart();
    }

    public function addToCart(int $variantId, int $quantity): CartItem
    {

        $variant = $this->productVariantRepository->find($variantId);

        if (!$variant)
        {
            throw new \Error('Variant non trouvé' . $variantId);
        }

        if ($quantity > $variant->getStock()) {
            $quantity = $variant->getStock();
        }

        $cart = $this->getUserCart();

        if (!$cart) {

            if ($this->security->getUser()) {

                $userIdentifier = $this->security->getUser()->getUserIdentifier();
                $user = $this->userRepository->findOneBy(['email' => $userIdentifier]);
                $cart = $this->cartRepository->createNewCart($user);

            } else {

                $session = $this->requestStack->getSession();
                $cart = $this->cartRepository->createNewCart();
                $session->set('cartId', $cart->getId());

            }
        }

        return $this->cartItemRepository->addToCart($cart, $variant, $quantity);
    }
}