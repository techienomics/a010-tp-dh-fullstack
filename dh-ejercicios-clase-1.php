<style type="text/css">
	h2{
		color:red;
		background-color: pink;
		padding: 5px;
		margin:auto;
		display: inline-block;
	}
</style>

<?php


// -----------------------------------------------	
// Clase 1 PHP - Fullstack - DigitalHouse
// -----------------------------------------------

# Ejercicio 1 - Clase 1 PHP
/* 1. Crear las siguientes variables y mostrarlas utilizando echo y var_dump:
Una variable con un número entero.
Una variable con un número decimal.
Una variable con una cadena, utilizando comillas simples.
Una variable con una cadena, utilizando comillas dobles.
A la variable del punto a, asignarle una cadena de caracteres.
A la variable del punto c, asignarle un número decimal.
¿Qué sucede con el tipo de dato de las variables del punto e y punto f?
¿Qué sucede si a la variable del punto a le asignamos otro valor numérico, pero encerrado entre comillas?
*/

echo "<br><br>";
echo "<h2> Ejercicio 1 - Clase 1 PHP </h2>";
echo "<br><br>";

echo date("Y-m-d"); #trae la fecha del sistema
echo "<br>";

$nombre="Juanita"; echo $nombre;
$apellido='Gonzalez';
$casada=false;
$edad=25;
$alto=1.84;
echo "<br> <h1>" . $nombre . "</h1> <br>";
var_dump($nombre); echo "<br>";
var_dump($casada); echo "<br>";
var_dump($nombre, $casada); echo "<br>"; #se pueden incluir variables
var_dump($edad); echo "<br>";
var_dump($alto); echo "<br>";
$edad="convertirenstring";
var_dump($edad); echo "<br>";
$alto="2.43";
var_dump($alto); echo "<br>";
$a = array(1, 2, array("a", "b", "c"));
var_dump_pre($a);

#This function automatically adds the PRE tags around the var_dump output so you get nice formatted arrays.
function var_dump_pre($mixed = null) {
  echo '<pre>';
  var_dump($mixed);
  echo '</pre>';
  return null;
}

// no se muestran saltos de linea si no estan indicados
echo "Esto abarca
multiples líneas. Los saltos de línea también
se mostrarán. <br>";

// se muestran saltos de linea
echo "Esto abarca \n múltiples líneas. Los saltos de línea también \n se mostrarán. <br>";

echo "Para escapar caracteres se hace \"así\". <br>";


$baz = array("valor" => "foo");

echo "Esto es {$baz['valor']} !"; // Esto es foo !
echo "<br>";

// Las cadenas pueden ser pasadas individualmente como varios argumentos o
// concatenadas como un único argumento

echo 'Esta ', 'cadena ', 'está ', 'hecha ', 'con múltiple parámetros.', chr(10);
echo "<br>";
echo 'Esta ' . 'cadena ' . 'está ' . 'hecha ' . 'con concatenación.' . "\n";


//Un beneficio de pasar varios argumentos sobre la concatenación en echo es la precedencia del operador punto en PHP. Si se pasan varios argumentos, no serán necesarios paréntesis para forzar la precedencia:
echo "<br>";
echo "Sum: ", 1 + 2;
echo "<br>";
echo "Hello ", isset($name) ? $name : "John Doe", "!";
echo "<br>";

// Con la concatenación, el operador punto tiene mayor precedencia que los operadores de adición y ternario, por lo que se deben utilizar paréntesis para un correcto funcionamiento:
echo 'Sum: ' . (1 + 2);
echo "<br>";
echo 'Hello ' . (isset($name) ? $name : 'John Doe') . '!';

	
// Ejercicio 2 - Clase 1 PHP
/* 2. En base a la frase “Tres tristes tigres tragan trigo en un trigal”, crear una variable por cada palabra, donde el nombre de cada variable indique la posición de la palabra en la frase.
*/

echo "<br><br>";
echo "<h2> Ejercicio 2 - Clase 1 PHP </h2>";
echo "<br><br>";

$uno="Tres";
        $dos="tristes";
        $tres="tigres";
        $cuatro="tragan";
        $cinco="trigo";
        $seis="en";
        $siete="un";
        $ocho="trigal";
        echo $uno." ".$dos." ".$tres." ".$cuatro." ".$cinco." ".$seis." ".$siete." ".$ocho.".";
        echo "<br>";
        echo $uno." "." hermanos muertos en un "." ".$ocho."."; 



// Ejercicio 3 - Clase 1 PHP
/* 3. ¿Se puede asignar como nombre de la variable un número ($1, $2, $3)?
Asignarle a cada variable su posición numérica escrita como texto ($uno, $dos, $tres).
Imprimir la frase utilizando todas las variables que declaramos.
Imprimir una oración, utilizando al menos dos variables ya declaradas en el punto anterior.
*/

echo "<br><br>";
echo "<h2> Ejercicio 3 - Clase 1 PHP </h2>";
echo "<br><br>";

    $pame = [
            "nombre" => ["Pamela", "Eustacia"],
            "curso" => "Fullstack",
            "edad" => 83,
        ];

        echo "<pre>";
        echo print_r($pame);
        echo "<pre>";


// Ejercicio 4 - Clase 1 PHP
/* 4. Ejecutar el código del archivo ejercicio-clase-1.php (que está en el campus). Reemplazar en la llamada a la función tipoDato(dato) el parámetro "dato" por las distintas variables declaradas en nuestro archivo. Observar si el tipo de dato devuelve true o false.
*/

echo "<br><br>";
echo "<h2> Ejercicio 4 - Clase 1 PHP </h2>";
echo "<br><br>";


$variable01 = true;
$variable02 = false;
$variable03 = 0;
$variable04 = 1;
$variable05 = 6;
$variable06 = '';
$variable07 = "3";
$variable08 = "true";
$variable09 = 'false';
$variable10 = null;

function tipoDato($varN)
{
    if ( $varN == true ){
        echo 'el valor' . $varN . 'es verdadero.';
    }
    else {
        echo 'el valor' . $varN . 'es falso.';
    }
}

tipoDato($variable01);



/* Ejercicio 5 - Clase 1 PHP
/* 5. Crear un array numérico con 5 strings de animales diferentes. Luego de esto, ejecutar un var_dump para ver los resultados.
Agregar 2 nuevos animales al final del array, y ejecutar otro var_dump para ver los resultados.
Imprimimos la siguiente oración “Me gustan los animales: animal1, animal2, ...” con los 7 animales que declaramos.
Reemplazar el primer animal por uno nuevo, e imprimir el resultado.
Agregar un nuevo animal en la posición 100, e imprimir el resultado.
Agregar un nuevo animal en la posición 16, e imprimir el resultado.
*/

echo "<br><br>";
echo "<h2> Ejercicio 5 - Clase 1 PHP </h2>";
echo "<br><br>";


$zoo = [
    "Animal" => "Loro",
    "Animal" => "Leon",
    "Animal" => "Jirafa",
    "Animal" => "Cebra",
    "Animal" => "Rino",
];

echo '<pre>';
echo var_dump($zoo);
echo '<pre>';


$zoo2 = [
    "Mamiferos" => "Leon",
    "Peces" 	=> "Tiburon",
    				"Veterinarios",
];

echo '<pre>';
var_dump($zoo2);
echo '<pre>';


$zoo1 = [
    "Gallina",
    "Perro",
    "Gato",
    "Chancho",
    "Vaca",
];

echo '<pre>';
echo var_dump($zoo1);
echo '<pre>';

$zoo1[]='Cebra';
$zoo1[]='Tucan';

echo '<pre>';
echo var_dump($zoo1);
echo '<pre>';

$zoo1[0]='Ganso';
$zoo1[100]='Chivo';
$zoo1[16]='Cabra';

echo '<pre>';
echo var_dump($zoo1);
echo '<pre>';


/* Ejercicio 6 - Clase 1 PHP
6. Crear un array asociativo que contenga las siguientes propiedades de un auto: Marca, Modelo, Color, Año, y Patente. Luego de esto, ejecutar un var_dump para ver los resultados.
Agregar el nombre del dueño en la posición 0 del array, e imprimir el resultado.
Agregar la empresa aseguradora en la posición 14, e imprimir el resultado.
Agregar el número de la póliza de seguro en la posición “poliza”, e imprimir el resultado.
Modificar el número de patente, e imprimir el resultado.
Modificar el nombre del dueño, e imprimir el resultado.
*/

echo "<br><br>";
echo "<h2> Ejercicio 6 - Clase 1 PHP </h2>";
echo "<br><br>";




$cedulaauto = [
	'Marca' => 'Toyota',
	'Modelo' => 'Etios',
	'Color' => 'Naranja',
	'Año' => '2048',
	'Patente' => 'LAD435',
];

echo '<pre>';
echo var_dump($cedulaauto);
echo '<pre>';

$cedulaauto[0]='Menem';
$cedulaauto[14]='Allianz';
$cedulaauto['Poliza']='4322534';

echo '<pre>';
echo var_dump($cedulaauto);
echo '<pre>';

$cedulaauto['Patente']='JRE354';
$cedulaauto[0]='Kirchner';

echo '<pre>';
echo var_dump($cedulaauto);
echo '<pre>';


// Ejercicio 7 - Clase 1 PHP
/* 7. Declarar la variable $entero y $decimal, con sus respectivos valores.
Ejecutar un echo con la suma entre ambos valores.
Ejecutar un echo con la resta entre ambos valores.
Ejecutar un echo con la división entre ambos valores.
Ejecutar un echo con la multiplicación entre ambos valores.
Asignar en una nueva variable el resultado de la división de ambos valores y mostrar la nueva variable.
Sumarle 1 a $entero y $decimal.
Sumarle 5 a $entero y restarle 0.6 a $decimal.
En una misma línea, crear la variable $resultado, cuyo valor sea el resultado de multiplicar $entero * 2, sumarle $decimal, y dividir todo por la mitad de $entero.
*/

echo "<br><br>";
echo "<h2> Ejercicio 7 - Clase 1 PHP </h2>";
echo "<br><br>";


$entero = 4;
$decimal = 32.3;

echo "Suma: " . ($entero+$decimal) . '<br>';
echo "Resta: " . ($entero-$decimal) . '<br>';
echo "Division: " . ($entero/$decimal) . '<br>';
echo "Multiplicacion: " . ($entero*$decimal) . '<br>';

$division = $entero/$decimal;
echo $division . '<br>';

$entero = $entero + 1;
$decimal = $decimal + 1;

$entero = $entero + 5;
$decimal = $decimal - 0.6;

$resultado = ($entero * 2 + $decimal) / ($entero / 2);

echo $resultado . '<br>';
	

// Ejercicio 8 - Clase 1 PHP
/* 8. Declarar una variable con el string ‘Hola’, y otra variable con el string ‘mundo!’.
En una nueva variable, concatenar las variables creadas recientemente para formar “Hola mundo!”.
Crear una nueva variable que concatene la variable creada en el punto a, y concatenarle el string ‘Que bueno esta PHP’.
*/

echo "<br><br>";
echo "<h2> Ejercicio 8 - Clase 1 PHP </h2>";
echo "<br><br>";


$hi = 'Hola';
$who = 'Mundo!';

$salutation = $hi . ' ' . $who;
$salutation2 = $salutation . ' Que bueno esta PHP.';

echo $salutation . '<br>';
echo $salutation2 . '<br>';


?>