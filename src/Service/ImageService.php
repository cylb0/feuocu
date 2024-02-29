<?php

namespace App\Service;

use App\Entity\Image;
use App\Repository\ImageRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageService
{
    public static function saveImage(UploadedFile $uploadedFile, string $name, ImageRepository $imageRepository, string $type): Image
    {
        $image = new Image();
        $fileName = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $newFileName = $fileName.'-'.uniqid().'.'.$uploadedFile->guessExtension();
        $image->setPath($type . '/' . $name . '/'    . $newFileName)
            ->setAlt('Photo de ' . $name );
        $imageRepository->save($image, true);

        return $image;
    }

    public static function uploadImage(UploadedFile $uploadedFile, string $directory, string $fileName): void
    {
        $uploadedFile->move($directory, $fileName);
    }

    public static function unlinkImage(string $path): void {

        if (file_exists($path)) {
            unlink($path);
            $folderPath = substr($path, 0, strrpos($path, '/'));
            if (self::isDirEmpty($folderPath)) {
                rmdir($folderPath);
            }
        }
    }

    public static function isDirEmpty(string $dir)
    {
        $files = array_diff(scandir($dir), array('.', '..'));
        return count($files) === 0;
    }
}