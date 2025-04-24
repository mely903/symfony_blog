<?php

namespace App\Controller\Visitor\Contact;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Controller\visitor\contact\ContactController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_visitor_contact')]
    public function index(): Response
    {
        return $this->render('pages/visitor/contact/index.html.twig');
           
        
    }
}

