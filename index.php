<?php
    
    declare(strict_types=1);
    
    require dirname(__DIR__).'/php-pro/vendor/autoload.php';
    
    use CarMaster\Car;
    use CarMaster\CarParts;
    use CarMaster\Client;
    use CarMaster\Exceptions\CarIdException;
    use CarMaster\FinalOrder;
    use CarMaster\Service;
    use CarMaster\PDO\Repository\CarRepository;
    use Faker\Factory as FakerFactory;
    
    try {
        // Підключення до бази даних
        $pdo = new PDO('mysql:host=localhost;dbname=schema_name_4', 'root', 'Football007*');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Створення репозиторію
        $carRepository = new CarRepository($pdo);
        
        // Генерація випадкових даних за допомогою Faker
        $faker = FakerFactory::create();
        
        // Створення автомобілів з випадковими даними
        $cars = [];
        for ($i = 0; $i < 5; $i++) {
            $brand = $faker->company;
            $model = $faker->word;
            $year = $faker->numberBetween(1980, 2022);
            $id = $faker->bothify('??######');
            $parts = [
                new CarParts('Wheel', true, 4),
                new CarParts('Engine Oil', true, 1),
                new CarParts('Brake Pads', false, 0)
            ];
            
            $car = new Car($brand, $model, $year, $id, $parts);
            $cars[] = $car;
            
            // Збереження автомобілів в базу даних
            $carRepository->save($car);
        }
        
        // Вивід інформації про автомобілі
        foreach ($cars as $car) {
            echo "Інформація про автомобіль:\n";
            echo "Марка: {$car->getBrand()}\n";
            echo "Модель: {$car->getModel()}\n";
            echo "Рік випуску: {$car->getYear()}\n";
            echo "ID: {$car->getId()}\n";
            echo "Запчастини:\n";
            foreach ($car->getParts() as $part) {
                echo "{$part->getType()} (".($part->isAvailable() ? 'є в наявності' : 'потрібно замовити зі складу').")\n";
            }
            echo "\n";
        }
    } catch (PDOException $e) {
        echo "Помилка підключення до бази даних: " . $e->getMessage();
    } catch (CarIdException $e) {
        echo "Помилка: {$e->getMessage()}\n";
    }
