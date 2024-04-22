<?php
    
    use CarMaster\Car;
    use CarMaster\Client;
    use carMaster\Supplier;
    
    require_once 'Car.php';
require_once 'Owner.php';
require_once 'Supplier.php';

// Створюємо автомобіль
$car = new Car('Peugeout', '206', 2011);

// Створюємо власника автомобіля
$owner = new Client('Anriy Schevchenko');
$owner->addCar($car);

// Створюємо постачальника
$supplier = new Supplier('AutoParts Zachid.');



// Приклад інформації про автомобіль та його власника
echo "Client: " . $owner->getName() . "\n";
echo "Car: " . $car->getBrand() . " " . $car->getModel() . ", " . $car->getYear() . "\n";

