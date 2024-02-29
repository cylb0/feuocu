<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Form\HeroEditType;
use App\Form\HeroType;
use App\Repository\HeroRepository;
use App\Repository\ImageRepository;
use App\Service\HeroService;
use App\Service\ImageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/hero')]
#[IsGranted('ROLE_ADMIN')]
class HeroController extends AbstractController
{
    private HeroService $heroService;

    public function __construct(HeroService $heroService)
    {
        $this->heroService = $heroService;
    }
    #[Route('/', name: 'app_hero_index', methods: ['GET'])]
    public function index(HeroRepository $heroRepository): Response
    {
        return $this->render('hero/index.html.twig', [
            'heroes' => $heroRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_hero_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ImageRepository $imageRepository): Response
    {
        $hero = new Hero();
        $form = $this->createForm(HeroType::class, $hero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFile = $form['image']->getData();
                $active = $form['active']->getData();
                $this->heroService->createHero($active, $hero, $imageRepository, $imageFile);
                $this->addFlash('success', 'Bannière ajoutée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_hero_new');
            }
            return $this->redirectToRoute('app_hero_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hero/new.html.twig', [
            'hero' => $hero,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_hero_show', methods: ['GET'])]
    public function show(Hero $hero): Response
    {
        return $this->render('hero/show.html.twig', [
            'hero' => $hero,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_hero_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Hero $hero, ImageRepository $imageRepository): Response
    {
        $form = $this->createForm(HeroEditType::class, $hero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFile = $form['image']->getData();
                $active = $form['active']->getData();
                $this->heroService->updateHero($active, $hero, $imageRepository, $imageFile);
                $this->addFlash('success', 'Bannière modifiée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_hero_new');
            }
            return $this->redirectToRoute('app_hero_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('hero/edit.html.twig', [
            'hero' => $hero,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_hero_delete', methods: ['POST'])]
    public function delete(Request $request, Hero $hero, ImageRepository $imageRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hero->getId(), $request->request->get('_token'))) {
            try {
                $this->heroService->deleteHero($hero, $imageRepository);
                $this->addFlash('success', 'Bannière supprimée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_hero_index');
            }
        }

        return $this->redirectToRoute('app_hero_index', [], Response::HTTP_SEE_OTHER);
    }
}
