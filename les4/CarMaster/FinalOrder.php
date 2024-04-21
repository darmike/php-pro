<?php
    
    declare(strict_types=1);
    
    namespace CarMaster;
    
    class FinalOrder
    {
        private Client $client;
        private Service $service;
        
        public function __construct(Client $client, Service $service)
        {
            $this->client = $client;
            $this->service = $service;
        }
        
        public function getClient(): Client
        {
            return $this->client;
        }
        
        public function getService(): Service
        {
            return $this->service;
        }
    }
