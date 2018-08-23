<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Clase 3 - PHP</title>
		<style>
			div {
				display: inline-block;
				margin: 0 15px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php

			$navBar = [
				"Home" => "index.php",
				"Servicios" => "servicios.php",
				"Contacto" => "contacto.php",
				"Preguntas Frecuentes" => "faq.php",
				"Login" => "login.php",
				"Perfil" => "perfil.php",
			];

			$isUser = false;

			echo "<ul>";
			foreach ($navBar as $txt => $url) {
				if ($txt == 'Perfil' && !$isUser) continue;
				if ($txt == 'Login' && $isUser) continue;
				echo "<li><a href='$url'>$txt</a></li>";
			}
			echo "</ul>";

			$usuarios = [
				["nombre" => "Juana", "apellido" => "González"],
				["nombre" => "Pedro", "apellido" => "Lumier"],
				["nombre" => "Maru", "apellido" => "Botana"],
			];

			foreach ($usuarios as $unUsuario) {
				echo $unUsuario["nombre"] . " " . $unUsuario["apellido"] . "<br>";
			}

			echo "<br>";

			$paises = [
				"ar" => "Argentina",
				"br" => "Brasil",
				"cl" => "Chile",
				"co" => "Colombia",
				"pe" => "Perú",
				"uy" => "Uruguay",
				"ve" => "Venezuela",
				"ir" => "Irlanda",
				"ne" => "Holanda",
			];

			echo "<select>";
			foreach ($paises as $codigo => $pais) {
				echo "<option value='$codigo'> $pais </option>";
			}
			echo "</select>";
			echo "<br>";

			$personajes = [
				[
					"nombre" => "Darth Vader",
					"imagen" => "images/dathvader.jpg",
				],
				[
					"nombre" => "Han Solo",
					"imagen" => "images/hansolo.jpg",
				],
				[
					'nombre' => 'Lando Calrissian',
					'imagen' => 'images/lando.jpg',
				],
				[
					"nombre" => "Leia Organa",
					"imagen" => "images/leia.jpg",
				],
				[
					"nombre" => "Luke Skywalker",
					"imagen" => "images/luke.jpg",
				],
				[
					"nombre" => "Senator Palpatine",
					"imagen" => "images/palpatine.jpg",
				],
				[
					'nombre' => 'Master Yoda',
					'imagen' => 'images/yoda.jpg',
				],
			];

			foreach ($personajes as $personaje) {
				echo "<div>";
				echo "<h2> {$personaje['nombre']} </h2>";
				echo "<img src=\"" . $personaje["imagen"] . "\" width='100'>";
				echo "</div>";
			}
		?>
	</body>
</html>
