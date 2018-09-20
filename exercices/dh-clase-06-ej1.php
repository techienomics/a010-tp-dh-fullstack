<?php 
/* PHP EMBEBIDO - Curso Desarrollo Web Full Stack Clase 06 (PHP)

1. Partiendo de un archivo con la línea $titulo = 'Tutorial PHP', imprimir esta variable como título de un documento HTML. Esto se debe ver similar a:

Tutorial PHP
PHP es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.
*/

echo "<h2> Ejercicio 1 - Clase 6 PHP </h2>";
echo "<br>Imprime (print_r) lo solicitado: <br>";
echo "<pre>";

?>


<?php $titulo = 'Tutorial PHP'
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Embebed PHP Tutorial</title>
	</head>

	<body>
		
		<h1> <?php echo $titulo; ?> </h1>
		<p>PHP es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.
		</p>
	</body>

</html>
