<?php

declare(strict_types=1);

namespace CarMaster;

use Exception;

use CarMaster\Exсeptions\Car_ID_Exception;
	
	
	
	class Car
	{
		private string $brand;
		private string $model;
		private int $year;
		private string $id;
		
		public const CAR_ID = 8;
		
		
		
		public function __construct(string $brand, string $model, int $year, string $id)
		{
			$this->brand = $brand;
			$this->model = $model;
			$this->year = $year;
			$this->id = $id;
		}
		
		public function getBrand(): string
		{
			return $this->brand;
		}
		
		public function getModel(): string
		{
			return $this->model;
		}
		
		public function getYear(): int
		{
			return $this->year;
		}
		
		public function getId(): string
		{
			return $this->id;
		}
		
		public function setId(string $id): void
		{
			if (strlen($id) !== 8) {
				throw new InvalidArgumentException("Invalid format for car ID. It should be 8 characters long.");
			}
			$this->id = $id;
		}
		
		
		/**
		 * @throws Exception
		 */
		protected function validateText(string $text): void
		{
			// word length validation
			if (str_word_count($text) < static::CAR_ID) {
				throw new Car_ID_Exception($this,
					static::CAR_ID);
			}
		}
		
		
		
		}
	
