<?php
    
    namespace CarMaster;
    
    class Client
    {
        private string $firstName;
        private string $lastName;
        private string $phoneNumber;
        private string $clientId;
        private array $cars = [];
        
        public function __construct(string $firstName, string $lastName, string $phoneNumber, string $clientId, Car $car)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->phoneNumber = $phoneNumber;
            $this->clientId = $clientId;
            $this->cars[] = $car;
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
        
        public function getCars(): array
        {
            return $this->cars;
        }
        
        public function orderParts(array $parts): void
        {
            foreach ($this->cars as $car) {
                foreach ($car->getParts() as $part) {
                    if ($part->isAvailable()) {
                        echo "Ordering {$part->getType()} for {$car->getBrand()} {$car->getModel()} (Client: {$this->firstName} {$this->lastName})\n";
                    } else {
                        echo "{$part->getType()} for {$car->getBrand()} {$car->getModel()} is not available\n";
                    }
                }
            }
        }
    }

