<?php

namespace App\Controller;

use App\Entity\ProductOptionValue;
use App\Form\ProductOptionValueType;
use App\Repository\ProductOptionValueRepository;
use App\Service\SortService;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use function Symfony\Component\Translation\t;

#[Route('/admin/product-option-value')]
#[IsGranted('ROLE_ADMIN')]
class ProductOptionValueController extends AbstractController
{
    #[Route('/', name: 'app_product_option_value_index', methods: ['GET'])]
    public function index(ProductOptionValueRepository $productOptionValueRepository): Response
    {
        return $this->render('product_option_value/index.html.twig', [
            'product_option_values' => $productOptionValueRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_product_option_value_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProductOptionValueRepository $productOptionValueRepository): Response
    {
        $productOptionValue = new ProductOptionValue();
        $form = $this->createForm(ProductOptionValueType::class, $productOptionValue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                if ($productOptionValue->getOption()->getType() !== 'color') {
                    $productOptionValue->setHexacode(null);
                }
                $productOptionValueRepository->save($productOptionValue, true);
                $this->addFlash('success', 'Variation modifiée avec succès.');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une variation portant ce nom existe déjà.');
                return $this->redirectToRoute('app_product_option_value_new');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_product_option_value_new');
            }

            return $this->redirectToRoute('app_product_option_value_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product_option_value/new.html.twig', [
            'product_option_value' => $productOptionValue,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_option_value_show', methods: ['GET'])]
    public function show(ProductOptionValue $productOptionValue): Response
    {
        return $this->render('product_option_value/show.html.twig', [
            'product_option_value' => $productOptionValue,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_product_option_value_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProductOptionValue $productOptionValue, ProductOptionValueRepository $productOptionValueRepository): Response
    {
        $form = $this->createForm(ProductOptionValueType::class, $productOptionValue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                if ($productOptionValue->getOption()->getType() !== 'color') {
                    $productOptionValue->setHexacode(null);
                }
                $productOptionValueRepository->save($productOptionValue, true);
                $this->addFlash('success', 'Variation modifiée avec succès.');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Une variation portant ce nom existe déjà.');
                return $this->redirectToRoute('app_product_option_value_edit');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_product_option_value_edit');
            }
            return $this->redirectToRoute('app_product_option_value_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product_option_value/edit.html.twig', [
            'product_option_value' => $productOptionValue,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_option_value_delete', methods: ['POST'])]
    public function delete(Request $request, ProductOptionValue $productOptionValue, ProductOptionValueRepository $productOptionValueRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$productOptionValue->getId(), $request->request->get('_token'))) {
            try {
                $productOptionValueRepository->remove($productOptionValue, true);
                $this->addFlash('success', 'Variation supprimée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_product_option_value_delete');
            }
        }

        return $this->redirectToRoute('app_product_option_value_index', [], Response::HTTP_SEE_OTHER);
    }
}
