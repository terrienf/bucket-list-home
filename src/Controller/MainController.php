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

        $json = file_get_contents(__DIR__ . '/../../data/team.json');
        $team = json_decode($json, true);
        return $this->render('main/aboutus.html.twig',
            compact('team')
        );
    }


}
