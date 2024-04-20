<?php
	
	namespace CarMaster\Exсeptions;
	
	
	use CarMaster\Car;
	
	class Car_ID_Exception extends CarValidationExcepions
	{
		public function __construct(Car $Car, int $wordLength)
		{
			parent::__construct(sprintf('The %s text must have at least %d words', $Car::class, $wordLength));
		}
		
	}