<?php
	require_once 'Classes/User.php';

	$batman = new User('Batman Roberto');

	$wonderWoman = new User('Clara Maria');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Usuarios</title>
	</head>
	<body>
		<h2><?php echo "{$batman->sayHello()}" ?></h2>
		<h2><?php echo "{$wonderWoman->sayHello()}" ?></h2>
	</body>
</html>