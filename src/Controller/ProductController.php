<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ImageRepository;
use App\Repository\ProductRepository;
use App\Repository\ProductVariantRepository;
use App\Service\ImageService;
use App\Service\ProductService;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/product')]
#[IsGranted('ROLE_ADMIN')]
class ProductController extends AbstractController
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    #[Route('/', name: 'app_product_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();

        return $this->render('product/index.html.twig', [
            'products' => array_map(static function (Product $product) {
                $isInStock = false;

                foreach($product->getProductVariants() as $productVariant) {
                    $isInStock = $isInStock || $productVariant->getStock() > 0;
                }
                $product->isInStock = $isInStock;

                return $product;
            }, $products),
        ]);
    }

    #[Route('/new', name: 'app_product_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ImageRepository $imageRepository): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFiles = $form['images']->getData();
                $this->productService->createProduct($product, $imageRepository, $imageFiles);
                $this->addFlash('success', 'Produit ajouté avec succès');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Un produit avec ce nom existe déjà');
                return $this->redirectToRoute('app_product_new');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_product_new');
            }

            return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('product/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_product_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        ImageRepository $imageRepository,
        Product $product): Response
    {
        $oldName = $product->getName();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFiles = $form['images']->getData();
                $this->productService->updateProduct($oldName, $product, $imageRepository, $imageFiles);
                $this->addFlash('success', 'Produit modifié avec succès');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Un produit portant ce nom existe déjà.');
                return $this->redirectToRoute('app_product_edit');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_product_edit');
            }
            return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        ImageRepository $imageRepository,
        Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            try {
                $this->productService->deleteProduct($product, $imageRepository);
                $this->addFlash('success', 'Produit supprimé avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_product_index');
            }
        }

        return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/variants', name: 'app_product_variants', methods: ['GET', 'POST'])]
    public function variants(
        Request $request,
        Product $product): Response
    {
        $formBuilder = $this->createFormBuilder();
        $this->productService->createVariantsForm($formBuilder, $product);
        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            // Cas du produit sans variants
            if ($data['no_variant']) {
                $this->productService->createUniqueVariant($product);
                $this->addFlash('success', 'Variant unique ajouté avec succès.');
                return $this->redirectToRoute('app_product_variants', ['id' => $product->getId()]);
            } else {
                $this->productService->deleteUniqueVariant($product);
            }

            $filteredData = $this->productService->processOptionsDataOnly($data);
            $allEmpty = $this->productService->areOptionsSelected($product, $filteredData);
            if (!$allEmpty) {
                $dataToCombine = $this->productService->generateDataToCombine($filteredData);
                $combinations = $this->productService->generateCombinations($dataToCombine);
                foreach ($combinations as $combination) {
                    $this->productService->createVariant($product, $combination);
                }
            }
            $this->addFlash('success', 'Variants ajoutés avec succès.');
            return $this->redirectToRoute('app_product_variants', ['id' => $product->getId()]);
        }

        return $this->render('product/variants.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete-variant/{variantId}', name: 'app_product_delete_variant', methods: ['POST', 'DELETE'])]
    public function deleteVariant(
        Request $request,
        Product $product,
        ProductVariantRepository $productVariantRepository,
        int $variantId): Response
    {
        $productVariant = $productVariantRepository->find($variantId);
        if (!$productVariant) {
            echo ('Variant not found');
        } else {
            if ($this->isCsrfTokenValid('delete' . $productVariant->getId(), $request->request->get('_token'))) {
                try {
                    $productVariantRepository->remove($productVariant, true);
                    $this->addFlash('success', 'Variant supprimé avec succès.');
                } catch (\Exception $e) {
                    $this->addFlash('error', $e->getMessage());
                    return $this->redirectToRoute('app_product_variants', [
                        'id' => $product->getId()
                    ]);
                }
            }
        }
        return $this->redirectToRoute('app_product_variants', [
            'id' => $product->getId()
        ]);
    }

    #[Route('/variant/update/stock', name: 'app_product_update_variant_quantity', methods: ['POST'])]
    public function updateQuantityVariant(
        Request $request,
        ProductVariantRepository $productVariantRepository
    ): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $variantId = (int) $data['variantId'];
        $quantity = (int) $data['quantity'];

        $productVariant = $productVariantRepository->find($variantId);
        if ($productVariant) {
            if ($quantity >= 0) {
                $productVariantRepository->setQuantity($productVariant, $quantity, true);
                return new JsonResponse(['success' => true]);
            } else {
                return new JsonResponse(['success' => false, 'message' => 'Veuillez entrer une quantité positive']);
            }
        } else {
            return new JsonResponse(['success' => false, 'message' => 'Variant non trouvé.']);
        }
    }

    #[Route('/variant/update/price', name: 'app_product_update_variant_price', methods: ['POST'])]
    public function updatePriceVariant(
        Request $request,
        ProductVariantRepository $productVariantRepository
    ): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $variantId = $data['variantId'];
        $newPrice = $data['newPrice'];

        try {
            $productVariant = $productVariantRepository->find($variantId);

            if (!is_numeric($newPrice)) {
                throw new \Exception('Entrer un prix valide.');
            }
            if ($productVariant) {
                if ($newPrice == 0) {
                    $productVariantRepository->setPrice($productVariant, null, true);
                    return new JsonResponse(['success' => true]);
                }
                if ($newPrice > 0) {
                    $productVariantRepository->setPrice($productVariant, $newPrice, true);
                    return new JsonResponse(['success' => true]);
                }
                throw new \Exception('Le prix ne peut pas être negatif.');
            } else {
                throw new \Exception('Variant non trouvé.');
            }
        } catch (\Exception $e){
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    #[Route('(/{id}/variants/stock/{variantId}', name: 'app_product_stock_variant', methods: ['GET'])]
    public function getStock(
        Request $request,
        ProductVariantRepository $productVariantRepository,
        int $variantId,
    ): JsonResponse
    {
        $productVariant = $productVariantRepository->find($variantId);
        if (!$productVariant) {
            return new JsonResponse(['error' => 'Product variant not found'], 404);
        }
        return new JsonResponse(['stock' => $productVariant->getStock()]);
    }

    #[Route('/image/remove', name: 'app_product_remove_image', methods: ['DELETE'])]
    public function removeImage(
        Request $request,
        ImageRepository $imageRepository,
        ProductRepository $productRepository
    )
    {
        $data = json_decode($request->getContent(), true);
        $productId = (int) $data['productId'];
        $imageId = (int) $data['imageId'];

        $product = $productRepository->find($productId);
        $image = $imageRepository->find($imageId);

        try {
            if (!$image) {
                throw $this->createNotFoundException('Image non trouvée');
            }

            $directory = $this->getParameter('images_directory') . '/';
            $imagePath = $image->getPath();
            ImageService::unlinkImage($directory . $imagePath);

            $product->removeImage($image);
            $imageRepository->remove($image, true);
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => $e->getMessage()]);
        }

        return new JsonResponse(['success' => true]);
    }
}