<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Form\BrandEditType;
use App\Form\BrandType;
use App\Repository\BrandRepository;
use App\Repository\ImageRepository;
use App\Service\BrandService;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/brand')]
#[IsGranted('ROLE_ADMIN')]
class BrandController extends AbstractController
{
    private BrandService $brandService;

    public function __construct(BrandService $brandService) {
        $this->brandService = $brandService;
    }
    #[Route('/', name: 'app_brand_index', methods: ['GET'])]
    public function index(BrandRepository $brandRepository): Response
    {
        return $this->render('brand/index.html.twig', [
            'brands' => $brandRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_brand_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ImageRepository $imageRepository):
    Response
    {
        $brand = new Brand();
        $form = $this->createForm(BrandType::class, $brand);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFile = $form['image']->getData();
                $this->brandService->createBrand($brand, $imageRepository, $imageFile);
                $this->addFlash('success', 'Marque ajoutée avec succès.');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une marque portant ce nom existe déjà.');
                return $this->redirectToRoute('app_brand_new');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_brand_new');
            }
            return $this->redirectToRoute('app_brand_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('brand/new.html.twig', [
            'form' => $form,
            'brand' => $brand,
        ]);
    }

    #[Route('/{id}', name: 'app_brand_show', methods: ['GET'])]
    public function show(Brand $brand): Response
    {
        return $this->render('brand/show.html.twig', [
            'brand' => $brand,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_brand_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Brand $brand, ImageRepository $imageRepository): Response
    {
        $oldName = $brand->getName();
        $form = $this->createForm(BrandEditType::class, $brand);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFile = $form['image']->getData();
                $this->brandService->updateBrand($oldName, $brand, $imageRepository, $imageFile);
                $this->addFlash('success', 'Marque modifiée avec succès.');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une marque portant ce nom existe déjà.');
                return $this->redirectToRoute('app_brand_edit');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_brand_edit');
            }
            return $this->redirectToRoute('app_brand_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('brand/edit.html.twig', [
            'form' => $form,
            'brand' => $brand,
        ]);
    }

    #[Route('/{id}', name: 'app_brand_delete', methods: ['POST'])]
    public function delete(Request $request, Brand $brand, ImageRepository $imageRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$brand->getId(), $request->request->get('_token'))) {
            try {
                $this->brandService->deleteBrand($brand, $imageRepository);
                $this->addFlash('success', 'Marque supprimée avec succès');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_brand_index');
            }
        }
        return $this->redirectToRoute('app_brand_index', [], Response::HTTP_SEE_OTHER);
    }
}
