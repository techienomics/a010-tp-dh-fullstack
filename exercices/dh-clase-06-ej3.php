<?php 
/* PHP EMBEBIDO - Curso Desarrollo Web Full Stack Clase 06 (PHP)

2. Partiendo del archivo register.php que se encuentra en el campus:
a. Agregar los siguientes campos  
	Confirmar contraseña
	Teléfono de contacto
	Dirección domicilio
b. Agregar funcionalidad para que si se recibe por GET (en el query String): "?versionCorta=true" no se muestren los campos agregados anteriormente.
c. Escribir un array con al menos 10 países. Dado esto incluir un campo "País de nacimiento" con una etiqueta <select> para que el usuario pueda elegir su nacionalidad. Las opciones dentro del select, deben mostrarse dinámicamente según contenido del array.
*/




<!doctype html>

<html>

	<head>
		<meta charset="utf-8">
		<title>Documento sin título</title>

		<style>
			h1{
				text-align:center;
			}

			table{
				background-color:#FFC;
				padding:5px;
				border:#666 5px solid;
			}
			
			.no_validado{
				font-size:18px;
				color:#F00;
				font-weight:bold;
			}
			
			.validado{
				font-size:18px;
				color:#0C3;
				font-weight:bold;
			}
		</style>
	</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario"> 
	<!-- alternativamente hacer action='validacion.php' y sacar el texto php en un archivo con ese nombre-->
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>

<?php
	
	if (isset($_POST["enviando"])){

		$usuario=$_POST["nombre_usuario"];
		$edad=$_POST["edad_usuario"];

		if ($usuario=="Juan"){
			echo "<p class='validado'> Puedes entrar </p>";
		} else {
			echo "<p class='no_validado'> No puedes entrar </p>";
		}
	}

?>

</body>
</html>


<?php
	$countries = [
		"ar" => "Argentina",
		"br" => "Brasil",
		"cl" => "Chile",
		"co" => "Colombia",
		"ve" => "Venezuela",
		"uy" => "Uruguay",
	];

	$characters = [
		[
			"name" => "Darth Vader",
			"image" => "images/dathvader.jpg",
		],
		[
			"name" => "Han Solo",
			"image" => "images/hansolo.jpg",
		],
		[
			'name' => 'Lando Calrissian',
			'image' => 'images/lando.jpg',
		],
		[
			"name" => "Leia Organa",
			"image" => "images/leia.jpg",
		],
		[
			"name" => "Luke Skywalker",
			"image" => "images/luke.jpg",
		],
		[
			"name" => "Senator Palpatine",
			"image" => "images/palpatine.jpg",
		],
		[
			'name' => 'Master Yoda',
			'image' => 'images/yoda.jpg',
		],
	];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP embebido</title>
	</head>
	<body>
		<select name="countries">
			<?php foreach ($countries as $code => $country): ?>
				<option value="<?= $code ?>"> <?= $country ?> </option>
			<?php endforeach; ?>
		</select>

		<br><br>

		<?php foreach ($characters as $character): ?>
			<div>
				<h2> <?= $character['name'] ?> </h2>
				<img src="<?= $character['image'] ?>" width="100">
			</div>
		<?php endforeach; ?>

		<ul>
			<?php for ($i = 1; $i <= 10; $i++): ?>
				<li> <?= $i; ?> </li>
			<?php endfor; ?>
		</ul>
	</body>
</html>

<?php 

# prueba GET 
print_r($_GET);

$mascotas = [];

echo $mascotas[$_GET['id']]

?>


<?php
	$countries = [
		"ar" => "Argentina",
		"br" => "Brasil",
		"cl" => "Chile",
		"co" => "Colombia",
		"ve" => "Venezuela",
		"uy" => "Uruguay",
	];

	$characters = [
		[
			"name" => "Darth Vader",
			"image" => "images/dathvader.jpg",
		],
		[
			"name" => "Han Solo",
			"image" => "images/hansolo.jpg",
		],
		[
			'name' => 'Lando Calrissian',
			'image' => 'images/lando.jpg',
		],
		[
			"name" => "Leia Organa",
			"image" => "images/leia.jpg",
		],
		[
			"name" => "Luke Skywalker",
			"image" => "images/luke.jpg",
		],
		[
			"name" => "Senator Palpatine",
			"image" => "images/palpatine.jpg",
		],
		[
			'name' => 'Master Yoda',
			'image' => 'images/yoda.jpg',
		],
	];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP embebido</title>
	</head>
	<body>
		<select name="countries">
			<?php foreach ($countries as $code => $country): ?>
				<option value="<?= $code ?>"> <?= $country ?> </option>
			<?php endforeach; ?>
		</select>

		<br><br>

		<?php foreach ($characters as $character): ?>
			<div>
				<h2> <?= $character['name'] ?> </h2>
				<img src="<?= $character['image'] ?>" width="100">
			</div>
		<?php endforeach; ?>

		<ul>
			<?php for ($i = 1; $i <= 10; $i++): ?>
				<li> <?= $i; ?> </li>
			<?php endfor; ?>
		</ul>
	</body>
</html>

