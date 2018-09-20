<?php

declare(strict_types=1);

// -----------------------------------------------	
// Clase  PHP -- Fullstack - DigitalHouse
// ----------------------------------------------	

echo '<pre>';
echo "<h2> Ejercicio 1 - Clase 14 PHP </h2>";
echo '</pre>';

#1. a. Crear una clase abstracta Usuario, con los siguientes atributos: Nombre completo, Fecha de nacimiento, Email, Documento, País de nacimiento.
# b. Para la clase anterior, crear un constructor que pida los siguientes parámetros a ser asignados en sus respectivos atributos: Nombre completo, Fecha de nacimiento (String - formato DD/MM/AAAA).
# c. Crear los correspondientes setter y getters, para todos los atributos que así lo demanden.
# d. Implementar una interfaz Presentable, la cual declare el método presentarse.
# e. Crear dos clases nuevas Docente y Alumno, que extiendan de Usuario e implementen Presentable.
/* f. Las dos clases anteriormente creadas deberán definir el método presentarse, así:
    Para el Alumno. "Hola mi nombre es ____, soy alumno de FullStack en Digital House y tengo ___ años".
    Para el Docente. "Hola soy ____, tu docente de FullStack aquí en Digital House. Tengo ___ años".
A tener en cuenta: ¿cómo podemos hacer para definir cuántos años tiene una persona? Ejemplo, si nací en 1990, actualmente tengo 28 años. ¿Qué operación hice para llegar a este cifra? Fácil: 2018 - 1990 = 28. Ahora bien ¿cómo podemos hacer que nuestro método presentarse haga esto? Tip: prueba hacer echo de esto Date('Y').*/

interface Introduce {
	public function introduceOneself():string;
}

abstract class User implements Introduce {

	//------------- Atributes -----------------------------------------------------	
	protected $userFullName;
	protected $userBirthDay;
	protected $userEmail;
	protected $userGovtId;
	protected $userCountryBirth;
	protected $userAge;

	//------------- Constructor ---------------------------------------------------
	public function __construct (string $name, string $email, string $date = NULL, string $govID = NULL, string $ctryBirth = NULL) {  #devuelve un usuario que no puede ser nulo, al menos el email
		$this->userFullName = $name;
		$this->userBirthDay = $date;
		$this->userEmail = $email;
		$this->userGovtId = $govID;
		$this->userCountryBirth = $ctryBirth;
		$userAge = $this->age();
	}


	//------------- Getters -------------------------------------------------------
	public function getUserFullName():?string {
		return $this->userFullName;
	}

	public function getUserBirthDay():?string {
		return $this->userBirthDay;
	}

	public function getUserEmail():string {
		return $this->userEmail;
	}	

	public function getUserGovtId():?string {
		return $this->userGovtId;
	}

	public function getCountryBirth():?string {
		return $this->userCountryBirth;
	}

	//------------- Setters --------------------------------------------------------
	public function setUserFullName():?string {
		return $this->userFullName = $userFullName;
	}

	public function setUserBirthDay():?string {
		return $this->userBirthDay = $userBirthDay;
	}

	public function setUserEmail():string {
		return $this->userEmail = $userEmail;
	}	

	public function setUserGovtId():?string {
		return $this->userGovtId = $userGovtId;
	}

	public function setCountryBirth():?string {
		return $this->userCountryBirth = $userCountryBirth;
	}

	//------------- Interface related Methods --------------------------------------
	public function introduceOneself():string {
		return "";
	}

	//------------- Other Methods --------------------------------------------------
	public function age():?int {
		$userBirth = explode('/',$this->userBirthDay);
		$userYearOfBirth = $userBirth[2];
		$userAge =  date('Y') - $userYearOfBirth;
		return $this->userAge=$userAge;
	}


}

class Teacher extends User implements Introduce {

	public function introduceOneself():string {
		parent::introduceOneself();
		return "Hola, soy {$this->userFullName}, tu docente de FullStack aquí en Digital House.\nTengo {$this->age()} años.";
	}

}

class Student extends User implements Introduce {

	public function introduceOneself():string {
		parent::introduceOneself();
		return "Hola, mi nombre es {$this->userFullName}.\nSoy alumno de FullStack en Digital House y tengo {$this->age()} años.";
	}

}


$studentOne = new Student('Victor','sad@fafa.com','07/01/2000','AC32141','Argentina');
$teacherOne = new Teacher('Javi','batmancatenacho@gmail.com','07/07/1990','ewq2141','GoticCity');

echo '<pre> Ejemplo de un objeto Estudiante';
print_r($studentOne);
echo '</pre>';

echo '<pre>';
print_r($studentOne->introduceOneself());
echo '</pre>';

echo '<pre> Ejemplo de un objeto Profesor';
print_r($teacherOne);
echo '</pre>';

echo '<pre>';
print_r($teacherOne->introduceOneself());
echo '</pre>';

#debuging

/*
	if ($_POST) {

		echo '<pre>';
		print_r($_POST);
		echo '</pre>';

	}
*/

echo '<pre>';
echo "<h2> Ejercicio 2 - Clase 14 PHP </h2>";
echo '</pre>';

#2. 
#a. Ahora vamos a generar nuestra UI para poder instanciar nuestras clases, para ello vamos a generar un formulario que viaje por POST con los siguientes campos: Nombre Persona (input), Fecha de nacimiento (input), Tipo, Docente (radiobutton), Alumno (radiobutton)
#b. Hecho esto, la idea es que al enviar datos desde el formulario se instancie un objeto de la clase Alumno o de la clase Docente, según corresponda. Y que luego dicho objeto pueda ejecutar su método presentarse. Para ver en pantalla el mensaje correspondiente.

if ($_POST) {
	$oneRegister = new $_POST['typeRegister']($_POST['name'],$_POST['email'],$_POST['date'],$_POST['govID'],$_POST['ctryBirth']);
	echo '<pre>';
	print_r($oneRegister);
	print_r($oneRegister->introduceOneself());
	echo '</pre>';
}


?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>

	<body>
		
	    <form name="prueba" method="post" action="">
	        <label>Nombre Completo: </label><input type="text" name="name"><br>
	        <label>Correo Electronico: </label><input type="email" name="email"><br>
	        <label>Fecha de Nacimiento: </label><input type="text" name="date"><br>
	        <label>Documento Nacional #: </label><input type="text" name="govID"><br>
	        <label>Pais de Nacimiento: </label><input type="text" name="ctryBirth"><br>
	        <label for="typeRegister">Tipo de Registro</label>
		        <select name="typeRegister">
		          <option value="Teacher">Teacher</option>
		          <option value="Student">Student</option>
		        </select><br>
		    <input type="submit"value="Enviar">
	    </form>

	</body>

</html>