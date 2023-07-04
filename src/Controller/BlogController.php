<?php

namespace App\Controller;

use App\Entity\Form;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Articles;
use App\Form\ContactMessageType;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends AbstractController
{

         /* Route Index */

    #[Route('/', name: 'app_blog')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $articles = $entityManager->getRepository(Articles::class)->findAll();
        return $this->render('blog/index.html.twig', [
        'articles'=>$articles
        ]);
    }

        /* Route Contact */

    #[Route('/contact', name: 'app_contact')]
        public function contact(Request $request, EntityManagerInterface $entityManager): Response
        {
            // Ajout du code permettant d'ajouter le formulaire dans la page de contact (A VENIR)
                $contactMessage = new Form();
                $contactForm = $this->createForm(ContactMessageType::class, $contactMessage);
                return $this->render('blog/contact.html.twig', ['contactform' => $contactForm]);
        }

        /* Route Métiers */

    #[Route('/metiers', name: 'app_metiers')]
    public function metiers(): Response
    {
        return $this->render('blog/metiers.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

        /* Route Projet */

    #[Route('/projet', name: 'app_projet')]
    public function projet(): Response
    {
        return $this->render('blog/projet.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /* Route CGU (RGPD) */

    #[Route('/CGU', name: 'app_CGU')]
    public function CGU(): Response
    {
        return $this->render('blog/CGU.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /* Route Contact */

    #[Route('/contact', name: 'app_contact')]
    public function form(): Response
    {
        return $this->render('blog/contact.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /* Route A propos */

    #[Route('/a-propos', name: 'app_a-propos')]
    public function aPropos(): Response
    {
        return $this->render('blog/a-propos.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /* Route Mentions légales */

    #[Route('/mentions-legales', name: 'app_mentions-legales')]
    public function mentionsLegales(): Response
    {
        return $this->render('blog/mentions-legales.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /* Route Articles */

    #[Route('/articles', name: 'app_articles')]
    public function articles(): Response
    {
        return $this->render('blog/articles.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
