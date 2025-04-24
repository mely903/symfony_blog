<?php
namespace App\Controller\Visitor\Blog;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Controller\Visitor\Blog\BlogController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class BlogController extends AbstractController{
    #[Route('/blog', name: 'app_visitor_blog')]
    public function index(): Response
    {
        return $this->render('pages/visitor/blog/index.html.twig');
    }
}
