<?php

namespace App\Controller;

use App\Entity\ProductOption;
use App\Form\ProductOptionType;
use App\Repository\ProductOptionRepository;
use Doctrine\DBAL\Exception\ForeignKeyConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/product-option')]
#[IsGranted('ROLE_ADMIN')]
class ProductOptionController extends AbstractController
{
    #[Route('/', name: 'app_product_option_index', methods: ['GET'])]
    public function index(ProductOptionRepository $productOptionRepository): Response
    {
        return $this->render('product_option/index.html.twig', [
            'product_options' => $productOptionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_product_option_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProductOptionRepository $productOptionRepository): Response
    {
        $productOption = new ProductOption();
        $form = $this->createForm(ProductOptionType::class, $productOption);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $productOptionRepository->save($productOption, true);
                $this->addFlash('success', 'Type de variation ajoué avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_product_option_new');
            }

            return $this->redirectToRoute('app_product_option_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product_option/new.html.twig', [
            'product_option' => $productOption,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_option_show', methods: ['GET'])]
    public function show(ProductOption $productOption): Response
    {
        return $this->render('product_option/show.html.twig', [
            'product_option' => $productOption,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_product_option_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProductOption $productOption, ProductOptionRepository $productOptionRepository): Response
    {
        $form = $this->createForm(ProductOptionType::class, $productOption);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $productOptionRepository->save($productOption, true);
                $this->addFlash('success', 'Type de variation modifié avec succès.');
            } catch(\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_product_option_edit');
            }
            return $this->redirectToRoute('app_product_option_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product_option/edit.html.twig', [
            'product_option' => $productOption,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_option_delete', methods: ['POST'])]
    public function delete(Request $request, ProductOption $productOption, ProductOptionRepository $productOptionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$productOption->getId(), $request->request->get('_token'))) {

            try {
                $productOptionRepository->remove($productOption, true);
                $this->addFlash('success', 'Type de variation supprimé avec succès.');
            } catch (ForeignKeyConstraintViolationException $e) {
                $this->addFlash('error', 'Impossible de supprimer ce type de variation car celà aurait des conséquences irréversibles.');
                return $this->redirectToRoute('app_product_option_index');
            }
        }

        return $this->redirectToRoute('app_product_option_index', [], Response::HTTP_SEE_OTHER);
    }
}
