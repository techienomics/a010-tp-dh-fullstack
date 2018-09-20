<?php
	abstract class Fruta {
		protected $semillas;

		public function getSemillas () {
			return $this->semillas;
		}

		abstract public function sabor($algo);
	}

	class Banana extends Fruta {
		public function sabor($algo, $mas = 0){
			return 'Tiene gusto a banana';
		}

		public function getSemillas () {
			return 'No tiene semillas';
		}
	}

	$banana = new Banana();

	echo $banana->sabor('sdfsdf');
	echo $banana->getSemillas();
