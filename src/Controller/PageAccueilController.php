<?php

namespace App\Controller;

use App\Repository\RestaurantRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageAccueilController extends AbstractController
{
    #[Route('/', name: 'app_page_accueil')]
    public function index(RestaurantRepository $restaurantRepository): Response
    {
        $restaurants = $restaurantRepository->findAll();
        return $this->render('page_accueil/index.html.twig', [
            'controller_name' => 'PageAccueilController',
            'restaurants' => $restaurants,
        ]);
    }

}