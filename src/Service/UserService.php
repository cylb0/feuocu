<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use InvalidArgumentException;
use Symfony\Component\PasswordHasher\Exception\InvalidPasswordException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class UserService
{
    private $passwordHasher;
    private $userRepository;
    private $validator;

    public function __construct
    (
        UserPasswordHasherInterface $passwordHasher,
        UserRepository $userRepository,
        ValidatorInterface $validator
    )
    {
        $this->passwordHasher = $passwordHasher;
        $this->userRepository = $userRepository;
        $this->validator = $validator;
    }

    public function registerUser(User $user, string $email, string $emailConfirm, ?string $password, ?string $passwordConfirm, \DateTime $birth): void
    {
        if ($email !== $emailConfirm) {
            throw new \Exception('Les addresses email ne correspondent pas');
        }
        if ($password !== $passwordConfirm) {
            throw new \Exception('Les mots de passe ne correspondent pas.');
        }
        $user->setEmail($email);

        $this->createUser($user, $password, $birth);
    }

    public function createUser(User $user, ?string $password, \DateTime $birth): void
    {
        if (!$this->isAdult($birth)) {
            throw new \Exception('Il a perdu sa maman ? Il reviendra quand il sera plus grand !');
        }
        $password = $this->hashPassword($password, $user);

        $user->setPassword($password);

        $this->userRepository->save($user, true);
    }

    public function hashPassword(?string $passwordToHash, User $user): string
    {
        if (empty($passwordToHash)) {
            throw new InvalidArgumentException('Le mot de passe ne peut pas être vide.');
        }
        if (strlen($passwordToHash) < 6) {
            throw new InvalidArgumentException('Le mot de passe doit contenir au minimum 6 caractères');
        }
        if (!preg_match('/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).+$/', $passwordToHash)) {
            throw new InvalidArgumentException('Le mot de passe doit contenir au moins une lettre, un chiffre et un caractère spécial.');
        }
        return $this->passwordHasher->hashPassword($user, $passwordToHash);
    }

    public function updateEmail(User $user, ?string $email, ?string $emailConfirm): void
    {
        if (empty($email) || empty($emailConfirm)) {
            throw new \Exception('Vous devez renseigner l\'adresse email et la confirmation de l\'adresse email.');
        }
        if ($email !== $emailConfirm) {
            throw new \Exception('Les deux adresses mail ne correspondent pas');
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($emailConfirm, FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('Veuillez entrer une adresse email valide');
        }
        $user->setEmail($email);
        $this->validate($user);
        $this->userRepository->save($user, true);
    }

    public function updatePhone(User $user, string $phone): void
    {
        $user->setPhone($phone);
        $this->validate($user);
        $this->userRepository->save($user, true);
    }

    public function updateAddress(User $user, string $address): void
    {
        $user->setAddress($address);
        $this->validate($user);
        $this->userRepository->save($user, true);
    }

    public function updateZipcode(User $user, string $zipcode): void
    {
        $user->setZipcode($zipcode);
        $this->validate($user);
        $this->userRepository->save($user, true);
    }

    public function updateCity(User $user, string $city): void
    {
        $user->setCity($city);
        $this->validate($user);
        $this->userRepository->save($user, true);
    }

    public function updatePassword(User $user, string $oldPass, string $newPass, string $newPassConfirm): void
    {

        if (!$this->passwordHasher->isPasswordValid($user, $oldPass)) {
            throw new InvalidPasswordException('Le mot de passe est incorrect');
        }

        if ($newPass !== $newPassConfirm) {
            throw new \Exception('Les mots de passe ne correspondent pas.');
        }

        if ($oldPass === $newPass) {
            throw new \Exception('Le nouveau mot de passe est identique à l\'ancien.');
        }

        $newHashedPassword = $this->hashPassword($newPass, $user);
        $user->setPassword($newHashedPassword);
        $this->userRepository->save($user, true);
    }

    public function isAdult(\DateTime $birth): bool
    {
        $adult = new \DateTime('18 years ago');
        return $birth <= $adult;
    }

    public function validate(User $user): void
    {
        $violations = $this->validator->validate($user);
        if (count($violations) > 0) {
            $errors = [];
            foreach ($violations as $violation) {
                $errors[] = $violation->getMessage();
            }
            throw new \Exception(implode(" ", $errors));
        }
    }
}