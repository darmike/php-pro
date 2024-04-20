<?php


declare(strict_types=1);


require_once 'Autoloader.php';

use carMaster\Car;
use carMaster\Owner;
use carMaster\Supplier;
use carMaster\HybridCar;
use carMaster\ElectricCar;



$car = new Car('Toyota', 'Camry', 2023, 'AA1342RE');

$owner = new Owner('John Evans');


try {
	$car = new Car('Toyota', 'Camry', 2023, 'AA342RE');
	
	$owner->addCar($car);
	
	
	echo "Owner: " . $owner->getName() . "\n";
	
	echo "Car: " . $car->getBrand() . " " . $car->getModel() . ", " . $car->getYear() . ", " . $car->getId() . "\n";
	
	} catch (InvalidArgumentException $e) {
	
	echo "Error: " . $e->getMessage() . "\n";
	
	}










