<?php

namespace App\Service;

use App\Entity\Hero;
use App\Repository\HeroRepository;
use App\Repository\ImageRepository;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class HeroService
{
    private HeroRepository $heroRepository;
    private ParameterBagInterface $parameterBag;

    public function __construct(HeroRepository $heroRepository, ParameterBagInterface $parameterBag)
    {
        $this->heroRepository = $heroRepository;
        $this->parameterBag = $parameterBag;
    }

    public function createHero(
        bool $active,
        Hero $hero,
        ImageRepository $imageRepository,
        ?UploadedFile $imageFile): void
    {
        if ($imageFile) {
            $image = ImageService::saveImage($imageFile, 'hero', $imageRepository, 'heroes');
            $hero->setImage($image);
            $directory = $this->parameterBag->get('images_directory') . '/heroes/hero/';
            $fileName = $image->getFileName();
            ImageService::uploadImage($imageFile, $directory, $fileName);
        }

        $this->handleActive($this->heroRepository, $hero, $active);

        $this->heroRepository->save($hero, true);
    }

    public function updateHero(
        bool $active,
        Hero $hero,
        ImageRepository $imageRepository,
        ?UploadedFile $imageFile
    ): void
    {
        if ($imageFile) {
            $currentImage = $hero->getImage();
            $image = ImageService::saveImage($imageFile, 'hero', $imageRepository, 'heroes');
            $hero->setImage($image);
            $directory = $this->parameterBag->get('images_directory') . '/heroes/hero/';
            $fileName = $image->getFileName();
            ImageService::uploadImage($imageFile, $directory, $fileName);

            if ($currentImage) {
                ImageService::unlinkImage($this->parameterBag->get('images_directory') . '/' . $currentImage->getPath());
                $imageRepository->remove($currentImage);
            }
        }

        $this->handleActive($this->heroRepository, $hero, $active);

        $this->heroRepository->save($hero, true);
    }

    public function deleteHero(Hero $hero, ImageRepository $imageRepository): void
    {
        $image = $hero->getImage();
        if ($image) {
            $this->heroRepository->remove($hero);
            $imagePath = $image->getPath();
            $directory = $this->parameterBag->get('images_directory') . '/';
            ImageService::unlinkImage($directory . $imagePath);
            $imageRepository->remove($image, true);
        } else {
            $this->heroRepository->remove($hero, true);
        }
    }
    public function handleActive(HeroRepository $heroRepository, Hero $hero, bool $active): void
    {
        if ($active) {
            if (!$hero->isActive()) {
                $hero->setActive(true);
                $heroRepository->disableAll();
            }
        } else {
            $hero->setActive(false);
        }
    }
}