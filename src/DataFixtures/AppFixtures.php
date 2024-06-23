<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {
        $AdminUser = new User("",[],"","",new \DateTimeImmutable('2024-05-05'));
        $AdminUser->setEmail("test@gmail.com");
        $AdminUser->setRoles(['ROLE_ADMIN']);
        $AdminUser->setPassword($this->passwordHasher->hashPassword($AdminUser, "test"));
        $AdminUser->setCreatedAt(new \DateTimeImmutable('2003-05-06'));
        $AdminUser->setUsername("Admin");

        $manager->persist($AdminUser);
        $manager->flush();
    }
}
