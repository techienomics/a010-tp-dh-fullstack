<?php
	$countries = [
		"ar" => "Argentina",
		"br" => "Brasil",
		"cl" => "Chile",
		"co" => "Colombia",
		"ve" => "Venezuela",
		"uy" => "Uruguay",
	];

	$characters = [
		[
			"name" => "Darth Vader",
			"image" => "images/dathvader.jpg",
		],
		[
			"name" => "Han Solo",
			"image" => "images/hansolo.jpg",
		],
		[
			'name' => 'Lando Calrissian',
			'image' => 'images/lando.jpg',
		],
		[
			"name" => "Leia Organa",
			"image" => "images/leia.jpg",
		],
		[
			"name" => "Luke Skywalker",
			"image" => "images/luke.jpg",
		],
		[
			"name" => "Senator Palpatine",
			"image" => "images/palpatine.jpg",
		],
		[
			'name' => 'Master Yoda',
			'image' => 'images/yoda.jpg',
		],
	];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>PHP embebido</title>
	</head>
	<body>
		<select name="countries">
			<?php foreach ($countries as $code => $country): ?>
				<option value="<?= $code ?>"> <?= $country ?> </option>
			<?php endforeach; ?>
		</select>

		<br><br>

		<?php foreach ($characters as $character): ?>
			<div>
				<h2> <?= $character['name'] ?> </h2>
				<img src="<?= $character['image'] ?>" width="100">
			</div>
		<?php endforeach; ?>

		<ul>
			<?php for ($i = 1; $i <= 10; $i++): ?>
				<li> <?= $i; ?> </li>
			<?php endfor; ?>
		</ul>
	</body>
</html>
