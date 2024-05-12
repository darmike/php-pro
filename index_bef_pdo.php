<?php
    
    declare(strict_types=1);
    
  
    
    require dirname(__DIR__).'/php-pro/vendor/autoload.php';
    
    use CarMaster\Car;
    use CarMaster\CarParts;
    use CarMaster\Client;
    use CarMaster\Exceptions\CarIdException;
    use CarMaster\FinalOrder;
    use CarMaster\Service;
    
    try {
        // Створення автомобілів
        $carParts1 = new CarParts('Wheel', true, 4);
        $carParts2 = new CarParts('Engine Oil', true, 1);
        $carParts3 = new CarParts('Brake Pads', false, 0);
        
        $car1 = new Car('Toyota', 'Corolla', 2022, 'ABC123AA', [$carParts1, $carParts2]);
        $car2 = new Car('BMW', 'X5', 2021, 'XYZ789AA', [$carParts2, $carParts3]);
        $car3 = new Car('Honda', 'Civic', 2023, 'DEF456A4', [$carParts1, $carParts3]);
        
        // Створення клієнтів
        $client1 = new Client('Andrii', 'Shevchenko', '380977788995', 'C123', $car1);
        $client2 = new Client('Ivan', 'Kozlov', '380639969092', 'C456', $car2);
        $client3 = new Client('Yuriy', 'Adamovski', '380968745965', 'C789', $car3);
        
        $service1 = new Service('C123', 'Заміна мастила', (array)'Періодичний сервіс автомобіля');
        $service2 = new Service('C456', 'Заміна резини', (array)'Періодичний сервіс автомобіля');
        $service3 = new Service('C789', 'Ремонт двигуна', (array)'Ремонт авто');
        
        // Створення фінальних замовлень
        $order1 = new FinalOrder($client1, [$service1]);
        $order2 = new FinalOrder($client2, [$service2]);
        $order3 = new FinalOrder($client3, [$service3]);
        
        // Вивід інформації про замовлення
        echo "Інформація про замовлення 1:\n";
        echo "Клієнт: {$order1->getClient()->getFirstName()} {$order1->getClient()->getLastName()}\n";
        echo "Автомобіль: {$order1->getClient()->getCars()[0]->getBrand()} {$order1->getClient()->getCars()[0]->getModel()}\n";
        echo "Послуга: {$order1->getService()->getDescription()}\n\n";
        
        echo "Інформація про замовлення 2:\n";
        echo "Клієнт: {$order2->getClient()->getFirstName()} {$order2->getClient()->getLastName()}\n";
        echo "Автомобіль: {$order2->getClient()->getCars()[0]->getBrand()} {$order2->getClient()->getCars()[0]->getModel()}\n";
        echo "Послуга: {$order2->getService()->getDescription()}\n\n";
        
        echo "Інформація про замовлення 3:\n";
        echo "Клієнт: {$order3->getClient()->getFirstName()} {$order3->getClient()->getLastName()}\n";
        echo "Автомобіль: {$order3->getClient()->getCars()[0]->getBrand()} {$order3->getClient()->getCars()[0]->getModel()}\n";
        echo "Послуга: {$order3->getService()->getDescription()}\n";
    } catch (CarIdException $e) {
        echo "Помилка: {$e->getMessage()}\n";
    }

