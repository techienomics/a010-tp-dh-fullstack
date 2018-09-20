<?php
	require_once 'includes/register-controller.php';

	$expirationTime = time() + 10;
	setcookie('temporal', 'durará por 30mins', $expirationTime);
	setcookie('temporal', '', time() - 10);

	myDebug($_COOKIE);

?>
