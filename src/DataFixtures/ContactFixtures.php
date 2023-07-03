<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Contact;
use App\Entity\Occasion;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $occasion = new Occasion();
        $occasion->setMarque('Susuki');
        $occasion->setModele('Vitara');
        $occasion->setPrix('8000');
        $occasion->setkilometrage('70700');
        $occasion->setPlaces('4');
        $occasion->setImage('images/vitara.jpg');
        $occasion->setImage2('images/vitara2.jpg');
        $occasion->setImage3('images/vitara3.jpg');
        $occasion->setMotor('Diesel');
        $occasion->setMiseCirculation('30/09/2002');


        $manager->persist($occasion);

        $occasion1 = new Occasion();
        $occasion1->setMarque('Renault');
        $occasion1->setModele('Clio');
        $occasion1->setPrix('1650');
        $occasion1->setKilometrage('262000');
        $occasion1->setPlaces('5');
        $occasion1->setImage('images/clio.jpg');
        $occasion1->setImage2('images/clio2.jpg');
        $occasion1->setImage3('images/clio3.jpg');
        $occasion1->setMotor('Essence');
        $occasion1->setMiseCirculation('01/04/1994');



        $manager->persist($occasion1);

        $occasion2 = new Occasion();
        $occasion2->setMarque('Volkswagen');
        $occasion2->setModele('Passat');
        $occasion2->setPrix('20890');
        $occasion2->setKilometrage('85254');
        $occasion2->setPlaces('5');
        $occasion2->setImage('images/passat.jpg');
        $occasion2->setImage2('images/passat2.jpg');
        $occasion2->setImage3('images/passat3.jpg');
        $occasion2->setMotor('Diesel');
        $occasion2->setMiseCirculation('11/12/2019');



        $manager->persist($occasion2);

        $occasion3 = new Occasion();
        $occasion3->setMarque('Nissan');
        $occasion3->setModele('Navara 2');
        $occasion3->setPrix('3490');
        $occasion3->setKilometrage('160531');
        $occasion3->setPlaces('5');
        $occasion3->setImage('images/nissan.jpg');
        $occasion3->setImage2('images/nissan2.jpg');
        $occasion3->setImage3('images/nissan3.jpg');
        $occasion3->setMotor('Diesel');
        $occasion3->setMiseCirculation('20/09/2018');


        $manager->persist($occasion3);

        $occasion4 = new Occasion();
        $occasion4->setMarque('Fiat');
        $occasion4->setModele('Uno');
        $occasion4->setPrix('2500');
        $occasion4->setKilometrage('115000');
        $occasion4->setPlaces('5');
        $occasion4->setImage('images/fiat.jpg');
        $occasion4->setImage2('images/fiat2.jpg');
        $occasion4->setImage3('images/fiat3.jpg');
        $occasion4->setMotor('Essence');
        $occasion4->setMiseCirculation('23/05/1985');


        $manager->persist($occasion4);

        $occasion5 = new Occasion();
        $occasion5->setMarque('Mini');
        $occasion5->setModele('Cooper Sidewalk');
        $occasion5->setPrix('9890');
        $occasion5->setKilometrage('149285');
        $occasion5->setPlaces('4');
        $occasion5->setImage('images/mini.jpg');
        $occasion5->setImage2('images/mini2.jpg');
        $occasion5->setImage3('images/mini3.jpg');
        $occasion5->setMotor('Essence');
        $occasion5->setMiseCirculation('02/11/2007');


        $manager->persist($occasion5);

        $contact1 = new Contact();
        $contact1->setNom('Doe');
        $contact1->setPrenom('John');
        $contact1->setEmail('john@example.com');
        $contact1->setTel('0123456789');
        $contact1->setMessage('Je suis intéressé par cette voiture. Pouvez-vous me fournir plus d\'informations ?');
        $contact1->setVu(false);
        $contact1->setAction('');
        $contact1->setVoiture($occasion2);


        $manager->persist($contact1);

        $contact2 = new Contact();
        $contact2->setNom('Smith');
        $contact2->setPrenom('Jane');
        $contact2->setEmail('jane@example.com');
        $contact2->setTel('0987654321');
        $contact2->setMessage('J\'ai une question concernant ce modèle. Pouvez-vous me contacter dès que possible ?');
        $contact2->setVu(true);
        $contact2->setAction('Archiver');
        $contact2->setVoiture($occasion3);




        $manager->persist($contact2);


        $manager->flush();
    }
}
