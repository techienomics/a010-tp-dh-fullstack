<?php
	$numeroMagico = 1981;

	function mayor ($num1, $num2, $num3 = NULL) {
		if ($num3 == NULL || !is_numeric($num3)) {
			global $numeroMagico;
			$num3 = $numeroMagico;
		}
		return $num1 > $num2 ? ($num1 > $num3 ? $num1 : $num3) : ($num2 > $num3 ? $num2 : $num3);
	}

	echo mayor(10, 200, 30);
	echo "<hr>";
	echo mayor(10, 200);
	echo "<hr>";
	echo mayor(10, 200, "zz");
	echo "<hr>";

	function tabla($base, $limite){
		$resultado = [];

		for ($i = 1; $base * $i < $limite; $i++) {
			$resultado[] = "$base * $i = " . $base * $i;
		}
		return $resultado;
	}

	echo "<pre>";
	print_r(tabla(23, 150));
	echo "</pre>";

	function triangulo ($base, $altura) {
		return $base * ($altura / 2);
	}

	echo triangulo(6, 4);
	echo "<hr>";

	function rectangulo ($base, $altura) {
		return $base * ($altura);
	}

	echo rectangulo(6, 4);
	echo "<hr>";

	function cuadrado ($base) {
		return $base * $base;
	}

	echo cuadrado(6);
	echo "<hr>";

	function circulo ($radio) {
		return cuadrado($radio) * pi();
	}

	echo circulo(4);
	echo "<hr>";

?>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
