<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Service;

class ServiceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $service = new Service();
        $service->setTitre('Pneus');
        $service->setDescription('Réparation de pneus rapide et fiable. Tarifs commpétitifs.');
        $service->setPrixHeure(60);
        $service->setLogo('images/logo/pneuLogo.png');

        $manager->persist($service);

        $service1 = new Service();
        $service1->setTitre('Vidange');
        $service1->setDescription('Nous prenons soin de votre moteur en effectuant une vidange minutieuse.');
        $service1->setPrixHeure(60);
        $service1->setLogo('images/logo/vidangeLogo.png');

        $manager->persist($service1);

        $service2 = new Service();
        $service2->setTitre('Amortisseurs');
        $service2->setDescription('Optimisez votre confort de conduite avec nos services d\'amortisseurs');
        $service2->setPrixHeure(80);
        $service2->setLogo('images/logo/amortisseurLogo.png');

        $manager->persist($service2);

        $service3 = new Service();
        $service3->setTitre('Carrosserie');
        $service3->setDescription('No experts compétents redonnent vie à votre carrosserie.');
        $service3->setPrixHeure(90);
        $service3->setLogo('images/logo/carrosserieLogo.png');

        $manager->persist($service3);

        $service4 = new Service();
        $service4->setTitre('Diagnostics');
        $service4->setDescription('Obtenez un diagnostic précis, pour un retour sur la route.');
        $service4->setPrixHeure(100);
        $service4->setLogo('images/logo/diagnostiqueLogo.png');

        $manager->persist($service4);

        $service5 = new Service();
        $service5->setTitre('Echappements');
        $service5->setDescription('Optimisez votre échappement auto. Conduite fluide et moteur performant.');
        $service5->setPrixHeure(60);
        $service5->setLogo('images/logo/tuyau-dechappementLogo.png');

        $manager->persist($service5);

        $manager->flush();
    }
}
