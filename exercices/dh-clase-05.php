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

// Curso Desarrollo Web Full Stack - Clase 05 (PHP)


// 1. Crear el archivo imprimir.php que imprima la variable $_GET a través de un var_dump y acceder al mismo con el siguiente Query String: imprimir.php?nombre=Ana&apellido=Perez&email=anaperez@digitalhouse.com

echo "<br><br>";
echo "<h2> Ejercicio 1 - Clase 5 PHP </h2>";
echo "<br><br>";

echo "<br>Imprime (var_dump) la variable '_GET' trayendo el array ' ?nombre=Ana&apellido=Perez&email=anaperez@digitalhouse.com ':<br>";
echo "<pre>";
var_dump($_GET);
echo "</pre>";

echo "<br>Imprime (print_r) la variable '_GET' trayendo el array ' ?nombre=Ana&apellido=Perez&email=anaperez@digitalhouse.com ':<br>";
echo "<pre>";
print_r($_GET);
echo "</pre>";



echo "<br><br>";
echo "<h2> Ejercicio 2 - Clase 5 PHP </h2>";
echo "<br><br>";

?>

<!--
/*
2. Crear el archivo formulario.php y hacer que el action del form apunte al archivo imprimir.php. Generar el siguiente código en el archivo formulario.php y acceder al mismo desde el browser:
-->

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
</head>

<body>
	<form action="clase5-index.php" method="get">
		<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" id="nombre"><br>
		<label for="email">E-mail:</label>
			<input type="email" name="email" id="email"><br>
		<button type="submit">Dale caña</button>
	</form>
</body>

</html>

<?php 
// ¿Qué sucede ahora en imprimir.php si enviamos el formulario con datos? el URL adopta una cadena de texto a continuacion del nombre del archivo --> clase5-index.php?nombre=342342&email=4342424%40rerwrw.com

// Modificar imprimir.php para que imprima algún valor puntual de $_GET.

// Modificar imprimir.php para que imprima todos los valores utilizando un foreach.

echo "<br>Imprime (print_r) la variable '_GET' completa cargada desde el formulario:<br>";
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<br>Imprime (print_r) la variable '_GET', key EMAIL, cargada desde el formulario:<br>";
echo "<pre>";
print_r($_GET['email']);
echo "</pre>";

echo "<br>Imprime (print_r) la variable '_GET', todos los valores, usando foreach:<br>";
echo "<pre>";

$datos = $_GET;
foreach ($datos as $key => $value) {
	if (is_array($value)) {
		echo "$key, ";
		foreach ($key as $value) {
			echo "$value, ";
		}
		echo "<br>";
	}else{
		echo "$key: $value <br>";
	}
}
echo "</pre>";


// 3. Modificar el archivo del punto 2 para que envíe los datos a través de POST. ¿Cómo deberíamos modificar imprimir.php para que siga funcionando y podamos ver los datos que enviamos?

echo "<br><br>";
echo "<h2> Ejercicio 3 - Clase 5 PHP </h2>";
echo "<br><br>";

 ?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
</head>

<body>
	<form action="clase5-index.php" method="post">
		<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" id="nombre"><br>
		<label for="email">E-mail:</label>
			<input type="email" name="email" id="email"><br>
		<button type="submit">Dale caña</button>
	</form>
</body>

</html>

<?php

	echo "<br>Imprime (print_r) la variable '_POST' completa cargada desde el formulario:<br>";
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	echo "<br>Imprime (print_r) la variable '_POST', key NAME, cargada desde el formulario:<br>";
	echo "<pre>";
	print_r($_POST['nombre']);
	echo "</pre>";


echo "<br><br>";
echo "<h2> Ejercicio 4 - Clase 5 PHP </h2>";
echo "<br><br>";


echo "<br>Imprime (print_r) el formulario enviando los datos mediante '_POST':<br>";

//4. Agregar varios checkbox en respuesta a la siguiente pregunta "¿Qué hobbies tenés?".
// Agregar un radio button para seleccionar el "estado civil".
// Agregar un select con options para la pregunta "¿En qué país naciste?".
// Completar el formulario seleccionando varias opciones de los checkbox, y enviar los datos a través de ambos métodos (GET y POST). Visualizar qué sucede en el archivo imprimir.php.

?>


<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulario PHP</title>
</head>

<body>

    <h4>Formulario POST</h4>
	<form action="clase5-index.php" method="POST">
		<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" id="nombre"><br>
		<label for="email">E-mail:</label>
			<input type="email" name="email" id="email"><br>
		<label for="hobbies">Cuales son tus hobbies: </label><br>
			 	<input type="checkbox" name="hobbies[]" value="soccer"> Male<br>
 		 		<input type="checkbox" name="hobbies[]" value="rugby"> Female<br>
  				<input type="checkbox" name="hobbies[]" value="dancing"> Other <br>
		<label for="civil">Cual es tu estado civil: </label><br>
			 	<input type="radio" name="civil" value="male"> Male<br>
 		 		<input type="radio" name="civil" value="female"> Female<br>
  				<input type="radio" name="civil" value="other"> Other <br>
		<button type="submit">Dale caña</button>
		<label for="civil">¿En que pais naciste?: </label><br>
		<select name="pais">
			Argentina <option value="Argentina"></option>
			Brasil <option value="Brasil"></option>
			Colombia <option value="Colombia"></option>
		</select>
	</form>


    <h4>Formulario GET</h4>
	<form action="clase5-index.php" method="GET">
		<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" id="nombre"><br>
		<label for="email">E-mail:</label>
			<input type="email" name="email" id="email"><br>
		<label for="hobbies">Cuales son tus hobbies: </label><br>
			 	<input type="checkbox" name="hobbies[]" value="soccer"> Male<br>
 		 		<input type="checkbox" name="hobbies[]" value="rugby"> Female<br>
  				<input type="checkbox" name="hobbies[]" value="dancing"> Other <br>
		<label for="civil">Cual es tu estado civil: </label><br>
			 	<input type="radio" name="civil" value="male"> Male<br>
 		 		<input type="radio" name="civil" value="female"> Female<br>
  				<input type="radio" name="civil" value="other"> Other <br>
		<label for="civil">¿En que pais naciste?: </label><br>
		<select name="pais">
			Argentina <option name="pais "value="Argentina"></option>
			Brasil <option name="pais value="Brasil"></option>
			Colombia <option name="pais alue="Colombia"></option>
		</select>
		<button type="submit">Dale caña</button>
	</form>

</body>

</html>


<?php

	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

echo "<br>Imprime (print_r) el formulario enviando los datos mediante '_GET':<br>";

	echo "<pre>";
	print_r($_GET);
	echo "</pre>";

?>







<!--
Probar la función de php getAllHeaders() e imprimir su resultado. ¿Qué encontramos?
Imprimir todos sus valores utilizando foreach.

Así como imprimimos $_POST y $_GET existen otras variables globales que podemos usar. Probar cada una de estas variables en un pedido vacío y luego agregándoles datos:
$_SERVER
$_FILES
$_REQUEST
$_SESSION
$_COOKIE
$GLOBALS


Curso Desarrollo Web Full Stack

Clase 06 (PHP)



Ejercicios puntuales

.   TENER EN CUENTA DE USAR PHP EMBEBIDO DONDE SEA NECESARIO  .  


Partiendo de un archivo con la línea $titulo = 'Tutorial PHP', imprimir esta variable como título de un documento HTML. Esto se debe ver similar a:

Tutorial PHP
PHP es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.
Partiendo del archivo register.php que se encuentra en el campus:
Agregar los siguientes campos  
Confirmar contraseña
Teléfono de contacto
Dirección domicilio
Agregar funcionalidad para que si se recibe una variable por GET(query String)  llamada: “versionCorta” no se muestren los campos agregados anteriormente.
Escribir en PHP un array con al menos 10 países. Dado esto incluir un campo "País de nacimiento" con una etiqueta <select> para que el usuario pueda elegir su nacionalidad. Las opciones dentro del select, deben mostrarse dinámicamente según contenido del array.

Con el archivo del punto anterior:
Agregar una pregunta PASATIEMPOS, que será, varios checkboxes que la persona podrá elegir a elección.
Después, al momento en que se registra un usuario nuevo, hacer que el formulario envíe los datos a una página nueva llamada “confirmation.php”.
Dentro de esta pagina, que se muestre en pantalla todos los datos ingresados, respetando cierta estética, Ej.

Muchas Gracias por registrarte NOMBRE COMPLETO, nos has dicho que tu país de nacimiento es PAIS. Hemos registrado tu email, "EMAIL".


Tus pasatiempos son: PASATIEMPO1, PASATIEMPO2, ...


¡Gracias!

En php hay una función que une los elementos de un array, implode


Tener en cuenta que si  la persona no marcó pasatiempos, se deberá mostrar un texto tipo: No has especificado tus pasatiempos. TIP: Esto puede ser resueltos con el uso de IF y ISSET()

Modificar register.php y confirmation.php para que envíe y procese los datos por el método POST para resguardar la información sensible.

A modo de prueba haremos que el formulario envíe los datos al mismo archivo (register.php). Una vez hecho esto haremos que el formulario ya aparezca cargado con aquellos campos que el usuario ya completó (exceptuando contraseña, pasatiempos y país) en caso de que el formulario ya haya sido enviado.

Volveremos a enviar los datos a confirmation.php para que en caso de que no haya datos enviados por post, redireccione a register.php.

Ya no usaremos más confirmation.php. Ahora a través de PHP, vamos a validar los campos de register.php. La validación debe realizarse en el mismo archivo, para que si hay campos obligatorios que no están diligenciados, se mantenga en el mismo archivo y muestre un alerta tipo Llená los campos obligatorios. En caso de éxito redirigir a success.php que mostrará un mensaje de felicitaciones. En caso de errores debe indicar cuales son los errores y debe rellenar el formulario con aquellos campos que ya se habían enviado.

Ejercicios complementarios

Realizar un archivo faq.php, en donde exista una serie de preguntas y respuestas. Hacer que las mismas estén definidas como contenido de un array. Luego, imprimir el contenido HTML a partir de un FOR que recorra las preguntas y respuestas.

Ejemplo de array:


<?php

        

        $faq = [

                ["pregunta" => "Cuanto es 1 + 1?", "respuesta" => "2"],

                ["pregunta" => "Cuando es 2 + 2?", "respuesta" => "4"]

];


?>


Partiendo de un archivo con la línea $color = ['Blanco', 'Verde', 'Rojo'].Escribir un script PHP que muestra los colores de la siguiente manera:

        Blanco, Verde, Rojo


Y


Blanco
Verde
Rojo
Modificar el ejercicio anterior para que cada elemento del array tenga el nombre del color y el valor hexadecimal (css) del mismo. Así, podríamos dibujar cada nombre con su color indicado.

Crear un array donde se especifica el nombre de un artículo con su respectivo precio. Escribir un script PHP para mostrar la secuencia, los valores dentro de una tabla, en la columna izquierda su nombre y en la derecha su precio.
Output:
Costo Articulo A

$23421

Costo Articulo B

$423

Costo Articulo C

$8289

*/

?>

<!--

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Alumnos</title>
	</head>
	<body>
		<?php
			echo "<pre>";
			var_dump($_REQUEST);
			echo "</pre>";
		?>
		<form action="detalle-alumno.php?sarasa=jajaja" method="post">
			<label>Ingresá un ID de alumno:</label>
			<input type="text" name="id">
			<button type="submit">Buscar</button>
		</form>
		<ul>
			<li><a href="detalle-alumno.php?id=0">Jose</a></li>
			<li><a href="detalle-alumno.php?id=1">Juana</a></li>
			<li><a href="detalle-alumno.php?id=2">Maria</a></li>
			<li><a href="detalle-alumno.php?id=3">Pedro</a></li>
		</ul>

		<?php
			$mascotas = ['Pepe', 'Mimo', 'Chancho', 'Luna', 'Koen'];
			echo $mascotas[$_GET['id']];
		?>

		<?php
			echo "<pre>";
			var_dump($_REQUEST);
			echo "</pre>";
			$alumnos = [
				[
					'nombre' => 'José',
					'materia' => 'Matemáticas',
				],
				[
					'nombre' => 'Juana',
					'materia' => 'Ciencias',
				],
				[
					'nombre' => 'Maria',
					'materia' => 'Música',
				],
				[
					'nombre' => 'Pedro',
					'materia' => 'Física',
				],
			];

			if (isset($_GET['id'])) {
				$idAlumno = $_GET['id'];
				echo "<h3>Entré por \$_GET</h3>";
				if ($idAlumno < count($alumnos)) {
					$alumno = $alumnos[$idAlumno];
					echo "<h1>" . $alumno['nombre'] ."</h1>";
					echo "<h5>" . $alumno['materia'] ."</h5>";
				} else {
					echo "<h3>Sorry no hay alumnos por ese ID</h3>";
				}
			}


			if (isset($_POST['id'])) {
				echo "<h3>Entré por \$_POST</h3>";
				if ($_POST['id'] < count($alumnos)) {
					echo "<h1>" . $alumnos[$_POST['id']]['nombre'] ."</h1>";
					echo "<h5>" . $alumnos[$_POST['id']]['materia'] ."</h5>";
				} else {
					echo "<h3>Sorry no hay alumnos por ese ID</h3>";
				}
			}
		?>


		<?php 
		print_r($_GET);
		$mascotas = [];
		echo $mascotas[$_GET['id']]
		?>

	</body>
</html>


-->


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