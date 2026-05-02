<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('main/login.html.twig');
    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        return $this->render('main/profile.html.twig');
    }

    #[Route('/product/{id}', name: 'app_product_details')]
    public function productDetails(int $id): Response
    {
        return $this->render('main/product_details.html.twig');
    }

    #[Route('/categories', name: 'app_categories')]
    public function categories(): Response
    {
        return $this->render('main/browse_categories.html.twig');
    }

    #[Route('/cart', name: 'app_cart')]
    public function cart(): Response
    {
        return $this->render('main/cart.html.twig');
    }

    #[Route('/category/{id}', name: 'app_products_by_category')]
    public function productsByCategory(int $id): Response
    {
        return $this->render('main/products_by_category.html.twig');
    }
}
