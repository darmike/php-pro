<?php
    
    declare(strict_types=1);
    
    namespace CarMaster;
    
    class Client
    {
        private string $firstName;
        private string $lastName;
        private string $phoneNumber;
        private string $clientId;
        private Car $car;
        
        public function __construct(string $firstName, string $lastName, string $phoneNumber, string $clientId, Car $car)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->phoneNumber = $phoneNumber;
            $this->clientId = $clientId;
            $this->car = $car;
        }
        
        public function getFirstName(): string
        {
            return $this->firstName;
        }
        
        public function getLastName(): string
        {
            return $this->lastName;
        }
        
        public function getPhoneNumber(): string
        {
            return $this->phoneNumber;
        }
        
        public function getClientId(): string
        {
            return $this->clientId;
        }
        
        public function getCar(): Car
        {
            return $this->car;
        }
        
        public function orderParts(array $parts): void
        {
            // Логіка замовлення запчастин для автомобіля клієнта
            echo "Ordering parts for {$this->car->getBrand()} {$this->car->getModel()} (Client: {$this->firstName} {$this->lastName}): " . implode(', ', $parts) . "\n";
            // Тут можна викликати зовнішні сервіси, щоб замовити запчастини
        }
    }
