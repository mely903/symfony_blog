<?php

namespace App\Controller\Visitor\Connexion;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Controller\Visitor\Connexion\ConnexionController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ConnexionController extends AbstractController
{
    #[Route('/connexion', name: 'app_visitor_connexion')]
    public function index(): Response
    {
        return $this->render('pages/visitor/connexion/index.html.twig');
    }
}
