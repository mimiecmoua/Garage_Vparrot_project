<?php

namespace App\Controller;

use App\Repository\OccasionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OccasionsController extends AbstractController
{
    #[Route('/occasions', name: 'app_occasions')]
    public function index(OccasionRepository $occasionRepository): Response
    {
        return $this->render('occasions/index.html.twig', [
            'controller_name' => 'OccasionsController',
            'occasions' => $occasionRepository->findAll()
        ]);
    }
}
