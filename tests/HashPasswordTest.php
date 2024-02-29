<?php

namespace App\Tests;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\UserService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class HashPasswordTest extends TestCase
{
    private const VALID_PASSWORD = '1234!a';
    private const EMPTY_PASSWORD = '';
    private const EMPTY_MESSAGE = 'Le mot de passe ne peut pas être vide.';
    private const TOO_SHORT_PASSWORD = '1a!';
    private const TOO_SHORT_MESSAGE = 'Le mot de passe doit contenir au minimum 6 caractères';
    private const REGEX_FAIL_PASSWORD = 'azert1';
    private const REGEX_FAIL_MESSAGE = 'Le mot de passe doit contenir au moins une lettre, un chiffre et un caractère spécial.';

    public function testValidPassword(): void
    {
        $user = new User();

        $passwordHashMock = $this->createMock(UserPasswordHasherInterface::class);
        $passwordHashMock->expects($this->once())
            ->method('hashPassword')
            ->with($user, self::VALID_PASSWORD)
            ->willReturn('success');
        $userRepositoryMock = $this->createMock(UserRepository::class);
        $validatorMock = $this->createMock(ValidatorInterface::class);
        $userService = new UserService($passwordHashMock, $userRepositoryMock, $validatorMock);

        $hashedPassword = $userService->hashPassword(self::VALID_PASSWORD, $user);
        $this->assertEquals('success', $hashedPassword);
    }

    public function testEmptyPassword(): void
    {
        $user = new User();

        $passwordHashMock = $this->createMock(UserPasswordHasherInterface::class);
        $userRepositoryMock = $this->createMock(UserRepository::class);
        $validatorMock = $this->createMock(ValidatorInterface::class);
        $userService = new UserService($passwordHashMock, $userRepositoryMock, $validatorMock);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(self::EMPTY_MESSAGE);
        $userService->hashPassword(self::EMPTY_PASSWORD, $user);
    }

    public function testTooShortPassword(): void
    {
        $user = new User();

        $passwordHashMock = $this->createMock(UserPasswordHasherInterface::class);
        $userRepositoryMock = $this->createMock(UserRepository::class);
        $validatorMock = $this->createMock(ValidatorInterface::class);
        $userService = new UserService($passwordHashMock, $userRepositoryMock, $validatorMock);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(self::TOO_SHORT_MESSAGE);
        $userService->hashPassword(self::TOO_SHORT_PASSWORD, $user);
    }

    public function testRegexFailPassword(): void
    {
        $user = new User();

        $passwordHashMock = $this->createMock(UserPasswordHasherInterface::class);
        $userRepositoryMock = $this->createMock(UserRepository::class);
        $validatorMock = $this->createMock(ValidatorInterface::class);
        $userService = new UserService($passwordHashMock, $userRepositoryMock, $validatorMock);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage(self::REGEX_FAIL_MESSAGE);
        $userService->hashPassword(self::REGEX_FAIL_PASSWORD, $user);
    }
}