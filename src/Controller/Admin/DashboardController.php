<?php

namespace App\Controller\Admin;

use App\Entity\Commentaire;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\Contact;
use App\Entity\Horaire;
use App\Entity\Service;
use App\Entity\Occasion;

class DashboardController extends AbstractDashboardController
{

    #[Route('/admin', name: 'admin')]

    public function index(): Response
    {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Garage Vincent Parrot ');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Employés', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Occasions', 'fas fa-car', Occasion::class);
        yield MenuItem::linkToCrud('Services', 'fas fa-screwdriver-wrench', Service::class)
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Horaire', 'fas fa-clock', Horaire::class)
            ->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('Contact', 'fas fa-phone', Contact::class);
        yield MenuItem::linkToCrud('Commentaire', 'fas fa-book', Commentaire::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
