<?php


	interface Acariciable {
		public function acariciar();
	}

	class Animal {
		protected $type;

		public function __construct($type) {
			$this->type = $type;
		}
	}

	class Perro extends Animal implements Acariable {
		public function acariciar(){
			return 'Se alegra';
		}
	}

	class Gato extends Animal implements Acariable {
		public function acariciar(){
			return 'Se pone de mal humor';
		}
	}

	$chancho = new Perro('Chihuahua');

	var_dump($chancho);