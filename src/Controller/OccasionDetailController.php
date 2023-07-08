<?php

namespace App\Controller;

use App\Repository\OccasionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;

class OccasionDetailController extends AbstractController
{
    public function __construct(
        private RequestStack $requestStack,
    ) {
    }

    #[Route('/occasion/{id}', name: 'app_occasion_detail')]
    public function index($id, OccasionRepository $occasionRepository): Response
    {
        $session = $this->requestStack->getSession();
        $session->set('voiture', $id);
        return $this->render('occasion_detail/index.html.twig', [
            'controller_name' => 'OccasionDetailController',
            'occasion' => $occasionRepository->find(['id' => $id])
        ]);
    }
}
