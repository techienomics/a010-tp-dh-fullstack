<?php

	class Silla {
		protected $color;
		protected $resistencia;
		protected $resiste;

		public function setResistencia($resistencia) {
			$this->resistencia = $resistencia;
		}

		public function resiste($peso) {
			if ($this->resistencia >= $peso) {
				$this->resiste = true;
			} else {
				$this->resiste = false;
			}
		}
	}

	class SillaDeRuedas extends Silla {
		private $cantRuedas;

		public function setCantRuedas($cant){
			$this->cantRuedas = $cant;
		}

		public function getCantRuedas(){
			return $this->cantRuedas;
		}
	}

	$sillaRuedas = new SillaDeRuedas();
	$sillaRuedas->setCantRuedas(4);
	$sillaRuedas->setResistencia(350);
	$sillaRuedas->resiste(600);

	echo "<pre>";
	var_dump($sillaRuedas);
