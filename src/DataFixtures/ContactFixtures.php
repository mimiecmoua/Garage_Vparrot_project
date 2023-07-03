<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Contact;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $contact1 = new Contact();
        $contact1->setNom('Doe');
        $contact1->setPrenom('John');
        $contact1->setEmail('john@example.com');
        $contact1->setTel('0123456789');
        $contact1->setMessage('Je suis intéressé par cette voiture. Pouvez-vous me fournir plus d\'informations ?');
        $contact1->setVu(false);
        $contact1->setAction('Répondre');

        $manager->persist($contact1);

        $contact2 = new Contact();
        $contact2->setNom('Smith');
        $contact2->setPrenom('Jane');
        $contact2->setEmail('jane@example.com');
        $contact2->setTel('0987654321');
        $contact2->setMessage('J\'ai une question concernant ce modèle. Pouvez-vous me contacter dès que possible ?');
        $contact2->setVu(true);
        $contact2->setAction('Archiver');

        $manager->persist($contact2);


        $manager->flush();
    }
}
