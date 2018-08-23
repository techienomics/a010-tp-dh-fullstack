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
