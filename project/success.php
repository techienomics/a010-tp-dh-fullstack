<?php
	$pageTitle = 'Register Success';
	require_once 'includes/head.php';
	require_once 'includes/navbar.php';
	require_once 'includes/register-controller.php'; 	// llama a las funciones controladoras
	$myUsers = getAllUsers(); // myDebug($myUsers);
?>



	<div class="container">
		<?php if ($myUsers) : ?>
			<br>
			<h2 class="alert alert-success">Registro Existoso</h2>
			<h3>Los usuarios registrados son:</h3>
			<ul>
				<?php foreach ($myUsers as $oneUser): ?>
					<li>
						<img src="data/avatars/<?= $oneUser['avatar'] == '' ? 'default.png' : $oneUser['avatar'] ?>" width="100"> <br>
						<em><?= $oneUser['name'] ?></em> /
						<a href="mailto: <?= $oneUser['email'] ?>"><?= $oneUser['email'] ?></a> /
						<b><?= $oneUser['country'] ?></b>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php else : ?>
			<br>
			<h2 class="alert alert-danger">No hay usuarios registrados</h2>
		<?php endif; ?>
	</div>

<?php
	require_once "includes/footer.php";
?>