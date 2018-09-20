<?php

	class Producto {


		protected $name;
		protected $price;

		public function __construct($name, $price) {
			$this->name = $name;
			$this->price = $price;
		}

		public function getPdtoData(){
			return $this->name . ' ' . $this->price;
		}
	}
