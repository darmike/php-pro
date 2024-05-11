<?php
    
    namespace CarMaster;
    
    class FinalOrder
    {
        private Client $client;
        private array $services; // Масив сервісів
        
        public function __construct(Client $client, array $services)
        {
            $this->client = $client;
            $this->services = $services;
        }
        
        public function getClient(): Client
        {
            return $this->client;
        }
        
        public function getServices(): array
        {
            return $this->services;
        }
        
        // Повернення першого сервісу зі списку
        public function getService()
        {
            if (!empty($this->services)) {
                return $this->services[0];
            } else {
                return null;
            }
        }
    }
