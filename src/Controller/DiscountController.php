<?php

namespace App\Controller;

use App\Entity\Discount;
use App\Form\DiscountType;
use App\Repository\DiscountRepository;
use App\Service\DiscountService;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Exception;
use InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/discount')]
#[IsGranted('ROLE_ADMIN')]
class DiscountController extends AbstractController
{
    private DiscountService $discountService;

    public function __construct(DiscountService $discountService)
    {
        $this->discountService = $discountService;
    }

    #[Route('/', name: 'app_discount_index', methods: ['GET'])]
    public function index(DiscountRepository $discountRepository): Response
    {
        return $this->render('discount/index.html.twig', [
            'discounts' => $discountRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_discount_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DiscountService $discountService, DiscountRepository $discountRepository): Response
    {
        $discount = new Discount();
        $form = $this->createForm(DiscountType::class, $discount);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $input = $form['value']->getData();
            try {
                $this->discountService->createDiscount($discount, $input);
                $this->addFlash('success', 'Réduction ajoutée avec succès.');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Ce code promotionnel existe déjà.');
                return $this->redirectToRoute('app_discount_new');
            } catch (InvalidArgumentException|\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_discount_new');
            }
            return $this->redirectToRoute('app_discount_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('discount/new.html.twig', [
            'discount' => $discount,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_discount_show', methods: ['GET'])]
    public function show(Discount $discount): Response
    {
        return $this->render('discount/show.html.twig', [
            'discount' => $discount,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_discount_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Discount $discount, DiscountRepository $discountRepository): Response
    {
        $form = $this->createForm(DiscountType::class, $discount);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            $input = $form['value']->getData();
            try {
                $this->discountService->createDiscount($discount, $input);
                $this->addFlash('success', 'Réduction ajoutée avec succès.');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Ce code promotionnel existe déjà.');
                return $this->redirectToRoute('app_discount_new');
            } catch (InvalidArgumentException|\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_discount_new');
            }
            return $this->redirectToRoute('app_discount_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('discount/edit.html.twig', [
            'discount' => $discount,
            'form' => $form
        ]);
    }

    #[Route('/{id}', name: 'app_discount_delete', methods: ['POST'])]
    public function delete(Request $request, Discount $discount, DiscountRepository $discountRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $discount->getId(), $request->request->get('_token'))) {
            try {
                $this->discountService->deleteDiscount($discount);
                $this->addFlash('success', 'Réduction supprimée avec succès.');
            } catch (Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_discount_index');
            }
        }
        return $this->redirectToRoute('app_discount_index', [], Response::HTTP_SEE_OTHER);
    }
}