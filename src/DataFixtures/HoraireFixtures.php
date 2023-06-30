<?php

namespace App\DataFixtures;

use App\Entity\Horaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HoraireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $lundi = new Horaire();
        $lundi->setJour('Lundi');
        $lundi->setDebutAm('09h30');
        $lundi->setFinAm('12h30');
        $lundi->setDebutPm('14h00');
        $lundi->setFinPm('19h00');
        $lundi->setFermeture(false);
        $lundi->setFermeture2(false);

        $manager->persist($lundi);

        $mardi = new Horaire();
        $mardi->setJour('Mardi');
        $mardi->setDebutAm('09h30');
        $mardi->setFinAm('12h30');
        $mardi->setDebutPm('14h00');
        $mardi->setFinPm('19h00');
        $mardi->setFermeture(false);
        $mardi->setFermeture2(false);
        $manager->persist($mardi);

        $mercredi = new Horaire();
        $mercredi->setJour('Mercredi');
        $mercredi->setDebutAm('09h30');
        $mercredi->setFinAm('12h30');
        $mercredi->setDebutPm('14h00');
        $mercredi->setFinPm('19h00');
        $mercredi->setFermeture(false);
        $mercredi->setFermeture2(false);
        $manager->persist($mercredi);

        $jeudi = new Horaire();
        $jeudi->setJour('Jeudi');
        $jeudi->setDebutAm('09h30');
        $jeudi->setFinAm('12h30');
        $jeudi->setDebutPm('14h00');
        $jeudi->setFinPm('19h00');
        $jeudi->setFermeture(false);
        $jeudi->setFermeture2(false);
        $manager->persist($jeudi);


        $vendredi = new Horaire();
        $vendredi->setJour('Vendredi');
        $vendredi->setDebutAm('09h30');
        $vendredi->setFinAm('12h30');
        $vendredi->setDebutPm('14h00');
        $vendredi->setFinPm('19h00');
        $vendredi->setFermeture(false);
        $vendredi->setFermeture2(false);
        $manager->persist($vendredi);

        $samedi = new Horaire();
        $samedi->setJour('Samedi');
        $samedi->setDebutAm('09h30');
        $samedi->setFinAm('13h00');
        $samedi->setDebutPm('');
        $samedi->setFinPm('');
        $samedi->setFermeture(false);
        $samedi->setFermeture2(true);
        $manager->persist($samedi);

        $dimanche = new Horaire();
        $dimanche->setJour('Dimanche');
        $dimanche->setDebutAm('');
        $dimanche->setFinAm('');
        $dimanche->setDebutPm('');
        $dimanche->setFinPm('');
        $dimanche->setFermeture(true);
        $dimanche->setFermeture2(true);
        $manager->persist($dimanche);
        $manager->flush();
    }
}
