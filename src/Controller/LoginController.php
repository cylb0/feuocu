<?php

namespace App\Controller;

use App\Form\LoginFormType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(
        AuthenticationUtils $authenticationUtils,
        CategoryRepository $categoryRepository
    ): Response
    {
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('app_home');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        $categories = $categoryRepository->findMotherCategories();
        $form = $this->createForm(LoginFormType::class);

        return $this->render('login/index.html.twig', [
            'categories' => $categories,
            'error' => $error,
            'last_username' => $lastUsername,
            'form' => $form
        ]);
    }
}