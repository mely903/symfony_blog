<?php

namespace App\Controller\Visitor\Inscription;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Controller\Visitor\Inscription\InscriptionController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'app_visitor_inscription')]
    public function index(): Response
    {
        return $this->render('pages/visitor/inscription/index.html.twig');
    }
}
