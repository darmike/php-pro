<?php
declare(strict_types=1);
namespace CarMaster;

use Exception;
use CarMaster\Exсeptions\Car_ID_Exception;


class Owner
{
    private string $name;
    private array $cars;
	
	

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->cars = [];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addCar(Car $car): void
    {
        $this->cars[] = $car;
		
		try {
			$car->setId($car->getId());
			$this->cars[] = $car;
		} catch (InvalidArgumentException $e) {
			echo "Error: " . $e->getMessage() . "\n";
		}
		
		
    }
	
    public function getCars(): array
    {
        return $this->cars;
    }

    public function findCar(string $carName): ?Car
    {
        foreach ($this->cars as $car) {
            if ($car->getModel() === $carName) {
                return $car;
            }
        }
        return null;
    }

    public function orderParts(Car $car, array $parts): void
    {
        // Логіка замовлення запчастин для конкретного автомобіля $car
        echo "Ordering parts for {$car->getBrand()} {$car->getModel()}: " . implode(', ', $parts) . "\n";
        // Тут можна викликати зовнішні сервіси, щоб замовити запчастини
    }
	
	
	
	
	
	
	
}