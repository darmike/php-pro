<?php



require_once 'Autoloader.php';

use carMaster\Car;
use carMaster\Owner;
use carMaster\Supplier;
use carMaster\Truck;
use carMaster\HybridCar;
use carMaster\ElectricCar;

// Створюємо автомобіль
$car = new Car('Peugeout', '206', 2011);

// Створюємо власника автомобіля
$owner = new Owner('Anriy Schevchenko');
$owner->addCar($car);

// Створюємо постачальника
$supplier = new Supplier('AutoParts Zachid.');

// Приклад інформації про автомобіль та його власника
echo "Owner: " . $owner->getName() . "\n";
echo "Car: " . $car->getBrand() . " " . $car->getModel() . ", " . $car->getYear() . "\n";


