<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ServiceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $services = new Service();
        $service->setTitre($service['Pneus']);
        $service->setDescription($service['Réparation de pneus rapide et fiable. Tarifs commpétitifs.']);
        $service->setPrixHoraire($service['60 euros']);
        $service->setLogo($service['public/images/logo/pneuLogo.png']);

        $service = new Service();
        $service->setTitre($service['Vidange']);
        $service->setDescription($service['Nous prenons soin de votre moteur en effectuant une vidange minutieuse.']);
        $service->setPrixHoraire($service['60 euros']);
        $service->setLogo($service['public/images/logo/vidangeLogo.png']);

        $service = new Service();
        $service->setTitre($service['Amortisseurs']);
        $service->setDescription($service['Optimisez votre confort de conduite avec nos services d\'amortisseurs']);
        $service->setPrixHoraire($service['80 euros']);
        $service->setLogo($service['public/images/logo/amortisseurLogo.png']);

        $service = new Service();
        $service->setTitre($service['Carrosserie']);
        $service->setDescription($service['No experts compétents redonnent vie à votre carrosserie.']);
        $service->setPrixHoraire($service['90 euros']);
        $service->setLogo($service['public/images/logo/carrosserieLogo.png']);

        $service = new Service();
        $service->setTitre($service['Diagnostics']);
        $service->setDescription($service['Obtenez un diagnostic précis, pour un retour sur la route.']);
        $service->setPrixHoraire($service['100 euros']);
        $service->setLogo($service['public/images/logo/diagnostiqueLogo.png']);

        $service = new Service();
        $service->setTitre($service['Echappements']);
        $service->setDescription($service['Optimisez votre échappement auto. Conduite fluide et moteur performant.']);
        $service->setPrixHoraire($service['60 euros']);
        $service->setLogo($service['public/images/logo/tuyau-dechappementLogo.png']);

        $manager->persist($service);

        $manager->flush();
    }
}
