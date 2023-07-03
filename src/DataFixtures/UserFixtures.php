<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $user = new User();
        $user->setEmail('user@test.com');
        $user->setRoles(['Administrateur']);
        $user->setPassword($this->$passwordEncoder->encodePassword($user, 'password123'));
        $user->setNom('Doe');
        $user->setPrenom('John');

        $manager->persist($user);


        $user1 = new User();
        $user1->setEmail('user1@example.com');
        $user1->setRoles(['Employe']);
        $user1->setPassword($this->$passwordEncoder->encodePassword($user1, 'password456'));
        $user1->setNom('Bernard');
        $user1->setPrenom('Antoine');

        $manager->persist($user1);

        $user2 = new user();
        $user2->setEmail('user2@example.com');
        $user2->setRoles(['Employe']);
        $user2->setPassword($this->$passwordEncoder->encodePassword($user2, 'password789'));
        $user2->setNom('Dubois');
        $user2->setPrenom('Pierre');

        $manager->persist($user2);

        $user3 = new user();
        $user3->setEmail('user3@example.com');
        $user3->setRoles(['Employe']);
        $user3->setPassword($this->$passwordEncoder->encodePassword($user2, 'password101'));
        $user3->setNom('Martin');
        $user3->setPrenom('Jean');

        $manager->persist($user3);




        $manager->flush();
    }
}
