<?php

namespace App\Service;

use App\Entity\Feature;
use App\Repository\FeatureRepository;
use App\Repository\ImageRepository;
use Cocur\Slugify\Slugify;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FeatureService
{
    private FeatureRepository $featureRepository;
    private ParameterBagInterface $parameterBag;
    private Slugify $slugify;

    public function __construct(FeatureRepository $featureRepository, ParameterBagInterface $parameterBag, Slugify $slugify){
        $this->featureRepository = $featureRepository;
        $this->parameterBag = $parameterBag;
        $this->slugify = $slugify;
    }

    public function createFeature(
        Feature $feature,
        ImageRepository $imageRepository,
        ?UploadedFile $imageFile): void
    {
        $slug = $this->slugify->slugify($feature->getName()) . uniqid();
        $feature->setSlug($slug);
        if ($imageFile) {
            $image = ImageService::saveImage($imageFile, $feature->getName(), $imageRepository, 'features');
            $feature->setImage($image);

            $directory = $this->parameterBag->get('images_directory') . '/features/' . $feature->getName();
            $fileName = $image->getFileName();
            ImageService::uploadImage($imageFile, $directory, $fileName);
        }
        $this->featureRepository->save($feature, true);
    }

    public function updateFeature(
        string $oldName,
        Feature $feature,
        ImageRepository $imageRepository,
        ?UploadedFile $imageFile): void
    {
        if ($oldName !== $feature->getName()) {
            $slug = $this->slugify->slugify($feature->getName()) . uniqid();
            $feature->setSlug($slug);
        }

        if ($imageFile) {
            $currentImage = $feature->getImage();

            $image = ImageService::saveImage($imageFile, $feature->getName(), $imageRepository, 'features');
            $feature->setImage($image);

            $directory = $this->parameterBag->get('images_directory') . '/features/' . $feature->getName();
            $fileName = $image->getFileName();
            ImageService::uploadImage($imageFile, $directory, $fileName);

            if ($currentImage) {
                ImageService::unlinkImage($this->parameterBag->get('images_directory') . '/' . $currentImage->getPath());
                $imageRepository->remove($currentImage);
            }
        }

        $this->featureRepository->save($feature, true);
    }

    public function deleteFeature(Feature $feature, ImageRepository $imageRepository): void
    {
        $image = $feature->getImage();
        if ($image) {
            $this->featureRepository->remove($feature);
            $path = $image->getPath();
            $directory = $this->parameterBag->get('images_directory') . '/';
            ImageService::unlinkImage($directory . $path);
            $imageRepository->remove($image, true);
        } else {
            $this->featureRepository->remove($feature, true);
        }
    }
}