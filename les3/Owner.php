<?php

use carMaster\Car;

class Owner {
public string $name;
public array $cars;

public function __construct(string $name) {
$this->name = $name;
$this->cars = [];
}

public function getName(): string {
return $this->name;
}

public function addCar(Car $car): void {
$this->cars[] = $car;
}

public function getCars(): array {
return $this->cars;
}


}