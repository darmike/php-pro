<?php

declare(strict_types=1);

namespace CarMaster;


	class Car
	{
		private string $brand;
		private string $model;
		private int $year;
		private string $id;
  
		
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

		

		
		
		
		}
	
