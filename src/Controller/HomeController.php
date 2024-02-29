<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\HeroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        CategoryRepository $categoryRepository,
        HeroRepository $heroRepository,
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();
        $hero = $heroRepository->findBy(['active' => true]);

        return $this->render('home/index.html.twig', [
            'title' => 'feuOcu',
            'categories' => $categories,
            'hero' => $hero ? $hero[0] : null
        ]);
    }
}