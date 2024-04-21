<?php


declare(strict_types=1);


require_once 'Autoloader.php';

use carMaster\Car;
use carMaster\Owner;
use carMaster\Supplier;
use carMaster\HybridCar;
use carMaster\ElectricCar;



$car = new Car('Toyota', 'Camry', 2023, 'AA3542RE');
$owner = new Owner('John Evans');

$owner->addCar($car);




echo "Owner: " . $owner->getName() . "\n";

echo "Car: " . $car->getBrand() . " " . $car->getModel() . ", " . $car->getYear() . ", " . $car->getId() . "\n";
	


    
    
try {
        
    if (strlen($car->getId()) !== 8) {
        throw new Exception('Неправильний формат даних, повторіть спробу ще раз');
    }
}catch (Exception $e) {
        echo $e->getMessage();
}














