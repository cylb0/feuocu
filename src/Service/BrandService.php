<?php

namespace App\Service;

use App\Entity\Brand;
use App\Repository\BrandRepository;
use App\Repository\ImageRepository;
use Cocur\Slugify\Slugify;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Validator\ValidatorInterface;

use App\MyDependency;




class BrandService
{
    private BrandRepository $brandRepository;
    private ParameterBagInterface $parameterBag;
    private Slugify $slugify;
    private ValidatorInterface $validator;

    public function __construct(
        BrandRepository $brandRepository,
        ParameterBagInterface $parameterBag,
        Slugify $slugify,
        ValidatorInterface $validator)
    {
        $this->brandRepository = $brandRepository;
        $this->parameterBag = $parameterBag;
        $this->slugify = $slugify;
        $this->validator = $validator;
    }
    public function createBrand(
        Brand $brand,
        ImageRepository $imageRepository,
        UploadedFile $imageFile): void
    {
        $slug = $this->slugify->slugify($brand->getName()) . uniqid();
        $brand->setSlug($slug);

        $image = ImageService::saveImage($imageFile, $brand->getName(), $imageRepository, 'brands');
        $brand->setImage($image);

        $this->brandRepository->save($brand, true);

        $directory = $this->parameterBag->get('images_directory') . '/brands/' . $brand->getName();
        $fileName = $image->getFileName();
        ImageService::uploadImage($imageFile, $directory, $fileName);
    }

    public function updateBrand(
        string $oldName,
        Brand $brand,
        ImageRepository $imageRepository,
        ?UploadedFile $imageFile): void
    {
        if ($oldName !== $brand->getName()) {
            $slug = $this->slugify->slugify($brand->getName()) . uniqid();
            $brand->setSlug($slug);
        }

        if ($imageFile) {
            $currentImage = $brand->getImage();

            $image = ImageService::saveImage($imageFile, $brand->getName(), $imageRepository, 'brands');
            $brand->setImage($image);

            $directory = $this->parameterBag->get('images_directory') . '/brands/' . $brand->getName();
            $fileName = $image->getFileName();
            ImageService::uploadImage($imageFile, $directory, $fileName);

            if ($currentImage) {
                ImageService::unlinkImage($this->parameterBag->get('images_directory') . '/' . $currentImage->getPath());
                $imageRepository->remove($currentImage);
            }
        }

        $this->brandRepository->save($brand, true);
    }

    public function deleteBrand(Brand $brand, ImageRepository $imageRepository): void
    {
        $image = $brand->getImage();
        if ($image) {
            $this->brandRepository->remove($brand);
            $path = $image->getPath();
            $directory = $this->parameterBag->get('images_directory') . '/';
            ImageService::unlinkImage($directory . $path);
            $imageRepository->remove($image, true);
        } else {
            $this->brandRepository->remove($brand, true);
        }
    }
    public function validate(Brand $brand): void
    {
        $violations = $this->validator->validate($brand);
        if (count($violations) > 0) {
            $errors = [];
            foreach ($violations as $violation) {
                $errors[] = $violation->getMessage();
            }
            throw new \Exception(implode(" ", $errors));
        }
    }
}