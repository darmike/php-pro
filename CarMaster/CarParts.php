<?php
    
    namespace CarMaster {
        
        class CarParts
        {
            private string $type;
            private bool $availability;
            private int $quantity;
            
            public function __construct(string $type, bool $availability, int $quantity)
            {
                $this->type = $type;
                $this->availability = $availability;
                $this->quantity = $quantity;
            }
            
            public function getType(): string
            {
                return $this->type;
            }
            
            public function isAvailable(): bool
            {
                return $this->availability;
            }
            
            public function getQuantity(): int
            {
                return $this->quantity;
            }
        }
       
       
    }