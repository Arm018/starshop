<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $countStarship = 123;

        return $this->render('home/home.html.twig', [
            'count_starship' => $countStarship,
        ]);
    }
}
