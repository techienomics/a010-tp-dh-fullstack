<?php
	session_start();
	$_SESSION['usuario'] = 'Juanita'; #harcodeado, deberia buscar en la base si existen los parametros ingresados y dar ok/nook al logueo
	header('location: index.php');
	exit;
?>