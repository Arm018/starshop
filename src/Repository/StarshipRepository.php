<?php

namespace App\Repository;

use App\Model\ShipStatusEnum;
use App\Model\Starship;

class StarshipRepository
{
    public function getAll(): array
    {
        return
            [
                new Starship(
                    1,
                    'USS LeafyCruiser (NCC-0001)',
                    'Garden',
                    'Jean-Luc Pickles',
                    ShipStatusEnum::WAITING
                ),
                new Starship(
                    2,
                    'USS Espresso (NCC-1234-C)',
                    'Latte',
                    'James T. Quick!',
                    ShipStatusEnum::IN_PROGRESS,
                ),
                new Starship(
                    3,
                    'USS Wanderlust (NCC-2024-W)',
                    'Delta Tourist',
                    'Kathryn Journeyway',
                    ShipStatusEnum::COMPLETED,
                ),
            ];
    }

    public function find(int $id): ?Starship
    {
        foreach ($this->getAll() as $starship) {
            if ($starship->getId() === $id) {
                return $starship;
            }
        }
        return null;
    }
}