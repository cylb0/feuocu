<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\ImageRepository;
use App\Service\CategoryService;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/category')]
#[IsGranted('ROLE_ADMIN')]
class CategoryController extends AbstractController
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    #[Route('/', name: 'app_category_index', methods: ['GET'])]
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ImageRepository $imageRepository): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFile = $form['image']->getData();
                $this->categoryService->createCategory($category, $imageRepository, $imageFile);
                $this->addFlash('success', 'Catégorie ajoutée avec succès');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une catégorie portant ce nom existe déjà');
                return $this->redirectToRoute('app_category_new');
            } catch (\Exception $e){
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_category_new');
            }

            return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('category/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {
        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_category_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Category $category,
        ImageRepository $imageRepository): Response
    {
        $oldName = $category->getName();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $imageFile = $form['image']->getData();
                $this->categoryService->updateCategory($oldName, $category, $imageRepository, $imageFile);
                $this->addFlash('success', 'Catégorie modifiée avec succès');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une catégorie portant ce nom existe déjà.');
                return $this->redirectToRoute('app_category_edit');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_category_edit');
            }

            return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('category/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_category_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Category $category,
        ImageRepository $imageRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            try {
                $this->categoryService->deleteCategory($category, $imageRepository);
                $this->addFlash('success', 'Catégorie supprimée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_category_index');
            }
        }
        return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
    }
}