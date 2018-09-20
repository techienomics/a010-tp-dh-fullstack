<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Alumnos</title>
	</head>
	<body>
		<?php
			echo "<pre>";
			var_dump($_REQUEST);
			echo "</pre>";
		?>
		<form action="detalle-alumno.php?sarasa=jajaja" method="post">
			<label>Ingresá un ID de alumno:</label>
			<input type="text" name="id">
			<button type="submit">Buscar</button>
		</form>
		<ul>
			<li><a href="detalle-alumno.php?id=0">Jose</a></li>
			<li><a href="detalle-alumno.php?id=1">Juana</a></li>
			<li><a href="detalle-alumno.php?id=2">Maria</a></li>
			<li><a href="detalle-alumno.php?id=3">Pedro</a></li>
		</ul>
	</body>
</html>
