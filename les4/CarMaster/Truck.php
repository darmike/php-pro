<?php

declare(strict_types=1);

namespace CarMaster;


class Truck extends Car
{
    private float $maxLoadCapacity;

    public function __construct(string $brand, string $model, int $year, float $maxLoadCapacity)
    {
        parent::__construct($brand, $model, $year);
        $this->maxLoadCapacity = $maxLoadCapacity;
    }

    public function getMaxLoadCapacity(): float
    {
        return $this->maxLoadCapacity;
    }
}


