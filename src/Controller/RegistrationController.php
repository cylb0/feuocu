<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterFormType;
use App\Repository\CategoryRepository;
use App\Service\UserService;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;

class RegistrationController extends AbstractController
{
    private CategoryRepository $categoryRepository;
    private MailerInterface $mailer;
    private VerifyEmailHelperInterface $verifyEmailHelper;

    public function __construct(
        CategoryRepository $categoryRepository,
        MailerInterface $mailer,
        VerifyEmailHelperInterface $verifyEmailHelper
    )
    {
        $this->categoryRepository = $categoryRepository;
        $this->mailer = $mailer;
        $this->verifyEmailHelper = $verifyEmailHelper;
    }
    #[Route('/registration', name: 'app_registration')]
    public function register(
        Request $request,
        UserService $userService
    ): Response
    {
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $this->addFlash('error', 'On a plein de doubles-trucs ici mais les double-comptes on en fait pas.');
            return $this->redirectToRoute('app_home');
        }

        $user = new User();
        $categories = $this->categoryRepository->findMotherCategories();
        $form = $this->createForm(RegisterFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && !$form->isValid()) {
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $userService->registerUser(
                    $user, $form['email']->getData(), $form['emailConfirm']->getData(),
                    $form['password']->getData(), $form['passwordConfirm']->getData(), $form['birth']->getData());

                $signatureComponents = $this->verifyEmailHelper->generateSignature(
                    'app_verify_user',
                    $user->getId(),
                    $user->getEmail()
                );
                $email = new TemplatedEmail();
                $email->from('contact@feuocu.fr');
                $email->to($user->getEmail());
                $email->htmlTemplate('registration/confirmation_email.html.twig');
                $email->context(['signedUrl' => $signatureComponents->getSignedUrl()]);
                $this->mailer->send($email);

                $this->addFlash('success', 'Votre compte a été créé avec succès ! Nous vous avons envoyé un e-mail de confirmation avec un lien pour activer votre compte. Veuillez vérifier votre boîte de réception et votre dossier spam si vous ne trouvez pas l\'e-mail dans votre boîte de réception.');
            } catch (UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Cet email est déjà utilisé.');
                return $this->redirectToRoute('app_registration');
            } catch (\Exception $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_registration');
            } catch (TransportExceptionInterface $e) {
                $this->addFlash('error', $e->getMessage());
                return $this->redirectToRoute('app_registration');
            }

            return $this->redirectToRoute('app_login', [], Response::HTTP_SEE_OTHER);

        }

        return $this->render('registration/index.html.twig', [
            'categories' => $categories,
            'form' => $form,
        ]);
    }

    #[Route('/verify', name:'app_verify_user')]
    public function verifyUserEmail( Request $request): Response
    {
//        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
//        $user = $this->getUser();
//
//        try {
//            $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getId(), $user->getEmail());
//        } catch (VerifyEmailExceptionInterface $e) {
//            $this->addFlash('error', $e->getReason());
//            return  $this->redirectToRoute('app_register');
//        }
//        $user->
    }
}
