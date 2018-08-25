<?php 
/* PHP EMBEBIDO - Curso Desarrollo Web Full Stack Clase 06 (PHP)

2. Partiendo del archivo register.php que se encuentra en el campus:
a. Agregar los siguientes campos  
	Confirmar contraseña
	Teléfono de contacto
	Dirección domicilio
b. Agregar funcionalidad para que si se recibe por GET (en el query String): "?versionCorta=true" no se muestren los campos agregados anteriormente.
c. Escribir un array con al menos 10 países. Dado esto incluir un campo "País de nacimiento" con una etiqueta <select> para que el usuario pueda elegir su nacionalidad. Las opciones dentro del select, deben mostrarse dinámicamente según contenido del array.


3. Con el archivo del punto anterior:
Agregar un campo "Pasatiempos", que serán varios checkboxes que la persona podrá elegir a elección.
Después, al momento en que se envía el formulario, hacer que los datos lleguen a un archivo nuevo llamado “confirmation.php”.
Dentro de ese nuevo archivo, mostrar en pantalla todos los datos ingresados por el usuario de la siguiente manera:

Muchas Gracias por registrarte $NOMBRE, nos has dicho que tu país de nacimiento es $PAIS. Hemos registrado tu email: $EMAIL.

Tus pasatiempos son: $PASATIEMPO, $PASATIEMPO, ...

¡Gracias!

(En php hay una función que une los elementos de un array, implode, ¿nos servirá de algo?)

Tener en cuenta que si la persona no marcó pasatiempos, se deberá mostrar un texto tipo: No has especificado tus pasatiempos. TIP: Esto puede ser resuelto con el uso de IF y ISSET()

*/

$countries = [
        "ar" => "Argentina",
        "br" => "Brasil",
        "co" => "Colombia",
        "fr" => "Francia",
        "it" => "Italia",
        "ge" => "Alemania",
        "uy" => "Uruguay",
        "bo" => "Bolivia",
        "cl" => "Chile",
        "py" => "Paraguay"
];

echo "<h2> Ejercicio 2 - Clase 6 PHP </h2>";
echo "<br>Imprime (print_r) lo solicitado: <br>";
echo "<br><br>";

?>

<!DOCTYPE html>

<html>

	<head>
	    <meta charset="utf-8">
	    <title>Contact us</title>
		 <style media="screen">
		 	* {
		 		box-sizing: border-box;
		 	}
		 	.form-control {
		 		border: solid 1px #dddddd;
				background-color: #eeeeee;
				padding: 5px;
				margin-bottom: 10px;
		 	}
			.form-control input:not([type=checkbox]) {
				display: block;
				height: 40px;
				width: 100%;
				margin-top: 5px;
				padding: 15px;
				font-size: 1em;
				outline: none;
			}
			.form-control select {
				width: 60%;
				height: 40px;
				font-size: 1em;
				outline: none;
			}
			.form-control button {
				background-color: #24c4d4;
				color: #FFFFFF;
				font-size: 1.2em;
				padding: 10px 20px;
				border: none;
				border-radius: 5px;
			}
		 </style>
	</head>

	<body>
	   <form method='post' action="/clase6-ej3.php">
	      <fieldset >
	      	
				<legend>Registrate</legend>

				<strong>* campos requeridos</strong><br><br>

				<div class='form-control'>
					<label for='name' >Nombre completo*: </label>
					<input type='text' name='name' required>
				</div>

				<div class='form-control'>
					<label for='email' >Email*:</label>
					<input type='text' name='email' required>
				</div>

				<div class='form-control'>
					<label for='username' >Nombre de usuario*:</label>
					<input type='text' name='username' required>
				</div>

				<div class='form-control'>
					<label for='password'>Contraseña*:</label>
					<input type='password' name='password' required>
				</div>

				<?php # ocultarCampos = !isset($_GET['versionCorta']); version alternativa para volver mejor entendible y si los campos a ocultar no se encuentran en bloque ?>
				<?php # if ($ocultarCampos) : ?>

				<?php if (!isset($_GET['versionCorta'])==true) :?> <?php # if (true) : version que fuera un true o false para comprobar funcionamiento y luego dedicarse a la condicion?>

				<div class='form-control'>
					<label for='passwordconfirm'>Confirmar Contraseña*:</label>
					<input type='password' name='passwordconfirm' required>
				</div>

				<div class='form-control'>
					<label for='phonenumber' >Número de Télfono*:</label>
					<input type='text' name='phonenumber' required>
				</div>
				
				<div class='form-control'>
					<label for='userAdress' >Domicilio*:</label>
					<input type='text' name='userAdress' required>
				</div>


				<?php endif;?>
		
				<div class='form-control'>
				<label for="userCountry">País de Nacimiento:</label><br>
				<select name="countries">
				<?php foreach ($countries as $code => $country):?>
						<option value="<?= $code ?>"> <?= $country ?></option>
				<?php endforeach; ?>
				</select>
				</div>
				
				<div class='form-control'>
					<label for='userHobbies'>Detalle sus Pasatiempos*:</label><br>
					<input type="checkbox" name="userHobbies[]" value="Soccer"> Soccer<br>
					<input type="checkbox" name="userHobbies[]" value="Tennis"> Tennis<br>
					<input type="checkbox" name="userHobbies[]" value="Ski"> Ski<br>
					<input type="checkbox" name="userHobbies[]" value="PlayStation"> PlayStation<br>
				</div>

				<div class='form-control'>
					<button type="submit">ENVIAR</button>
				</div>

	      </fieldset>
	   </form>

	</body>

</html>
