<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\PasswordEditType;
use App\Form\ProfileEditType;
use App\Repository\CategoryRepository;
use App\Service\UserService;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/profile')]
#[IsGranted('ROLE_USER')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'app_profile')]
    public function index(
        CategoryRepository $categoryRepository
    ): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();
        $categories = $categoryRepository->findMotherCategories();

        return $this->render('profile/index.html.twig', [
            'categories' => $categories,
            'user' => $user
        ]);
    }

    #[Route('/changeProfile', name:'app_change_profile')]
    public function changeAccount(
        Request $request,
        CategoryRepository $categoryRepository,
        UserService $userService
    ): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();
        $categories = $categoryRepository->findMotherCategories();

        $form = $this->createForm(ProfileEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $newEmail = $form['email']->getData();
                $newEmailConfirm = $form['emailConfirm']->getData();
                if (($newEmail !== $user->getEmail() && !empty($newEmail))) {
                    $userService->updateEmail($user, $newEmail, $newEmailConfirm);
                    $this->addFlash('success', 'Adresse mail modifée avec succès');
                }

                $newPhone = $form['phone']->getData();
                if ($newPhone !== $user->getPhone() && !empty($newPhone)) {
                    $userService->updatePhone($user, $newPhone);
                    $this->addFlash('success', 'Numéro de téléphone modifé avec succès');
                }

                $newAddress = $form['address']->getData();
                if ($newAddress !== $user->getAddress() && !empty($newAddress)) {
                    $userService->updateAddress($user, $newAddress);
                    $this->addFlash('success', 'Adresse modifée avec succès');
                }

                $newZipcode = $form['zipcode']->getData();
                if ($newZipcode !== $user->getZipcode() && !empty($newZipcode)) {
                    $userService->updateZipcode($user, $newZipcode);
                    $this->addFlash('success', 'Code postal modifé avec succès');
                }

                $newCity = $form['city']->getData();
                if ($newCity !== $user->getCity() && !empty($newCity)) {
                    $userService->updateCity($user, $newCity);
                    $this->addFlash('success', 'Ville modifée avec succès');
                }

            } catch (Exception $e) {
                $this->addFlash('error', $e->getMessage());
            }

            return $this->redirectToRoute('app_change_profile');
        }

        return $this->render('profile/changeAccount.html.twig', [
            'categories' => $categories,
            'form' => $form
        ]);
    }

    #[Route('/changePassword', name:'app_change_password')]
    public function changePassword(
        Request $request,
        CategoryRepository $categoryRepository,
        UserService $userService
    ): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var User $user */
        $user = $this->getUser();
        $categories = $categoryRepository->findMotherCategories();

        $form = $this->createForm(PasswordEditType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            try {
                $oldPassword = $form['oldPassword']->getData();
                $newPassword = $form['newPassword']->getData();
                $newPasswordConfirm = $form['newPasswordConfirm']->getData();

                $userService->updatePassword($user, $oldPassword, $newPassword, $newPasswordConfirm);
                $this->addFlash('success', 'Mot de passe modifié avec succès');
            } catch (Exception $e) {
                $this->addFlash('error', $e->getMessage());
                $this->redirectToRoute('app_change_password');
            }
        }

        return $this->render('profile/changePassword.html.twig', [
            'categories' => $categories,
            'form' => $form
        ]);
    }
}