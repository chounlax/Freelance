<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    // Une seule page, en deux langues : / (anglais) et /fr (français).
    // Symfony choisit la langue d'après l'adresse, et les templates affichent
    // les textes de translations/messages.en.yaml ou messages.fr.yaml.
    #[Route(path: ['en' => '/', 'fr' => '/fr'], name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }
}
