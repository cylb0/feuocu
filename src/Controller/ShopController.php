<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\BrandRepository;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\ProductVariantRepository;
use App\Service\SortService;
use App\Service\TrollJordanService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{

        #[Route('/shop/product/{slug?}', name: 'show_product')]
        public function showProduct(
            $slug,
            ProductRepository $productRepository,
            CategoryRepository $categoryRepository
        ): Response
        {
            $categories = $categoryRepository->findMotherCategories();

            $product = $productRepository->findOneBy(['slug' => $slug]);

            if (!$product) {
                throw $this->createNotFoundException('Ce produit n\'existe pas');
            }

            return $this->render('shop/show_product.html.twig', [
                'categories' => $categories,
                'product' => $product
            ]);
        }

    #[Route('/shop/product/{id}/options', name: 'get_product_options')]
    public function getOptions(
        $id,
        ProductRepository $productRepository
    ): JsonResponse
    {
        $product = $productRepository->find($id);
        if (!$product) {
            throw $this->createNotFoundException('Ce produit n\'existe pas');
        }

        $productVariants = $productRepository->getAvailableVariants($product);

        $productData = [
            'id' => $id,
            'price' => $product->getPrice(),
            'discount' => $product->getDiscount() ? [
                'type' => $product->getDiscount()->getType(),
                'val' => $product->getDiscount()->getValue()
            ] : null
        ];
        $options = [];
        $variants = [];

        if (count($productVariants) > 0) {

            foreach ($productVariants as $productVariant) {
                $productVariantOptions = $productVariant->getProductVariantOptions();
                $variantData = ['id' => $productVariant->getId()];
                foreach ($productVariantOptions as $productVariantOption) {
                    $productOptionValue = $productVariantOption->getValue();
                    $productOption = $productOptionValue->getOption();
                    $optionName = $productOption->getName();
                    $optionType = $productOption->getType();

                    if (!isset($options[$optionName])) {
                        $options[$optionName] = [
                            '_meta' => [
                                'name' => $optionName,
                                'type' => $optionType,
                            ],
                            'list' => [],
                        ];
                    }
                    $optionvalue = $productOptionValue->getValue();

                    if (!isset($options[$optionName]['list'][$optionvalue])) {
                        $options[$optionName]['list'][$optionvalue] = [
                            'value' => $optionvalue,
                        ];

                        if ($optionType === 'color') {
                            $options[$optionName]['list'][$optionvalue]['data'] = $productOptionValue->getHexacode();
                        }
                    }
                    $variantData[$optionName] = $optionvalue;
                }

                $temp = &$variants;
                foreach ($variantData as $key => $value) {
                    if ($key === 'id') {
                        continue;
                    }

                    if (!isset($temp[$value])) {
                        $temp[$value] = [];
                    }

                    $temp = &$temp[$value];
                }

                $temp = [
                    'id' => $variantData['id'],
                    'stock' => $productVariant->getStock(),
                    'price' => $productVariant->getPrice() ? $productVariant->getPrice() : null
                ];
            }

        }

        return new JsonResponse(['prod' => $productData, 'options' => $options, 'variants' => $variants]);
    }

    #[Route('/shop/category/{slug?}/{sort?}',
        name: 'show_category',
        requirements: ['sort' => 'popularity|price_ascending|price_descending|new'])]
    public function showCategory(
        $slug,
        ?string $sort,
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository
    ): Response
    {

        if (empty($slug)) {
            return $this->redirectToRoute('app_home');
        }

        $categories = $categoryRepository->findMotherCategories();

        $category = $categoryRepository->findOneBy(['slug' => $slug]);

        $products = $productRepository->findCategoryAndSubCategories($category);

        $tree = $categoryRepository->getParents($category);

        if ($sort) {
            switch ($sort) {
                case 'popularity':
                    $products = SortService::sortByRating($products);
                    break;
                case 'price_ascending':
                    $products = SortService::sortByPriceAscending($products);
                    break;
                case 'price_descending':
                    $products = SortService::sortByPriceDescending($products);
                    break;
                case 'date':
                    $products = SortService::sortByDate($products);
                    break;
                default:
                    break;
            }
        }

        return $this->render('shop/show_category.html.twig', [
            'categories' => $categories,
            'category' => $category,
            'tree' => $tree,
            'products' => array_map(static function (Product $product) {
                $isInStock = false;

                foreach ($product->getProductVariants() as $productVariant) {
                    $isInStock = $isInStock || $productVariant->getStock() > 0;
                }
                $product->isInStock = $isInStock;

                return $product;
            }, $products)
        ]);
    }

    #[Route('/shop/brand/{slug?}/{sort?}',
        name: 'show_brand',
        requirements: ['sort' => 'popularity|best_sellers|price_ascending|price_descending|new'])]
    public function showBrand(
        $slug,
        ?string $sort,
        ProductRepository $productRepository,
        BrandRepository $brandRepository,
        CategoryRepository $categoryRepository
    ): Response
    {
        if (empty($slug)) {
            return $this->redirectToRoute('app_home');
        }

        $categories = $categoryRepository->findMotherCategories();

        $brand = $brandRepository->findOneBy(['slug' => $slug]);

        $products = $productRepository->findBy(['brand' => $brand]);

        if ($sort) {
            switch ($sort) {
                case 'popularity':
                    $products = SortService::sortByRating($products);
                    break;
                case 'price_ascending':
                    $products = SortService::sortByPriceAscending($products);
                    break;
                case 'price_descending':
                    $products = SortService::sortByPriceDescending($products);
                    break;
                case 'date':
                    $products = SortService::sortByDate($products);
                    break;
                default:
                    break;
            }
        }

        return $this->render('shop/show_brand.html.twig', [
            'categories' => $categories,
            'brand' => $brand,
            'products' => array_map(static function (Product $product) {
                $isInStock = false;

                foreach ($product->getProductVariants() as $productVariant) {
                    $isInStock = $isInStock || $productVariant->getStock() > 0;
                }
                $product->isInStock = $isInStock;

                return $product;
            }, $products)
        ]);
    }

    #[Route('/shop/search', name:'search_products')]
    public function searchProducts(
        CategoryRepository $categoryRepository,
        ProductRepository $productRepository,
        Request $request
    ): Response
    {
        $input = $request->query->get('searchInput', '');

        try {
            $products = $productRepository->search($input);
            $categories = $categoryRepository->findMotherCategories();
        } catch (\Exception $e) {
            $this->addFlash('error', $e->getMessage());
            return $this->redirectToRoute('app_home');
        }

        return $this->render('shop/show_results.html.twig', [
            'categories' => $categories,
            'products' => array_map(static function (Product $product) {
                $isInStock = false;

                foreach ($product->getProductVariants() as $productVariant) {
                    $isInStock = $isInStock || $productVariant->getStock() > 0;
                }
                $product->isInStock = $isInStock;

                return $product;
            }, $products)
        ]);
    }
}
