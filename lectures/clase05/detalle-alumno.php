<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Detalle de alumnos</title>
	</head>
	<body>
		<?php
			echo "<pre>";
			var_dump($_REQUEST);
			echo "</pre>";
			$alumnos = [
				[
					'nombre' => 'José',
					'materia' => 'Matemáticas',
				],
				[
					'nombre' => 'Juana',
					'materia' => 'Ciencias',
				],
				[
					'nombre' => 'Maria',
					'materia' => 'Música',
				],
				[
					'nombre' => 'Pedro',
					'materia' => 'Física',
				],
			];

			if (isset($_GET['id'])) {
				$idAlumno = $_GET['id'];
				echo "<h3>Entré por \$_GET</h3>";
				if ($idAlumno < count($alumnos)) {
					$alumno = $alumnos[$idAlumno];
					echo "<h1>" . $alumno['nombre'] ."</h1>";
					echo "<h5>" . $alumno['materia'] ."</h5>";
				} else {
					echo "<h3>Sorry no hay alumnos por ese ID</h3>";
				}
			}


			if (isset($_POST['id'])) {
				echo "<h3>Entré por \$_POST</h3>";
				if ($_POST['id'] < count($alumnos)) {
					echo "<h1>" . $alumnos[$_POST['id']]['nombre'] ."</h1>";
					echo "<h5>" . $alumnos[$_POST['id']]['materia'] ."</h5>";
				} else {
					echo "<h3>Sorry no hay alumnos por ese ID</h3>";
				}
			}

		?>
	</body>
</html>
