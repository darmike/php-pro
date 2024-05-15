<?php
    
    declare(strict_types=1);
    
    namespace CarMaster\PDO\Repository;
    
    use CarMaster\Car;
    use CarMaster\Exceptions\CarIdException;
    use PDO;
    
    readonly class CarRepository
    {
        private PDO $pdo;
        
        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }
        
        //READ
        public function findById(int $id): ?Car
        {
            $statement = $this->pdo->prepare('SELECT * FROM cars WHERE id = :id');
            $statement->execute(['id' => $id]);
            $carData = $statement->fetch(PDO::FETCH_ASSOC);
            
            return $carData ? new Car(
                brand: $carData['brand'],
                model: $carData['model'],
                year: (int)$carData['year'],
                id: $carData['id'],
                parts: [] // Передаємо порожній масив
            ) : null;
        }
        
        /**
         * @throws CarIdException
         */
        public function findAll(): array
        {
            $statement = $this->pdo->query('SELECT * FROM cars');
            $carsData = $statement->fetchAll(PDO::FETCH_ASSOC);
            $cars = [];
            foreach ($carsData as $carData) {
                $cars[] = new Car(
                    brand: $carData['brand'],
                    model: $carData['model'],
                    year: (int)$carData['year'],
                    id: $carData['id'],
                    parts: [] // Передаємо порожній масив,
                );
            }
            
            return $cars;
        }
        
        // CREATE
        public function save(Car $car): void
        {
            $statement = $this->pdo->prepare(
                'INSERT INTO cars (brand, model, year) VALUES (:brand, :model, :year)'
            );
            $statement->execute([
                'brand' => $car->getBrand(),
                'model' => $car->getModel(),
                'year' => $car->getYear(),
            ]);
        }
        
        //UPDATE
        public function update(Car $car): void
        {
            $statement = $this->pdo->prepare(
                'UPDATE cars SET brand = :brand, model = :model, year = :year WHERE id = :id'
            );
            $statement->execute([
                'id' => $car->getId(),
                'brand' => $car->getBrand(),
                'model' => $car->getModel(),
                'year' => $car->getYear(),
            ]);
        }
        
        //DELETE
        public function delete(Car $car): void
        {
            $statement = $this->pdo->prepare('DELETE FROM cars WHERE id = :id');
            $statement->execute(['id' => $car->getId()]);
        }
        
       
    }
