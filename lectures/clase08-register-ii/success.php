<?php
	// llamamos a las funciones controladoras
	require_once 'register-controller.php';

	$pageTitle = 'Register Success';
	require_once 'includes/head.php';

	$myUsers = getAllUsers();
?>
	<?php require_once 'includes/navbar.php' ?>

	<div class="container">
		<h2>Registro Existoso</h2>
		<h3>Los usuarios registrados son:</h3>
		<ul>
			<?php foreach ($myUsers as $oneUser): ?>
				<li>
					<img src="data/avatars/<?= $oneUser['avatar'] ?>" width="100"> <br>
					<em><?= $oneUser['name'] ?></em> /
					<a href="mailto: <?= $oneUser['email'] ?>"><?= $oneUser['email'] ?></a> /
					<b><?= $oneUser['country'] ?></b>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>

<?php require_once 'includes/footer.php' ?>
