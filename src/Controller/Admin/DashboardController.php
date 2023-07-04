<?php

namespace App\Controller\Admin;

use App\Controller\Admin\ArticlesCrudController;
use App\Entity\Articles;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        /* Autorisation ADMIN */
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(ArticlesCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        /* Titre principal */
        return Dashboard::new()
            ->setTitle('Administration du blog');
    }

    public function configureMenuItems(): iterable
    {
        /* Personnalisation du tableau de bord */
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Articles', 'fas fa-newspaper', Articles::class);
    }
}
