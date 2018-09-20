<?php
	declare(strict_types = 1);

	class User {
		private $name;

		public function __construct(string $name) {
			$this->name = $name;
		}

		public function setName($name) {
			$this->name = $name;
		}

		public function getName() {
			return $this->name;
		}

		public function sayHello() {
			return "Hi, my name is {$this->name}";
		}
	}
