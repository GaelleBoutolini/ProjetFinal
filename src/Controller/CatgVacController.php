<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatgVacController extends AbstractController
{
    #[Route('/catg/vac', name: 'app_catg_vac')]
    public function index(): Response
    {
        return $this->render('catg_vac/index.html.twig', [
            'controller_name' => 'CatgVacController',
        ]);
    }
}
