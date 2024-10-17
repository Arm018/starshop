<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{
    #[Route('/starships/{id}', name: 'starship_show', methods: ['GET'])]
    public function show(int $id, StarshipRepository $starshipRepository): Response
    {
        $ship = $starshipRepository->find($id);

        return $this->render('starship/show.html.twig', [
            'ship' => $ship,
        ]);
    }
}
