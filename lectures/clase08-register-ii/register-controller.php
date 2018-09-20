<?php
	// function myDebug
	function myDebug($dato, $type = NULL) {
		echo "<pre>";
		switch ($type) {
			case 'print_r':
				print_r($dato);
				break;
			case 'echo':
				echo $dato;
				break;
			default:
				var_dump($dato);
				break;
		}
		echo "</pre>";
		exit;
	}

	define('USER_IMAGE_PATH', dirname(__FILE__) . "/data/avatars/");

	// Validar el Register
	function registerValidate($formData, $image) {
		$errors = [];

		$name = trim($formData['userFullName']);
		$email = trim($formData['userEmail']);
		$password = trim($formData['userPassword']);
		$rePassword = trim($formData['userRePassword']);
		$country = trim($formData['userCountry']);
		$avatar = $_FILES[$image];

		if ( empty($name) ) {
			$errors['fullName'] = 'Escribí tu nombre completo';
		}

		if ( empty($email) ) {
			$errors['email'] = 'Escribí tu correo electrónico';
		} else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			$errors['email'] = 'Escribí un correo válido';
		} else if ( emailExist($email) ) {
			$errors['email'] = 'Ese email ya fue registrado';
		}

		if ( empty($password) || empty($rePassword) ) {
			$errors['password'] = 'La contraseña no puede estar vacía';
		} elseif ( $password != $rePassword) {
			$errors['password'] = 'Las contraseñas no coinciden';
		} elseif ( strlen($password) < 4 || strlen($rePassword) < 4 ) {
			$errors['password'] = 'La contraseña debe tener más de 4 caracteres';
		}

		if ( empty($country) ) {
			$errors['country'] = 'Elegí un país';
		}

		if ($avatar['error'] !== UPLOAD_ERR_OK) {
			$errors['image'] = 'Subí una imagen';
		} else {
			$ext = strtolower(pathinfo($avatar['name'], PATHINFO_EXTENSION));

			if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg') {
				$errors['image'] = "Formatos admitidos: JPG o PNG";
			}

		}

		return $errors;
	}

	// Función Crear Usuarios
	function userCreator($data, $image){
		$user = [
			'id' => setId(),
			'name' => $data['userFullName'],
			'email' => $data['userEmail'],
			'password' => password_hash($data['userPassword'], PASSWORD_DEFAULT),
			'country' => $data['userCountry'],
			'avatar' => $image,
		];

		return $user;
	}

	// Función Guardar Usuario
	function saveUser($dataDePost, $imageName){
		$finalUser = userCreator($dataDePost, $imageName);

		$userInJsonFormat = json_encode($finalUser);

		file_put_contents('data/users.json', $userInJsonFormat . PHP_EOL, FILE_APPEND);
	}

	// Función traer todos los Usuarios
	function getAllUsers() {
		$allUsersString = file_get_contents('data/users.json');

		$usersInArray = explode(PHP_EOL, $allUsersString);
		array_pop($usersInArray);

		$finalUsersArray = [];

		foreach ($usersInArray as $oneUser) {
			$finalUsersArray[] = json_decode($oneUser, true);
		}

		return $finalUsersArray;
	}

	// Función Generar ID
	function setId(){
		$allUsers = getAllUsers();

		if( count($allUsers) == 0 ) {
			return 1;
		}

		$lastUser = array_pop($allUsers);

		return $lastUser['id'] + 1;
	}

	// Función si existe el email
	function emailExist($email) {
		$allUsers = getAllUsers();

		foreach ($allUsers as $oneUser) {
			if ($email == $oneUser['email']) {
				return true;
			}
		}

		return false;
	}

	function saveImage($image) {
		$imgName = $_FILES[$image]['name'];
		$ext = pathinfo($imgName, PATHINFO_EXTENSION);

		$file = $_FILES[$image]["tmp_name"];

		$imgFinalName = uniqid('user_img_') . "." . $ext;

		$finalFile = USER_IMAGE_PATH . $imgFinalName;

		move_uploaded_file($file, $finalFile);

		return $imgFinalName;
	}
?>
