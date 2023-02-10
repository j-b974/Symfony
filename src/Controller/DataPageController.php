<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataPageController extends AbstractController
{
    #[Route('/data/page', name: 'app_data_page', methods:['GET'])]
    public function index(): Response
    {
        return $this->render('data_page/index.html.twig', [
            'controller_name' => 'DataPageController',
            'data'=> 'active'
        ]);
    }
}
