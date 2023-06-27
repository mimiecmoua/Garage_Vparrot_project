<?php

namespace App\DataFixtures;

use App\Entity\Horaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HoraireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi',  'Vendredi', 'Samedi', 'Dimanche'];
        $horaire = new Horaire();
        $horaire->setJour($jour);
        $horaire->setDebutMatin('08:45');
        $horaire->setFinApresmidi('12:00');
        $horaire->setDebutApresmidi('14:00');
        $horaire->setFinApresmidi('18:00');

        $horaire->setFermeture(false);
        $horaire->setFermeture(true);

        $manager->persist($horaire);

        $manager->flush();
    }
}
