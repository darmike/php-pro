<?php
    
    declare(strict_types=1);
//    require_once 'autoloader.php';
    require dirname(__DIR__).'/php-pro/vendor/autoload.php';
    
    
    use CarMaster\Car;
    use CarMaster\Client;
    use CarMaster\Exceptions\CarIdException;
    use CarMaster\FinalOrder;
    use CarMaster\Service;
    
    try {
        // Створення автомобілів
        $car1 = new Car('Toyota', 'Corolla', 2022, 'ABC123AA');
        $car2 = new Car('BMW', 'X5', 2021, 'XYZ789AA');
        $car3 = new Car('Honda', 'Civic', 2023, 'DEF456A4');
        
        // Створення клієнтів
        $client1 = new Client('Andrii', 'Shevchenko', '380977788995', 'C123', $car1);
        $client2 = new Client('Ivan', 'Kozlov', '380639969092', 'C456', $car2);
        $client3 = new Client('Yuriy', 'Adamovski', '380968745965', 'C789', $car3);
        
        // Створення послуг
        $service1 = new Service('C123', 'Заміна мастила', 'Періодичний сервіс автомобіля');
        $service2 = new Service('C456', 'Заміна резини', 'Періодичний сервіс автомобіля');
        $service3 = new Service('C789', 'Ремонт двигуна', 'Ремонт авто');
        
        // Створення фінальних замовлень
        $order1 = new FinalOrder($client1, $service1);
        $order2 = new FinalOrder($client2, $service2);
        $order3 = new FinalOrder($client3, $service3);
        
        // Вивід інформації про замовлення
        echo "Інформація про замовлення 1:\n";
        echo "Клієнт: {$order1->getClient()->getFirstName()} {$order1->getClient()->getLastName()}\n";
        echo "Автомобіль: {$order1->getClient()->getCar()->getBrand()} {$order1->getClient()->getCar()->getModel()}\n";
        echo "Послуга: {$order1->getService()->getDescription()}\n\n";
        
        echo "Інформація про замовлення 2:\n";
        echo "Клієнт: {$order2->getClient()->getFirstName()} {$order2->getClient()->getLastName()}\n";
        echo "Автомобіль: {$order2->getClient()->getCar()->getBrand()} {$order2->getClient()->getCar()->getModel()}\n";
        echo "Послуга: {$order2->getService()->getDescription()}\n\n";
        
        echo "Інформація про замовлення 3:\n";
        echo "Клієнт: {$order3->getClient()->getFirstName()} {$order3->getClient()->getLastName()}\n";
        echo "Автомобіль: {$order3->getClient()->getCar()->getBrand()} {$order3->getClient()->getCar()->getModel()}\n";
        echo "Послуга: {$order3->getService()->getDescription()}\n";
    } catch (CarIdException $e) {
        echo "Помилка: {$e->getMessage()}\n";
    }

    //модифікація файла