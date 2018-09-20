<style type="text/css">
	h2{
		color:red; background-color: pink; padding: 5px; margin:auto; display: inline-block;
	}
</style>

<?php

// -----------------------------------------------	
// Clase  PHP -- Fullstack - DigitalHouse
// -----------------------------------------------

# Ejercicio 1 - Clase 1 PHP
// 1. Persistencia de datos. Utilizando el formulario de la clase anterior lograr que todos los campos (menos las contraseñas) que completa el usuario persisten luego del envío de datos.

echo "<h2> Ejercicio 1 - Clase 7 PHP </h2>";
echo '<pre>';
echo '</pre>';

//2. JSON. 
// a. Crear una variable que contenga un array asociativo así:  $miArray[ 'a'=>1, 'b'=>2, 'c'=>'Yo <3 JSON']. Hacer echo de la variable $miArray.
$miArray = [
        
        'a'=> 1,
        'b'=> 2,
        'c'=>'Yo <3 JSON'
  ];


echo "<h2> Ejercicio 2.a - Clase 7 PHP </h2>";

echo "<br>Imprime (print_r) el array solicitado:<br>";
echo '<pre>';
print_r($miArray);
echo '</pre>';

echo "<br>Imprime (var_dump) el array solicitado:<br>";
echo '<pre>';
var_dump($miArray);
echo '</pre>';


echo "<br>Imprime (echo) el array solicitado usando foreach:<br>";
echo "<pre>";

foreach ($miArray as $key => $value) {
    if (is_array($value)) {
        echo "$key, ";
        foreach ($key as $value) {
            echo "$value, ";
        }
        echo "<br>";
    }else{
        echo "$key: $value <br>";
    }
}
echo "</pre>";


// b. Utilizando json_encode, convertir el array en un json y asignarlo a una nueva variable $miArrayJSON. Hacer echo de la variable $miArrayJSON.

$miArrayJSON = json_encode($miArray);

echo "<h2> Ejercicio 2.b - Clase 7 PHP </h2>";

echo "<br>Imprime (echo) el string JSON generado usando json_encode:<br>";
echo '<pre>';
echo $miArrayJSON;
echo '</pre>';


echo "<br>Imprime (var_dump) el string JSON generado usando json_encode:<br>";
echo '<pre>';
var_dump($miArrayJSON);
echo '</pre>';


// c. Crear una nueva variable $deJSONaArray que contenga el json_decode de la variable $miArrayJSON. Hacer echo de $deJSONaArray.

$deJSONaArray = json_decode($miArrayJSON);
$deJSONaArrayAsoc = json_decode($miArrayJSON, true);


echo "<h2> Ejercicio 2.c - Clase 7 PHP </h2>";

echo "<br>Imprime (var_dump) el objeto generado usando json_decode:<br>";

echo '<pre>';
var_dump($deJSONaArray);
echo '</pre>';

echo "<br>Imprime (var_dump) el array asociativo generado usando json_decode y parametro true:<br>";

echo '<pre>';
var_dump($deJSONaArrayAsoc);
echo '</pre>';


// d. Imprimir la frase “Yo <3 JSON | 1 | 2 |” utilizando los datos de la variable $deJSONaArray.

$miArrayJSON = json_encode($miArray);

echo "<h2> Ejercicio 2.d - Clase 7 PHP </h2>";

echo "<br>Imprime (echo) el string JSON solicitado:<br>";
echo '<pre>';
echo $miArrayJSON;
echo '</pre>';

echo "<br>Imprime (var_dump) el string JSON solicitado:<br>";
echo '<pre>';
var_dump($miArrayJSON);
echo '</pre>';


/*
# Ejercicio 3 - Clase 7 PHP
3. ARCHIVOS
a. Crear un archivo nuevo llamado archivos.php. Crear una función que compruebe si existe un archivo llamado texto.txt en el mismo directorio que archivos.php. En el caso que exista debe abrirlo para agregarle información ("¡Hola mundo!." 30 veces, 1 vez por renglón.) . En caso de que no exista, debe crearlo. En los dos casos, debe hacer echo de lo sucedido. Ej: Archivo inexistente se acaba de crear o Trabajo hecho.*/

echo "<h2> Ejercicio 3.a - Clase 7 PHP </h2>";
echo '<pre>';

$archivo = 'data/data.txt';

if (file_exists($archivo)) {
    echo "El archivo $archivo existe. A continuacion se agrega la informacion y se imprime: <br>";
} else {
    echo "El archivo $archivo no existe, por lo que se crea.
            \n A continuacion se agrega la informacion y se imprime: <br>";
}

for ($i=0; $i < 30; $i++) { 
    $nuevoSaludo = "Hola Mundo\n";
    file_put_contents($archivo, $nuevoSaludo, FILE_APPEND);
}

echo file_get_contents($archivo);
echo '</pre>';

// b. Mostrar los contenidos del archivo texto.txt leyendo todo el archivo junto. Mostrar los contenidos del archivo texto.txt leyendo e imprimiendo línea por línea.

echo "<h2> Ejercicio 3.b - Clase 7 PHP </h2>";
echo '<pre>';
echo '</pre>';



/* 4. ARCHIVOS JSON a. Crear un archivo categorias.json con los siguientes datos:

                {“id”: 1, “nombre”: “Deportes”}
                {“id”: 2, “nombre”: “Historia”}
                {“id”: 3, “nombre”: “Espectáculos”}
                {“id”: 4, “nombre”: “Geografía”}
                {“id”: 5, “nombre”: “Arte”} */

echo "<h2> Ejercicio 4.a - Clase 7 PHP </h2>";

$categories = [
        "1" => [
                'id' => 1,
                'nombre'=> 'Deportes',
        ],
        "2"  => [
                "id" => 2,
                "nombre"=> 'Historia',
        ],
        "3" => [
                "id" => 3,
                "nombre"=> 'Espectáculos',
        ],
        "4" => [
                "id" => 4,
                "nombre"=> 'Geografía',
        ],
        "5" => [
                "id" => 5,
                "nombre"=> 'Arte',
        ]
];

$categoriesJSON = json_encode($categories);

echo '<pre>';
var_dump($categoriesJSON);
echo '</pre>';


// b. Leer el archivo e imprimir un checkbox por cada categoría, capaz de ser enviado como array en un formulario. El value de cada checkbox será el id y el label mostrado a su derecha será el nombre proveniente del json como vemos en el en el array.

echo "<h2> Ejercicio 4.b - Clase 7 PHP </h2>";
echo '<pre>';
echo '</pre>';

?>

    <form action="">
        <div class='form-control'>
            <label for='userHobbies'>Detalle sus Pasatiempos*:</label><br>
            <?php foreach (json_decode($categoriesJSON,true) as $id => $nombre): ?>
            <input type="checkbox" name="userHobbies[]" value="<?php print_r($nombre['id']); ?>"><?php print_r($nombre['nombre']); ?><br>
            <?php endforeach; ?>
        </div>
    </form>


<?php

/* 5. Crear un nuevo archivo PHP.
a. Crear una función que defina una variable de tipo string y haga echo de dicha variable.
b. Hacer un echo del resultado de encriptar la variable con password_hash, utilizando como algoritmo: PASSWORD_DEFAULT.
*/

echo "<h2> Ejercicio 4.b - Clase 7 PHP </h2>";

function createString($min, $max) {
    $randomString = substr(md5(rand()), $min, $max);
    return $randomString;
}

$directPass = createString(0,7);
$hasPass = password_hash($directPass, PASSWORD_DEFAULT);

echo '<pre>';
echo $directPass;
echo $hasPass;
echo '</pre>';

/* 
Modificar register.php (puede ser el archivo utilizado las clases anteriores o el archivo del campus) para que:
Valide los datos del formulario.
En caso de error aclare los errores.
En caso de error rellene los campos que el usuario ya había completado.
Guarde los datos del usuario en un array. (la contraseña debe estar encriptada!)
Convierta el array en JSON.
Guarde el usuario en un archivo de texto en formato JSON.
En caso de éxito redirija a una página de éxito.

Nota: La registración es un proceso que se ejecuta muchas veces, por lo tanto, cada usuario nuevo, debe agregarse al final del archivo JSON. Es recomendable que el archivo contenga una estructura de tipo:

{...}
{...}
{...}
{...}
{...}

En donde {...} es el json_encode del array con los datos del usuario particular que se registra en el momento del guardado.

Modificar login.html/login.php (puede ser el archivo utilizado las clases anteriores o el archivo utilizado en el trabajo integrador) para que al enviar el formulario chequee en el archivo de texto generado en el punto anterior si el usuario existe o no. En caso de existir debe darle la bienvenida al usuario, en caso de que el usuario no sea encontrado,  debe indicar que el usuario no existe.

Modificar register.html/register.php para que al registrar un usuario valide en el archivo de texto que no exista un usuario igual (se puede validar por username, email o dni según el tipo de formulario).


*/

?>