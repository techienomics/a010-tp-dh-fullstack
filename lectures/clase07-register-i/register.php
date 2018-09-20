<?php
	// llamamos a las funciones controladoras
	require_once 'register-controller.php';

	$pageTitle = 'Register';
	require_once 'includes/head.php';
	$countries = [
		'ar' => 'Argentina',
		'bo' => 'Bolivia',
		'br' => 'Brasil',
		'co' => 'Colombia',
		'cl' => 'Chile',
		'ec' => 'Ecuador',
		'pa' => 'Paraguay',
		'pe' => 'Perú',
		'uy' => 'Uruguay',
		've' => 'Venezuela',
	];

	// Variables para persistir
	$userFullName = '';
	$userEmail = '';
	$userCountry = '';

	if ($_POST) {

		// Persistencia de Datos
		$userCountry = $_POST['userCountry'];
		$userFullName = trim($_POST['userFullName']);
		$userEmail = trim($_POST['userEmail']);

		$errors = registerValidate($_POST);

		if ( count($errors) <= 0 ) {

			saveUser($_POST);

			header("location: success.php"); exit;
		}
	}
?>
	<?php require_once 'includes/navbar.php'; ?>

	<!-- Register-Form -->
	<div class="container" style="margin-top:30px; margin-bottom: 30px;">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<h2>Formulario de registro</h2>
				<form method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Nombre completo:</b></label>
								<input
									type="text"
									name="userFullName"
									class="form-control"
									value="<?= $userFullName; ?>"
								>
								<?php if (isset($errors['fullName'])): ?>
									<div class="alert alert-danger">
										<?= $errors['fullName'] ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Correo electrónico:</b></label>
								<input
									type="text"
									name="userEmail"
									class="form-control"
									value="<?= $userEmail; ?>"
								>
								<?php if (isset($errors['email'])): ?>
									<div class="alert alert-danger">
										<?= $errors['email'] ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Password:</b></label>
								<input type="password" name="userPassword" class="form-control">
								<?php if (isset($errors['password'])): ?>
									<div class="alert alert-danger">
										<?= $errors['password'] ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Repetir Password:</b></label>
								<input type="password" name="userRePassword" class="form-control">
								<?php if (isset($errors['password'])): ?>
									<div class="alert alert-danger">
										<?= $errors['password'] ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>País de nacimiento:</b></label>

								<?php foreach ($countries as $code => $country): ?>

								<?php endforeach; ?>

								<select class="form-control" name="userCountry">
									<option value="">Elegí un país</option>
									<?php foreach ($countries as $code => $country): ?>
										<option
											<?= $code == $userCountry ? 'selected' : '' ?>
											value="<?= $code ?>"><?= $country ?></option>
									<?php endforeach; ?>
								</select>
								<?php if (isset($errors['country'])): ?>
									<div class="alert alert-danger">
										<?= $errors['country'] ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label><b>Imagen de perfil:</b></label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="userAvatar">
									<label class="custom-file-label">Choose file...</label>
									<div class="invalid-feedback"></div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<button type="submit" class="btn btn-primary">Registrarse</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //Register-Form -->

<?php require_once 'includes/footer.php'; ?>
