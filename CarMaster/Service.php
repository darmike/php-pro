<?php
    
    namespace CarMaster;
    
    class Service
    {
        private string $clientId;
        private string $description;
        private array $categories; // Масив категорій
        
        public function __construct(string $clientId, string $description, array $categories)
        {
            $this->clientId = $clientId;
            $this->description = $description;
            $this->categories = $categories;
        }
        
        public function getCategories(): array
        {
            return $this->categories;
        }
        
        public function getDescription(): string
        {
            return $this->description;
        }
        public function getClientId(): string
        {
            return $this->clientId;
        }
    }


