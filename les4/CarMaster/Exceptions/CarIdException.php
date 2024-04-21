<?php
    
    declare(strict_types=1);
    
    namespace CarMaster\Exceptions;
    
    use Exception;
    
    class CarIdException extends Exception
    {
        // Повідомлення за замовчуванням для винятку
        protected $message = "Невірний форммат номера";
    }
