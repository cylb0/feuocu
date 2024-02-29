<?php

namespace App\Service;

use App\Entity\Product;
use App\Entity\ProductVariant;
use App\Entity\ProductVariantOption;
use App\Repository\ImageRepository;
use App\Repository\ProductOptionRepository;
use App\Repository\ProductOptionValueRepository;
use App\Repository\ProductRepository;
use App\Repository\ProductVariantOptionRepository;
use App\Repository\ProductVariantRepository;
use Cocur\Slugify\Slugify;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductService
{
    private ParameterBagInterface $parameterBag;
    private ProductRepository $productRepository;
    private ProductOptionRepository $productOptionRepository;
    private ProductOptionValueRepository $productOptionValueRepository;
    private ProductVariantOptionRepository $productVariantOptionRepository;
    private ProductVariantRepository $productVariantRepository;
    private Slugify $slugify;

    public function __construct(
        ParameterBagInterface $parameterBag,
        ProductRepository $productRepository,
        ProductOptionRepository $productOptionRepository,
        ProductOptionValueRepository $productOptionValueRepository,
        ProductVariantOptionRepository $productVariantOptionRepository,
        ProductVariantRepository $productVariantRepository,
        Slugify $slugify
    )
    {
        $this->parameterBag = $parameterBag;
        $this->productRepository = $productRepository;
        $this->productOptionRepository = $productOptionRepository;
        $this->productOptionValueRepository = $productOptionValueRepository;
        $this->productVariantOptionRepository = $productVariantOptionRepository;
        $this->productVariantRepository = $productVariantRepository;
        $this->slugify = $slugify;
    }

    public function createProduct(Product $product, ImageRepository $imageRepository, ?array $imageFiles): void
    {
        $slug = $this->slugifyName($product);
        $product->setSlug($slug)
            ->setAdded(new \DateTimeImmutable())
            ->setEAN($this->generateRandomEAN())
            ->setSimpleProduct(true);

        if ($imageFiles) {
            $this->handleImages($product, $imageRepository, $imageFiles);
        }

        $this->productRepository->save($product, true);
    }

    public function handleImages(Product $product, ImageRepository $imageRepository, array $imageFiles): void
    {
        $productName = $product->getName();
        foreach ($imageFiles as $imageFile) {
            $image = ImageService::saveImage($imageFile, $productName, $imageRepository, 'products');
            $product->addImage($image);
            $directory = $this->parameterBag->get('images_directory') . '/products/' . $productName;
            $fileName = $image->getFileName();
            ImageService::uploadImage($imageFile, $directory, $fileName);
        }
    }

    public function updateProduct(string $oldName, Product $product, ImageRepository $imageRepository, ?array $imageFiles): void
    {
        if ($oldName !== $product->getName()) {
            $slug = $this->slugifyName($product);
            $product->setSlug($slug);
        }

        if ($imageFiles) {
            $this->handleImages($product, $imageRepository, $imageFiles);
        }

        $this->productRepository->save($product, true);
    }

    public function deleteProduct(Product $product, ImageRepository $imageRepository): void
    {
        $images = $product->getImages();
        if ($images) {
            foreach($images as $image) {
                $path = $image->getPath();
                $directory = $this->parameterBag->get('images_directory') . '/';
                ImageService::unlinkImage($directory . $path);
                $imageRepository->remove($image, true);
            }
            $this->productRepository->remove($product, true);
        } else {
            $this->productRepository->remove($product, true);
        }
    }

    public function slugifyName(Product $product): string
    {
        return $this->slugify->slugify($product->getName()) . uniqid();
    }

    public function generateRandomEAN(): string
    {
        $ean = '';
        for ($i = 0; $i < 13; $i++) {
            $ean .= rand(0, 9);
        }
        return $ean;
    }

    public function createVariantsForm(FormBuilderInterface $formBuilder, Product $product): void
    {
        // Ajout d'une checkbox pour gérer les produits sans variants
        $formBuilder->add('no_variant', CheckboxType::class, [
            'label' => 'Produit sans variants',
            'required' => false,
            'data' => $product->isSimpleProduct(),
            'attr' => [
                'data-admin-product-variant-options-target' => 'noVariant',
                'data-action' => 'admin-product-variant-options#toggle'
            ]
        ]);
        // Création des choiceType pour tous les types d'options et leurs options respectives
        $options = $this->productOptionRepository->findAll();
        foreach ($options as $option)
        {
            $optionValues = $this->productOptionValueRepository->findBy([
                'option' => $option->getId()
            ]);

            if (!empty($optionValues)) {
                $formBuilder
                    ->add('Option' . $option->getId(), ChoiceType::class, [
                        'label' => $option->getName(),
                        'choices' => $optionValues,
                        'choice_label' => function ($optionValue) {
                            return $optionValue->getValue();
                        },
                        'row_attr' => [
                            'class' => 'variant-option'
                        ],
                        'multiple' => true,
                        'expanded' => true,
                    ]);
            }
        }
    }

    public function createUniqueVariant(Product $product): void
    {
        // On vérifie que le variant unique n'existe pas déjà, s'il existe on ne fait rien
        if (!($this->productVariantRepository->findOneBy(['code' => $product->getName()]))) {
            $product->setSimpleProduct(true);
            $this->productRepository->save($product, true);
            // On supprime les variants existants pour ce produit
            $variants = $this->productVariantRepository->findBy(['product' => $product]);
            foreach ($variants as $variant) {
                $this->productVariantRepository->remove($variant, true);
            }
            // On crée le variant sans options pour le produit
            $variant = new ProductVariant();
            $variant->setProduct($product);
            $code = $product->getName();
            $variant->setCode($code);
            $this->productVariantRepository->save($variant, true);
        }
    }

    public function deleteUniqueVariant(Product $product): void
    {
        $product->setSimpleProduct(false);
        $this->productRepository->save($product, true);
        $variant = $this->productVariantRepository->findOneBy(['code' => $product->getName()]);
        if ($variant) {
            $this->productVariantRepository->remove($variant, true);
        }
    }

    public function createVariant(Product $product, array $options): void
    {
        $variant = new ProductVariant();
        $variant->setProduct($product);
        $code = $product->getName() . ':' . implode(',', $options);
        $variant->setCode($code);
        if (!($this->productVariantRepository->findBy(['code' => $code]))) {
            $this->productVariantRepository->save($variant, true);

            for ($i = 0; $i < count($options); $i++) {
                $newProductVariantOption = new ProductVariantOption();
                $newProductOptionValue = $this->productOptionValueRepository->findOneBy(['value' => $options[$i]]);
                $productVariantOptionCode = $variant->getCode() . '//' . $newProductOptionValue->getValue();
                $newProductVariantOption->setVariant($variant)
                    ->setCode($productVariantOptionCode)
                    ->setOption($newProductOptionValue->getOption())
                    ->setValue($newProductOptionValue);

                $this->productVariantOptionRepository->save($newProductVariantOption, true);
            }
        }
    }

    public function processOptionsDataOnly(array $data): array
    {
        $filteredData = [];
        foreach($data as $optionName => $selectedValues) {
            if (str_starts_with($optionName, 'Option')) {
                $filteredData[] = $selectedValues;
            }
        }
        return $filteredData;
    }

    public function areOptionsSelected(Product $product, array $sortedOptionValues): bool
    {
        foreach ($sortedOptionValues as $values) {
            if (!empty($values)) {
                return false;
            }
        }
        return true;
    }

    public function generateDataToCombine(array $data): array
    {
        $dataToCombine = [];
        foreach ($data as $optionValues) {
            if (!empty($optionValues)) {
                $dataToCombine[] = $optionValues;
            }
        }
        return $dataToCombine;
    }

    public function generateCombinations(array $dataToCombine): array
    {
        $combinations = [[]];
        foreach ($dataToCombine as $optionValues) {
            $tmp = [];
            foreach ($combinations as $combination) {
                foreach ($optionValues as $value) {
                    $tmp[] = array_merge($combination, [$value->getValue()]);
                }
            }
            $combinations = $tmp;
        }
        return $combinations;
    }
}