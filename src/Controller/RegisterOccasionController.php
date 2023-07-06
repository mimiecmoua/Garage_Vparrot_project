<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Occasion;
use App\Form\NewOccasionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class RegisterOccasionController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/nouvelleOccasion', name: 'app_register_occasion')]
    public function index(Request $request, SluggerInterface $slugger): Response
    {
        $occasion = new Occasion();
        $form = $this->createForm(NewOccasionType::class, $occasion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $occasion = $form->getData();
            $this->entityManager->persist($occasion);
            $this->entityManager->flush();

            $image = $form->get('imageAttached')->getData();
            $image2 = $form->get('image2Attached')->getData();
            $image3 = $form->get('image3Attached')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $originalFilename = $originalFilename . $image->getClientOriginalExtension();
                $image->move(
                    $this->getParameter('image_directory'),
                    $originalFilename
                );
            }
            if ($image2) {
                $originalFilename = pathinfo($image2->getClientOriginalName(), PATHINFO_FILENAME);
                $originalFilename = $originalFilename . $image2->getClientOriginalExtension();
                $image2->move(
                    $this->getParameter('image_directory'),
                    $originalFilename
                );
            }
            if ($image3) {
                $originalFilename = pathinfo($image3->getClientOriginalName(), PATHINFO_FILENAME);
                $originalFilename = $originalFilename . $image3->getClientOriginalExtension();
                $image3->move(
                    $this->getParameter('image_directory'),
                    $originalFilename
                );
            }
        }
        return $this->render('register_occasion/index.html.twig', [
            'controller_name' => 'RegisterOccasionController',
            'form' => $form->createView()
        ]);
    }
}
