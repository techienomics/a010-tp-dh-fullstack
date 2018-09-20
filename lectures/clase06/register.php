<?php
	$countries = [
		"ar" => "Argentina",
		"bo" => "Bolivia",
		"br" => "Brasil",
		"co" => "Colombia",
		"cl" => "Chile",
		"ec" => "Ecuador",
		"pa" => "Paraguay",
		"pe" => "Perú",
		"uy" => "Uruguay",
		"ve" => "Venezuela",
	];

	$userFullName = "";
	$userEmail = "";
	$userName = "";

	$errors = [];

	if ($_POST) {
		// Sanitización de Datos
		$userFullName = trim($_POST['userFullName']);
		$userEmail = trim($_POST['userEmail']);
		$userName = trim($_POST['userName']);

		// Validación de cada campo
		if ( empty($userFullName) ) {
			$errors["fullName"] = "Eyy llená el nombre completo";
		}

		if ( empty($userEmail) ) {
			$errors["email"] = "Eyy llená el correo electrónico";
		} elseif ( !filter_var($userEmail, FILTER_VALIDATE_EMAIL) ) {
			$errors["email"] = "Ingresá un email de valido";
		}

		if ( empty($userName) ) {
			$errors["userName"] = "Eyy poné tu nombre de usuario";
		} elseif ( strlen($userName) < 3 || strlen($userName) > 10) {
			$errors["userName"] = "El nombre de usuario debe ser de 3 hasta máximo 10 caracteres";
		}

		if (count($errors) == 0) {
			header("location: success.php"); exit;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact us</title>
	 <style>
	 	* {
	 		box-sizing: border-box;
	 	}
		form {
			width: 600px;
			margin: auto;
		}
		body {
			font-family: sans-serif;
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
		.error {
			color: red;
		}
	 </style>
</head>
<body>
   <form method='post'>
		<ul>
			<?php foreach ($errors as $oneError): ?>
			<li class="error"> <?= $oneError ?> </li>	
			<?php endforeach; ?>
		</ul>
      <fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class='form-control'>
				<label>Nombre completo*: </label>
				<input type='text' name='userFullName' value='<?= $userFullName ?>'>
				<span class="error">
					<?= isset($errors["fullName"]) ? $errors["fullName"] : '' ?>
				</span>
			</div>

			<div class='form-control'>
				<label>Email*:</label>
				<input type='text' name='userEmail' value='<?= $userEmail ?>'>
				<span class="error">
					<?= isset($errors["email"]) ? $errors["email"] : '' ?>
				</span>
			</div>

			<div class='form-control'>
				<label>Nombre de usuario*:</label>
				<input type='text' name='userName' value='<?= $userName ?>'>
				<span class="error">
					<?= isset($errors["userName"]) ? $errors["userName"] : '' ?>
				</span>
			</div>

			<div class='form-control'>
				<label>Contraseña*:</label>
				<input type='password' name='userPassword'>
			</div>

			<!-- Si viene en $_GET la posición ['versionCorta'], oculto campos -->
			<?php $mostrarCampos = !isset($_GET['versionCorta']); ?>
			<?php if ($mostrarCampos): ?>
			<div class='form-control'>
				<label>Confirmar contraseña*:</label>
				<input type='password' name='rePassword'>
			</div>

			<div class='form-control'>
				<label>Teléfono de contacto:</label>
				<input type='text' name='userPhone'>
			</div>

			<div class='form-control'>
				<label>Domicilio:</label>
				<input type='text' name='userAddress'>
			</div>
			<?php endif; ?>
			<!-- // endComment -->

			<div class='form-control'>
				<label>País de nacimiento:</label>
				<select name="userCountry">
					<?php foreach ($countries as $code => $country): ?>
						<option value="<?php echo $code ?>"> <?php echo $country ?> </option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class='form-control'>
				<button type="submit">ENVIAR</button>
			</div>

      </fieldset>
   </form>
</body>
</html>
