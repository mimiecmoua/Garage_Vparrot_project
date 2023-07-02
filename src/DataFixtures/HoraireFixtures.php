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
        $lundi->setDebutAm('08h45');
        $lundi->setFinAm('12h00');
        $lundi->setDebutPm('14h00');
        $lundi->setFinPm('18h00');
        $lundi->setFermeture(false);
        $lundi->setFermeture2(false);

        $manager->persist($lundi);

        $mardi = new Horaire();
        $mardi->setJour('Mardi');
        $mardi->setDebutAm('08h45');
        $mardi->setFinAm('12h00');
        $mardi->setDebutPm('14h00');
        $mardi->setFinPm('18h00');
        $mardi->setFermeture(false);
        $mardi->setFermeture2(false);
        $manager->persist($mardi);

        $mercredi = new Horaire();
        $mercredi->setJour('Mercredi');
        $mercredi->setDebutAm('08h45');
        $mercredi->setFinAm('12h00');
        $mercredi->setDebutPm('14h00');
        $mercredi->setFinPm('18h00');
        $mercredi->setFermeture(false);
        $mercredi->setFermeture2(false);
        $manager->persist($mercredi);

        $jeudi = new Horaire();
        $jeudi->setJour('Jeudi');
        $jeudi->setDebutAm('08h45');
        $jeudi->setFinAm('12h00');
        $jeudi->setDebutPm('14h00');
        $jeudi->setFinPm('18h00');
        $jeudi->setFermeture(false);
        $jeudi->setFermeture2(false);
        $manager->persist($jeudi);


        $vendredi = new Horaire();
        $vendredi->setJour('Vendredi');
        $vendredi->setDebutAm('08h45');
        $vendredi->setFinAm('12h00');
        $vendredi->setDebutPm('14h00');
        $vendredi->setFinPm('18h00');
        $vendredi->setFermeture(false);
        $vendredi->setFermeture2(false);
        $manager->persist($vendredi);

        $samedi = new Horaire();
        $samedi->setJour('Samedi');
        $samedi->setDebutAm('08h45');
        $samedi->setFinAm('12h00');
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
