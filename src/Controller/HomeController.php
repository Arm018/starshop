<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function homepage(StarshipRepository $repository): Response
    {
        $ships = $repository->getAll();
        $myShip = $ships[array_rand($ships)];

        return $this->render('home/home.html.twig', [
            'ships' => $ships,
            'myShip' => $myShip,
        ]);
    }
}
