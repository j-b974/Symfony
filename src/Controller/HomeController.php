<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{



    #[Route('/', 'home', methods:['GET'])]
    #[Route('/Home', 'home1', methods:['GET'])]
    public function home():Response{


        return $this->render('Home/Home.html.twig',[
            'test'=> 'test'
        ]);
    }
}





