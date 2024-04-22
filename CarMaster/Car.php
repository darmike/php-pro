<?php
    
    declare(strict_types=1);
    
    namespace CarMaster;
    
    
    use CarMaster\Exceptions\CarIdException;
    
    class Car
    {
        private string $brand;
        private string $model;
        private int $year;
        private string $id;
        
        public function __construct(string $brand, string $model, int $year, string $id)
        {
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
            $this->validateId($id); // Валідація id при створенні об'єкта
        }
        
        public function getBrand(): string
        {
            return $this->brand;
        }
        
        public function getModel(): string
        {
            return $this->model;
        }
        
        public function getYear(): int
        {
            return $this->year;
        }
        
        public function getId(): string
        {
            return $this->id;
        }
        
        public function setBrand(string $brand): void
        {
            $this->brand = $brand;
        }
        
        public function setModel(string $model): void
        {
            $this->model = $model;
        }
        
        public function setYear(int $year): void
        {
            $this->year = $year;
        }
        
        public function setId(string $id): void
        {
            $this->validateId($id); // Валідація id при зміні значення
        }
        
        /**
         * @throws CarIdException
         */
        private function validateId(string $id): void
        {
            if (strlen($id) !== 8) {
                throw new CarIdException("Невірний формат номера");
            }
            
            $this->id = $id;
        }
    }
