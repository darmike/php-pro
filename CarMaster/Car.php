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
        private array $parts = [];
        
        /**
         * @throws CarIdException
         */
        public function __construct(string $brand, string $model, int $year, string $id, array $parts)
        {
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
            $this->validateId($id);
            $this->parts = $parts; // Виправлено тут
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
        
        public function getParts(): array
        {
            return $this->parts;
        }
        
        private function validateId(string $id): void
        {
            if (strlen($id) !== 8) {
                throw new CarIdException("Невірний формат номера");
            }
            
            $this->id = $id;
        }
    }

