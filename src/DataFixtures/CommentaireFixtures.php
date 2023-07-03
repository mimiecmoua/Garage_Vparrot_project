<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Commentaire;
use DateTime;

class CommentaireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $commentaire = new Commentaire();
        $commentaire->setNom('Moreau');
        $commentaire->setCommentaire('J\'ai acheté une voiture d\'occasion dans ce garage et je suis très satisfait');
        $commentaire->setPublie(new DateTime('2023-07-03'));
        $commentaire->setNote(4);


        $manager->persist($commentaire);

        $commentaire1 = new Commentaire();
        $commentaire1->setNom('Simon');
        $commentaire1->setCommentaire('J\'ai fait réparer ma voiture ici et je suis très content du service. ');
        $commentaire1->setPublie(new DateTime('2023-06-21'));
        $commentaire1->setNote(5);

        $manager->persist($commentaire1);




        $manager->flush();
    }
}
