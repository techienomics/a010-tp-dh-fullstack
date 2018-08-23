<style type="text/css">
	h2{
		color:red;
		background-color: pink;
		padding: 5px;
		margin:auto;
		display: inline-block;
	}
</style>

<?php

# -----------------------------------------------	
# Clase 4 PHP - Fullstack - DigitalHouse
# -----------------------------------------------

# Ejercicio 1 - Clase 4 PHP
# 1. Generar un archivo llamado funciones.php:

echo "<br><br>";
echo "<h2> Ejercicio 1 - Clase 4 PHP </h2>";
echo "<br><br>";

#Definir una función mayor() que reciba 3 números y devuelva el mayor, imprimir el resultado.

function mayor($num1, $num2, $num3){
	if ($num1 > $num2 && $num1 > $num3) {
		return $num1;
	} elseif ($num2 > $num1 && $num2 > $num3) {
		return $num2;
	} else {
		return $num3;
	}
}

echo mayor(12,5,8) . '<br>';

echo '<hr>';


function mayor2($num1, $num2, $num3){
	return $num1 > $num2 ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);
}

echo mayor2(12,5,8) . '<br>';

echo '<hr>';

#Definir una función tabla() que reciba un parámetro base, un parámetro límite, y devuelve un array con la secuencia de números desde el numero base hasta el numero limite, imprimir el resultado.

function tabla($base,$limit){
	$result = result();
	for ($i=1; $base * $i < $limit; $i++) { 
		$result[] = '$base * $i' . $base * $i;	
	}
	return $result;
}

#echo var_dump($result);
echo '<hr>';

#Definir una variable llamada numeroMagico, que contenga un número, dicha variable deberá estar en la 1er línea de nuestro código PHP.

function numeroMagico($limitmin,$limitmax){
	return rand($limitmin, $limitmax);
}

$numeroMagico = numeroMagico(0,300);
echo $numeroMagico;
echo '<hr>';

# Modificar mayor() para que si recibe sólo 2 parámetros o si el tercer parámetro NO es un número (is_numeric()), compare a esos dos números con numeroMagico.

function mayorModificado($num1, $num2, $num3 = NULL){
	if (!is_numeric($num3) || $num3 == NULL) {
		global $numeroMagico;
		$num3 = $numeroMagico;
	}

	if ($num1 > $num2 && $num1 > $num3) {
		return $num1;
	} elseif ($num2 > $num1 && $num2 > $num3) {
		return $num2;
	} else {
		return $num3;
	}
}

echo mayorModificado(4000,12) . '<br>';

echo '<hr>';

# Modificar tabla para que si recibe un sólo parámetro o si el segundo parámetro NO es un número, utilice numeroMagico como límite.

echo "<br><br>";
echo "version resulta por javier";
echo "<br><br>";

$numeroMagico = 1981;

	function mayor ($num1, $num2, $num3 = NULL) {
		if ($num3 == NULL || !is_numeric($num3)) {
			global $numeroMagico;
			$num3 = $numeroMagico;
		}
		return $num1 > $num2 ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);
	}

	echo mayor(10, 200, 30);
	echo "<hr>";
	echo mayor(10, 200);
	echo "<hr>";
	echo mayor(10, 200, "zz");
	echo "<hr>";

	function tabla($base, $limite){
		$resultado = [];

		for ($i = 1; $base * $i < $limite; $i++) {
			$resultado[] = "$base * $i = " . $base * $i;
		}
		return $resultado;
	}

	echo "<pre>";
	print_r(tabla(23, 150));
	echo "</pre>";

	function triangulo ($base, $altura) {
		return $base * ($altura / 2);
	}

	echo triangulo(6, 4);
	echo "<hr>";

	function rectangulo ($base, $altura) {
		return $base * ($altura);
	}

	echo rectangulo(6, 4);
	echo "<hr>";

	function cuadrado ($base) {
		return $base * $base;
	}

	echo cuadrado(6);
	echo "<hr>";

	function circulo ($radio) {
		return cuadrado($radio) * pi();
	}

	echo circulo(4);
	echo "<hr>";





# Ejercicio 2 - Clase 4 PHP
# 2. Generar un archivo llamado superficie.php:
echo "<br><br>";
echo "<h2> Ejercicio 2 - Clase 4 PHP </h2>";
echo "<br><br>";

# Definir una función triangulo() que retorne su superficie (¿Cómo calcular la superficie de un triángulo?).
# Definir una función rectangulo() que retorne su superficie (¿Cómo calcular la superficie de un rectángulo?).
# Definir una función cuadrado() que retorne su superficie (¿Cómo calcular la superficie de un cuadrado?).
# Utilizando la función pi(), definir una función circulo() que retorne su superficie. ¿Cómo calcular la superficie de un círculo?)





# Ejercicio 3 - Clase 4 PHP
echo "<br><br>";
echo "<h2> Ejercicio 3 - Clase 4 PHP </h2>";
echo "<br><br>";

# Generar un archivo llamado incluir.php que retorne un echo con el siguiente string “Soy incluir.php”.
#Incluir en el archivo, saludo.php. ¿Qué sucede?
#Reemplazar include por require. ¿Qué sucede?
#Generar en la misma carpeta un archivo saludo.php que solamente haga echo “Hola mundo”. ¿Qué sucede ahora con el punto a y el punto b?
#En el archivo incluir.php reemplazar el require por include, e incluir 3 veces el mismo archivo. ¿Qué sucede?
#En el archivo incluir.php reemplazar todos los include por include_once. ¿Qué sucede?



// Ejercicio 2 - Clase 1 PHP
/* 2. 
Crear un archivo todoJunto.php que incluya el archivo funciones.php y superficie.php en donde se definirá una  función que reciba los radios de 3 círculos y retorna la mayor superficie entre ambos. Para este ejercicio se deberá reutilizar las funciones ya definidas.
*/




// Ejercicio 2 - Clase 1 PHP
/* 2. 
Modificar todoJunto.php para que en su primer línea diga $funcionesEjecutadas = 0. Luego, modificar cada función de funciones.php y superficie.php para que al comenzar hagan $funcionesEjecutadas++. Probar llamar a varias funciones y ver cuanto vale $funcionesEjecutadas en cada momento. ¿Esto esta permitido? ¿Qué sucede?
*/




// Ejercicio 2 - Clase 1 PHP
/* 2. 
En caso de que el ejercicio anterior haya sido fallido, modificar la variable con la palabra reservada global para que sí funcione.
*/




// Ejercicio 2 - Clase 1 PHP
/* 2. 
Utilizando strpos(), encontrar la posición de la primera aparición de "php" dentro de la cadena: "Me encanta php, A Mi tambien me encanta php!"
*/




// Ejercicio 2 - Clase 1 PHP
/* 2. 
Realizar un proceso a correr desde la consola que:
Salude al usuario diciendole “Hola Mundo”.
Le pida que ingrese su nombre y a continuación le diga “Bienvenido nombre” donde nombre debe ser reemplazado por lo que se haya ingresado.
Le pida al usuario que ingrese su edad. Si es menor de 18 años le diremos “Usted no esta autorizado en el sistema” y el programa termina. Si es mayor de 18 le diremos “Autorización exitosa”.
Crear una función hobbyValido. Esta función recibe un string y devolverá verdadero si este string tiene menos de 15 caracteres y más de 3 caracteres.
Le pediremos al usuario que ingrese sus hobbies separados por coma.
Por cada hobby que sea válido
le diremos “Usted confirma que le gusta HOBBY?” (donde la palabra HOBBY se ira reemplazando con cada uno de los valores ingresados).
Al terminar imprimiremos:

Nombre: Juan
Edad: 25
Hobbies: Fútbol, Netflix, Helado

                Solamente se deben imprimir los hobbies confirmados.
                Tip: Utilizar la función explode

*/
