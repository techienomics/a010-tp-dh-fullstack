<?php
	require_once 'Producto.php';

	if ($_POST) {
		$pdto = new Producto($_POST['pdtoName'], $_POST['pdtoPrice']);
		$thePdto = $pdto->getPdtoData();
	}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP</title>
	</head>
	<body>
		<h1 style="font-size: 60px">
			<?php
				if (isset($thePdto)) {
					echo $thePdto;
				}
			?>
		</h1>
		<form method="post">
			<p>Nombre del producto</p>
			<input type="text" name="pdtoName">
			<p>Precio del producto</p>
			<input type="text" name="pdtoPrice">
			<br>
			<br>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>
