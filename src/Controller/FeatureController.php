<?php

namespace App\Controller;

use App\Entity\Feature;
use App\Form\FeatureType;
use App\Repository\FeatureRepository;
use App\Repository\ImageRepository;
use App\Service\FeatureService;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/feature')]
class FeatureController extends AbstractController
{
    private FeatureService $featureService;

    public function __construct(FeatureService $featureService) {
        $this->featureService = $featureService;
    }

    #[Route('/', name: 'app_feature_index', methods: ['GET'])]
    public function index(FeatureRepository $featureRepository): Response
    {
        $features = $featureRepository->findAll();
        return $this->render('feature/index.html.twig', [
            'features' => $features
        ]);
    }

    #[Route('/new', name: 'app_feature_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ImageRepository $imageRepository): Response
    {
        $feature = new Feature();
        $form = $this->createForm(FeatureType::class, $feature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFile = $form['image']->getData();
                $this->featureService->createFeature($feature, $imageRepository, $imageFile);
                $this->addFlash('success', 'Caractéristique ajoutée avec succès.');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une caractéristique avec ce nom existe déjà');
                return $this->redirectToRoute('app_feature_new');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_feature_new');
            }
            return $this->redirectToRoute('app_feature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('feature/new.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/{id}', name: 'app_feature_show', methods: ['GET'])]
    public function show(Feature $feature): Response
    {
        return $this->render('feature/show.html.twig', [
            'feature' => $feature,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_feature_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Feature $feature,
        ImageRepository $imageRepository): Response
    {
        $oldName = $feature->getName();
        $form = $this->createForm(FeatureType::class, $feature);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFile = $form['image']->getData();
                $this->featureService->updateFeature($oldName, $feature, $imageRepository, $imageFile);
                $this->addFlash('success', 'Caractéristique modifiée avec succès');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une caractéristique portant ce nom existe déjà.');
                return $this->redirectToRoute('app_feature_edit');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_feature_edit');
            }

            return $this->redirectToRoute('app_feature_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('feature/edit.html.twig', [
            'feature' => $feature,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_feature_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        ImageRepository $imageRepository,
        Feature $feature): Response
    {
        if ($this->isCsrfTokenValid('delete'.$feature->getId(), $request->request->get('_token'))) {
            try {
                $this->featureService->deleteFeature($feature, $imageRepository);
                $this->addFlash('success', 'Caractéristique supprimée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_feature_index');
            }
        }

        return $this->redirectToRoute('app_feature_index', [], Response::HTTP_SEE_OTHER);
    }
}
