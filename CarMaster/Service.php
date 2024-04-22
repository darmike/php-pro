<?php
    
    declare(strict_types=1);
    
    namespace CarMaster;
    
    class Service
    {
        private string $clientId;
        private string $description;
        private string $category;
        
        public function __construct(string $clientId, string $description, string $category)
        {
            $this->clientId = $clientId;
            $this->description = $description;
            $this->category = $category;
        }
        
        public function getClientId(): string
        {
            return $this->clientId;
        }
        
        public function getDescription(): string
        {
            return $this->description;
        }
        
        public function getCategory(): string
        {
            return $this->category;
        }
    }
