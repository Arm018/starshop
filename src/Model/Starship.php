<?php

namespace App\Model;

class Starship
{
    public function __construct(private int $id, private string $name, private string $class, private string $captain, private ShipStatusEnum $status)
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getCaptain(): string
    {
        return $this->captain;
    }

    public function getStatus(): ShipStatusEnum
    {
        return $this->status;
    }

    public function getStatusString(): string
    {
        return $this->status->value;
    }

    public function getStatusImageFilename(): string
    {
        return match ($this->status) {
            ShipStatusEnum::WAITING => 'images/status-waiting.png',
            ShipStatusEnum::IN_PROGRESS => 'images/status-in-progress.png',
            ShipStatusEnum::COMPLETED => 'images/status-complete.png',
        };
    }
}
