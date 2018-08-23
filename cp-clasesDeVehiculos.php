<?php 

// Este archivo es invocado desde curso-pildoras.php


//------------- Clase de Autos ---------------------------------

class car{   // se define una clase
	var $ruedas; // se definen propiedades/atributos
	var $color;
	var $motor;

	function car(){   // este sera el metodo constructor, se llama igual a la clase, es para darle a los objetos un estado inicial. Si no se define, por default tendra un constructor vacio
		$this -> color = ""; // this (referencia a la clase == poner 'car') define valores iniciales optativo
		$this -> ruedas = 4;
		$this -> motor = 1600;
	}

	function arrancar(){   // se define un metodo/funcion
		echo 'Estoy arrancando <br>';
	}

	function girar(){
		echo 'Estoy girando <br>';
	}

	function frenar(){
		echo 'Estoy frenando <br>';
	}

	function estableceColor($colorCar, $nameCar){
		$this -> color = $colorCar;
		echo "El color del $nameCar es $colorCar. <br>";
	}

}


//------------- Clase de Camiones ---------------------------------
/* una clase (sub-clase o clase hijo) puede herdar propiedades y metodos de otra (super-clase o clase padre)
no hay soporte de clases multiples en java, php, etc. Se puede utilizar interfaces para superar la herencia multiple
class1 {...}      class2 extends class1{...}    class3 extends class2{...}
*/

class truck extends car {   // camion extiende las propiedades de car,

	function truck(){
		$this -> color = "";
		$this -> ruedas = 8;
		$this -> motor = 10000;
	}

	function estableceColor($colorTruck, $nameTruck){   //  puede redefine un metodo heredado sobreescibiendo
		$this -> color = $colorTruck;
		echo "El color del $nameTruck es $colorTruck. <br>";
	}

	function arrancar(){   // añade al metodo padre, parent:: indica que debe ejecutar todo el padre
		parent::arrancar();
		echo "Camion arrancado";
	}

}



//------------- Clase de Motos ---------------------------------







//------------- Clase de Lanchas ---------------------------------

?>