<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HoraireRepository;
use App\Repository\ServiceRepository;


class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(HoraireRepository $horaireRepository, ServiceRepository $serviceRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'horaires' => $horaireRepository->findAll([]),
            'services' => $serviceRepository->findAll([])
        ]);
    }
}
