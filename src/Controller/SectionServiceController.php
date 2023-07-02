<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ServiceRepository;


class SectionServiceController extends AbstractController
{

    public function index(ServiceRepository $serviceRepository): Response
    {
        return $this->render('section_service/index.html.twig', [
            'controller_name' => 'SectionServiceController',
            'services' => $serviceRepository->findAll([])
        ]);
    }
}
