<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LandingHomeController extends AbstractController
{
    #[Route('/', name: 'app_landing_home')]
    public function index(): Response
    {
        return $this->render(
            'landing_home/index.html.twig'
        );
    }

    #[Route('/todoConnexion', name: 'app_connexion')]
    public function connexion(): Response
    {
        return $this->render(
            'landing_home/todoConnexion.html.twig'
        );
    }

    #[Route('/todoInscription', name: 'app_inscription')]
    public function inscription(): Response
    {
        return $this->render(
            'landing_home/todoInscription.html.twig'
        );
    }

    #[Route('/homePage', name: 'app_homepage')]
    public function homePage(): Response
    {
        return $this->render(
            'landing_home/homePage.html.twig'
        );
    }
}
