<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/delivery', name: 'app_delivery')]
    public function delivery(
        CategoryRepository $categoryRepository
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('pages/delivery.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/return', name: 'app_return')]
    public function return(
        CategoryRepository $categoryRepository
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('pages/return.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/payments', name: 'app_payments')]
    public function payments(
        CategoryRepository $categoryRepository
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('pages/payments.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/about', name: 'app_about')]
    public function about(
        CategoryRepository $categoryRepository
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('pages/about.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(
        CategoryRepository $categoryRepository
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('pages/contact.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/rgpd', name: 'app_rgpd')]
    public function rgpd(
        CategoryRepository $categoryRepository
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('pages/rgpd.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/gift', name: 'app_gift')]
    public function gift(
        CategoryRepository $categoryRepository
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('pages/gift.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/cgu', name: 'app_cgu')]
    public function cgu(
        CategoryRepository $categoryRepository
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('pages/cgu.html.twig', [
            'categories' => $categories
        ]);
    }

    #[Route('/faq', name: 'app_faq')]
    public function faq(
        CategoryRepository $categoryRepository
    ): Response
    {
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('pages/faq.html.twig', [
            'categories' => $categories
        ]);
    }
}
