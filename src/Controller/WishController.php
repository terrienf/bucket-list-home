<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
       #[Route('/liste', name: 'liste')]
    public function liste(): Response
    {
        return $this->render('wish/liste.html.twig', [
        ]);
    }
    #[Route('/details', name: 'details')]
    public function details(): Response
    {
        return $this->render('wish/details.html.twig', [
        ]);
    }
}
