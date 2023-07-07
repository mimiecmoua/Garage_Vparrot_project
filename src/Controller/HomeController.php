<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HoraireRepository;
use App\Repository\ServiceRepository;
use App\Repository\OccasionRepository;
use App\Repository\CommentaireRepository;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(
        HoraireRepository $horaireRepository,
        ServiceRepository $serviceRepository,
        OccasionRepository $occasionRepository,
        CommentaireRepository $commentaireRepository
    ): Response {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'horaires' => $horaireRepository->findAll([]),
            'services' => $serviceRepository->findAll([]),
            'occasions' => $occasionRepository->findAll([]),
            'commentaires' => $commentaireRepository->findAll([]),


        ]);
    }
}
