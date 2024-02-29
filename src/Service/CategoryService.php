<?php

namespace App\Service;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\ImageRepository;
use Cocur\Slugify\Slugify;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class CategoryService
{
    private CategoryRepository $categoryRepository;
    private ParameterBagInterface $parameterBag;
    private Slugify $slugify;

    public function __construct(
        CategoryRepository $categoryRepository,
        ParameterBagInterface $parameterBag,
        Slugify $slugify
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->parameterBag = $parameterBag;
        $this->slugify = $slugify;
    }

    public function createCategory(Category $category, ImageRepository $imageRepository, ?UploadedFile $imageFile): void
    {
        $slug = $this->slugify->slugify($category->getName()) . uniqid();
        $category->setSlug($slug);

        if ($imageFile) {
            $categoryName = $category->getName();
            $image = ImageService::saveImage($imageFile, $categoryName, $imageRepository, 'categories');
            $category->setImage($image);
            $directory = $this->parameterBag->get('images_directory') . '/categories/' . $categoryName;
            $fileName = $image->getFileName();
            ImageService::uploadImage($imageFile, $directory, $fileName);
        }
        $this->categoryRepository->save($category, true);
    }

    public function updateCategory(string $oldName, Category $category, ImageRepository $imageRepository, ?UploadedFile $imageFile): void
    {
        if ($oldName !== $category->getName()) {
            $slug = $this->slugifyName($category);
            $category->setSlug($slug);
        }
        if ($imageFile) {
            $currentImage = $category->getImage();
            $image = ImageService::saveImage($imageFile, $category->getName(), $imageRepository, 'categories');
            $category->setImage($image);
            $directory = $this->parameterBag->get('images_directory') . '/categories/' . $category->getName();
            $fileName = $image->getFileName();
            ImageService::uploadImage($imageFile, $directory, $fileName);
            if ($currentImage) {
                ImageService::unlinkImage($this->parameterBag->get('images_directory') . '/' . $currentImage->getPath());
            }
        }
        $this->categoryRepository->save($category, true);
    }

    public function deleteCategory(Category $category, ImageRepository $imageRepository): void
    {
        $image = $category->getImage();
        if ($image) {
            $this->categoryRepository->remove($category);
            $imagePath = $image->getPath();
            $directory = $this->parameterBag->get('images_directory') . '/';
            ImageService::unlinkImage($directory . $imagePath);
            $imageRepository->remove($image, true);
        } else {
            $this->categoryRepository->remove($category, true);
        }
    }
    public function slugifyName(Category $category): string
    {
        return $this->slugify->slugify($category->getName()) . uniqid();
    }

}