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


// ------------------------------------------------
// Clase 2 PHP - Fullstack - DigitalHouse
// -----------------------------------------------


// Ejercicio 1 - Clase 2 PHP
/* 1. Definir dos variables con números y compararlos con un if para decidir cuál número es mayor e imprimir “El número mayor es N” donde N sea el valor de la variable que resultó ser mayor, y un else para cubrir el caso inverso.
*/

echo "<br><br>";
echo "<h2> Ejercicio 1 - Clase 2 PHP </h2>";
echo "<br><br>";


$num1 = 34;
$num2 = 17;

if ($num1 > $num2){
	echo "El número mayor es $num1. <br>";
} elseif ($num1 < $num2){
	echo "El número mayor es $num2. <br>";
} else{
	echo "Los numeros son iguales. <br>";

}

// Ejercicio 2 - Clase 2 PHP
/* 2. Utilizando la función propia de PHP rand(x,y), donde “x” es el número mínimo e “y” el número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable y hacer echo de la variable si y sólo si el número generado es 3 o 5.
*/

echo "<br><br>";
echo "<h2> Ejercicio 2 - Clase 2 PHP </h2>";
echo "<br><br>";


$lotery = rand(0,9999);
echo "El $lotery salio \"a la cabeza\" en la Loteria Nacional. <br>";


// Ejercicio 3 - Clase 2 PHP
/* 3. Utilizando la variable del ejercicio anterior, imprimir “El número NO es 3” en el caso que sea verdad esa premisa. En el caso que sí lo sea que simplemente se imprima el número 3.
*/

echo "<br><br>";
echo "<h2> Ejercicio 3 - Clase 2 PHP </h2>";
echo "<br><br>";


if ($lotery == 3){
	echo "$lotery <br>";
} else {
	echo "El numero no es 3. <br>";
}


// Ejercicio 4 - Clase 2 PHP	
/* 4. En otra variable, generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea verdadero, imprimir “El número es mayor a 50”, en el caso que sea falso: “El número es menor a 50”. ¿Qué pasa si el número es 50?
*/

echo "<br><br>";
echo "<h2> Ejercicio 4 - Clase 2 PHP </h2>";
echo "<br><br>";


if (rand(0,100) > 50){
	echo "El número es mayor que 50. <br>";
} elseif (rand(0,100) < 50){
	echo "El número es menor a 50. <br>";
} else{
	echo "El número es 50. <br>";
}


// Ejercicio 5 - Clase 2 PHP
/* 5. Generar dos variables, una $nombreDeUsuario y $ClaveDeUsuario, ambos strings. Validar que el usuario corresponda a "admin" y la contraseña a "1234". De ser así, que imprima "¡Bienvenido a tu cuenta!", sino, que imprima "Lo sentimos, hay un error de credenciales".
a. Modificar al ejercicio anterior, y agregar los else necesarios para poder identificar si el error está en el usuario, la contraseña, o en ambos. Jugar cambiando el valor de las variables $nombreDeUsuario y $ClaveDeUsuario para visualizar los distintos resultados del IF.
*/

echo "<br><br>";
echo "<h2> Ejercicio 5 - Clase 2 PHP </h2>";
echo "<br><br>";


$nombreDeUsuario = 'Admin';
$claveDeUsuario = '1234';

if ($nombreDeUsuario == 'Admin' && $claveDeUsuario == '1234'){
	echo "¡Bienvenido a tu cuenta! <br>";
} else{
	echo "Lo sentimos, hay un error de credenciales, vuelva a intentarlo por favor. <br>";
}

if ($nombreDeUsuario == 'Admin' && $claveDeUsuario == '1234'){
	echo "¡Bienvenido a tu cuenta! <br>";
} elseif ($nombreDeUsuario == 'Admin') {
	echo "Lo sentimos, hay un error en la clave de usuario, vuelva a intentarlo por favor. <br>";
} elseif ($claveDeUsuario == '1234') {
	echo "Lo sentimos, hay un error en el nombre de usuario, vuelva a intentarlo por favor. <br>";
} else {
	echo "Lo sentimos, el nombre y la clave de usuario son incorrectos, vuelva a intentarlo por favor. <br>";
}


// Ejercicio 6 - Clase 2 PHP
/* 6. Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que puede ser “Masculino”, “Femenino” u “Otro”). Si la persona es mayor a 18 años y no está casado se imprimirá el mensaje “Bienvenido”.
a. Modificaremos al ejercicio anterior para que también imprima bienvenido si el sexo es “Otro” sin importar el resto de las condiciones.
*/

echo "<br><br>";
echo "<h2> Ejercicio 6 - Clase 2 PHP </h2>";
echo "<br><br>";


$edad = 15;
$estadoCivilCasado = false;
$sexo = 'Otro';

if ($edad > 18 && $estadoCivilCasado == false) {
	echo "¡Bienvenido! <br>";
} else {
	echo "No es Bienvenido. <br>";
}

if ($edad > 18 && $estadoCivilCasado == false || $sexo == 'Otro') {
	echo "¡Bienvenido! <br>";
} else {
	echo "No es Bienvenido. <br>";
}

// Ejercicio 7 - Clase 2 PHP
/* 7.    Definir una variable que se llame cantidadDeAlumnos que contenga un valor numérico. Luego, escribir el siguiente código: (¡sin copiar y pegar!)
	if ($cantidadDeAlumnos) {
		echo "true";
	} else {
		echo "false";
	}
a.        ¿Qué termina imprimiendo?
b.        Probar con los valores -100, -1, 0, 1 y 100 para cantidadDeAlumnos
*/

echo "<br><br>";
echo "<h2> Ejercicio 7 - Clase 2 PHP </h2>";
echo "<br><br>";


$cantidadDeAlumnos = 1;

	if ($cantidadDeAlumnos) {
		echo "true <br>";
	} else {
		echo "false <br>";
	}


// Ejercicio 8 - Clase 2 PHP
/* 8. Probar el siguiente código:
	if ($i = 1) {
		echo "true";
	} else {
		echo "false";
	}
¿Qué imprime?. Si modificamos el 1 por un 0 en el ejercicio anterior, ¿Qué vuelve a imprimir? 
*/

echo "<br><br>";
echo "<h2> Ejercicio 8 - Clase 2 PHP </h2>";
echo "<br><br>";

	if ($i = 0) {
		echo "true";
	} else {
		echo "false";
	}


// Ejercicio 9 - Clase 2 PHP
/* 9. Definir una variable $numero con un número. Imprimir “El número es par” si lo es o “El número es impar” si no lo es. Se pide resolver este ejercicio con un if ternario:
	pregunta ? respuestaPositiva : respuestaNegativa;
*/

echo "<br><br>";
echo "<h2> Ejercicio 9 - Clase 2 PHP </h2>";
echo "<br><br>";





// Ejercicio 10 - Clase 2 PHP
/* 10. Crear una variable tipo string que guarde un nombre (Ej: "Pedro"). Utilizando switch, hacer 5  casos (para 5 nombres diferentes) e imprimir "Hola nombre_persona". Tener en cuenta que si no se coincide con ningún nombre de la variable, imprimir “No hay a quien saludar”.
*/

echo "<br><br>";
echo "<h2> Ejercicio 10 - Clase 2 PHP </h2>";
echo "<br><br>";





// Ejercicio 11 - Clase 2 PHP
/* 11.  Crear una variable colorRemera que tenga un valor tipo string, con un color primario. Utilizando switch, dejar los casos necesarios usando un solo echo y además el default. En el caso que el color sea "amarillo", "rojo" o "verde" debe entrar en el caso correspondiente e imprimir "El color de la remera es un color primario", si es otro color, deberá imprimir "La remera es de color desconocido".
*/

echo "<br><br>";
echo "<h2> Ejercicio 11 - Clase 2 PHP </h2>";
echo "<br><br>";


$colorRemera = 1;


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Funciones y Scope</title>
	</head>
	<body>
		<h2>Funciones y Scope</h2>
		<?php
			function sumar($num1, $num2) {
				return $num1 + $num2;
			}

			echo "La suma entre 10 y 20 es: " . sumar(10, 20) . "<br>";
			echo "La suma entre 1232 y 4567 es: " . sumar(1232, 4567) . "<br>";
			echo "<hr>";

			$nombre = "Juana";
			$apellido = "Pérez";

			function saludar() {
				global $apellido;
				$nombre = "Tatiana";
				return $nombre . " " . $apellido;
			}

			echo "Hola " . saludar();

			echo "<hr>";
			echo $apellido;
			echo "<hr>";

			function saludar2($nombre, $apellido = NULL) {
				if ($apellido == NULL) {
					global $apellido;
				}
				return $nombre . " " . $apellido;
			}

			echo saludar2("Victor", "Poma");
			echo "<hr>";
			echo saludar2("Hernán", "Torres");
			echo "<hr>";
			echo saludar2("Javi");

			echo "<hr>";

			function test() {
				static $a = 0;
				$a = $a + 1;
				return $a;
			}

			echo test() . "<br>";
			echo test() . "<br>";
			echo test() . "<br>";
			echo test() . "<br>";
			echo test() . "<br>";
		?>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
		<br><br><br><br><br><br><br><br>
	</body>
</html>
