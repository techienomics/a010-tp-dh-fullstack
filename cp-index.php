<style type="text/css">
	h2{
		color:black;
		background-color: grey;
		padding: 5px;
		margin:auto;
		display: inline-block;
	}
</style>

<?php

// Ejercicios de Practica del Curso de Pildoras Informativas

	print "esto es un mensaje de bienvenida";
	$variable1 = 2;
	$variable2 = $variable1 ** 2;

	echo "<br>";
	echo " el resultado es " . $variable2;
	echo "<br>";
	echo " el resultado es $variable2 ";
	echo "<br>";

	function dameDatos(){

		echo "esto es una funcion basica";
	}

	dameDatos();

	include 'cp-otraFuncion.php';
	//require 'cp-otraFuncion.php';


	otraFuncion();


	function incrementaVariable() {
		static $contador = 0;
		$contador++;
		echo $contador . "<br>";
	}
	
	echo "<br>";
	echo "<br>";
	
	$variable1 ="Casa";
	$variable2 ="CASA";
	$resultado=strcasecmp($variable1,$variable2);
				// strcmp compara sin condierar mayúsculas y minúsculas vs strcasecmp, devuelve 1 si no son iguales, 0 si son iguales
	if ($resultado) {
		echo "las dos variables coinciden <br>";
	} else{
		echo "las dos variables no coinciden <br>";
	}

	$variable1 = 8;
	$variable2 = 8;
	if ($variable1 == $variable2) {
		echo "las dos variables coinciden <br>";
	} else{
		echo "las dos variables no coinciden <br>";
	}


	define('IVA',.21, true);
	define('PAIS', 'Argentina');
	echo 'El valor del iva en ' . PAIS . ' es ' . IVA;

	/*
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
	*/


//-------------------------------------------------------------------------------------

echo "<br><br>";
echo "<h2> Programacion Orientada a Objetos - PHP - Curso Pildoras Informativas </h2>";
echo "<br><br>";
/*
Modelo de POO
1) objetos, que tienen propiedades/atributos y metodos (funciones dentro de una clase) 2) clases que segmentan entre tipos de objetos 3) instancias, que son ejemplos individuales de los objetos de una clase
*/


include("cp-clasesDeVehiculos.php");  // se extrae en un file exclusivo las clases (modularizacion), recordar que include si da error no interrumpe la ejecucion de las siguientes lineas

$renault = new car(); // se define una instancia a paratir de invocar la clase
$seat = new car();
$mazda = new car();

$renault -> estableceColor("Rojo", "Renault");

$mazda -> girar();
echo "$renault->ruedas <br>";
echo "$renault->color <br>";
echo "El Renault tiene $renault->ruedas ruedas.<br>";

$iveco = new truck();
$iveco -> girar();
$iveco -> arrancar();


/* Modularizacion, dividir el codigo en partes (clases)
   Encapsulacion, dividir el codigo funcionalmente entre las partes
   
*/

?>