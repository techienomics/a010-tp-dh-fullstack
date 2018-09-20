<?php

	class Hamburguesa {
		public $size;
	}

	class Papas {
		public $size;
	}

	$bigMac = new Hamburguesa();
	$bigMac->size = 'BIG';

	if ($bigMac instanceof Papas) {
		echo "Qué rica las papas";
	} else {
		echo "No, es una hamburguesa";
	}
	
?>