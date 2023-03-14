<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main_index')]
    public function home(): Response{
        return $this->render('main/index.html.twig', [
        ]);
    }
    #[Route('/aboutus', name: 'main_aboutus')]
    public function aboutus(): Response{
        return $this->render('aboutus.html.twig', [
        ]);
    }


}
