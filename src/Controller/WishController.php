<?php

namespace App\Controller;

use App\Repository\WishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
       #[Route('/liste', name: 'liste')]
    public function liste(
        WishRepository $wishRepository
       ): Response
    {
        $wish = $wishRepository->findAll();
        return $this->render('wish/liste.html.twig',
        compact('wish')
        );
    }
    #[Route('/wish/{id}', name: 'details',
        requirements: ['id'=>'\d+']
    )]
    public function details(
        wish $id
    ): Response
    {
        return $this->render('wish/details.html.twig',
        compact('id')
        );
    }
}
