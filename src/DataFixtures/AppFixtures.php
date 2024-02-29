<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // USERS
        $user1 = new User();
        $user1->setEmail('foucaut.morgan@gmail.com')
            ->setPassword('$2a$12$WmzLEY/fMamOUP1cW2w5OeZh8gWtqpx6MTDKlQJ2Bnqzm0joW0LXy')
            ->setRoles(['ROLE_SUPER_ADMIN'])
            ->setFirstName('Morgan')
            ->setLastName('Foucaut')
            ->setBirth(new \DateTime('1990-01-01'))
            ->setAddress('18 rue Paul Vaillant Couturier')
            ->setZipcode('57300')
            ->setCity('Hagondange')
            ->setPhone('0767603690')
            ->setCreatedAt(new \DateTimeImmutable())
            ->setIsValidated(true)
            ->setValidationKey(12);
        $manager->persist($user1);

        $manager->flush();
    }
}
