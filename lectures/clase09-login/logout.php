<?php
	session_start();
	session_destroy();
	setcookie('temporal', '', time() - 10);
	header('location: index.php'); 
	exit;