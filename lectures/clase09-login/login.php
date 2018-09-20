<?php
	session_start();
	$_SESSION['usuario'] = 'Juanita';
	header('location: index.php');
	exit;