<?php
	declare(strict_types=1);
	
	namespace CarMaster\Exсeptions;
	
	use RuntimeException;
	
	class CarValidationExcepions extends RuntimeException
	{
		public function __construct(string $message = 'Car object has invalid data')
		{
			parent::__construct($message);
		}
	}
	
	