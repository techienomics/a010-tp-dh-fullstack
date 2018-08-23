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
// Clase 3 PHP - Fullstack - DigitalHouse
// -----------------------------------------------

// Ejercicio 1 - Clase 3 PHP
// Utilizando un for imprimir los números del 1 al 100.

echo "<br>" . "<br>";
echo "<h2> Ejercicio 1 - Clase 3 PHP </h2>";
echo "<br>" . "<br>";

for ($i=1; $i <=100 ; $i++) { 
       echo $i .'<br>';
}

// Ejercicio 2 - Clase 3 PHP
// Modificar el ejercicio anterior para que en vez de frenar en el número 100 frene en un número generado aleatoriamente entre 0 y 100. (Utilizar funcion rand($x,$y), https://www.w3schools.com/php/func_math_rand.asp )

echo "<br>" . "<br>";
echo "<h2> Ejercicio 2 - Clase 3 PHP </h2>";
echo "<br>" . "<br>";

for ($i=1; $i <= rand(0,100) ; $i++) { 
       echo $i .'<br>';
}

// Ejercicio 3 - Clase 3 PHP
// Mostrar la tabla de multiplicar del 2 (hasta 2 x 10) utilizando un for.


echo "<br>" . "<br>";
echo "<h2> Ejercicio 3 - Clase 3 PHP </h2>";
echo "<br>" . "<br>";

for ($i=0; $i <=5 ; $i++) { 
       echo $i * 2 .'<br>';
}

// Ejercicio 4 - Clase 3 PHP
// Un bucle while que cuente desde 100 hasta 85 (fíjate que en este caso es decreciente).

echo "<br>" . "<br>";
echo "<h2> Ejercicio 4 - Clase 3 PHP </h2>";
echo "<br>" . "<br>";

$i = 100;
while ($i > 84) {
    echo $i . '<br>';
     $i--;
}

// Ejercicio 5 - Clase 3 PHP
// Un bucle while que a partir de una variable $contador que comience en 1 vaya aumentando hasta llegar a 5, y que muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.

echo "<br>" . "<br>";
echo "<h2> Ejercicio 5 - Clase 3 PHP </h2>";
echo "<br>" . "<br>";

$contador = 1;
while ($contador <= 5) {
    echo $contador * 2 . '<br>';
     $contador++;
}

// Ejercicio 6 - Clase 3 PHP
// Utilizando un while haremos un script que tire una moneda (seleccionará un número al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.

echo "<br>" . "<br>";
echo "<h2> Ejercicio 6 - Clase 3 PHP </h2>";
echo "<br>" . "<br>";

$cara = 0;
$tiros = 0;
$moneda = 0;

while ($cara <= 5) {
    $moneda = rand(0,1);
    if ($moneda == 1){    # ($moneda == 1) ? $cara++ : $cara;
      $cara++;  
    }
    $tiros++;
}

echo "Se necesitaron $tiros tiros para obtener 5 caras.<br> Probabilidad = " . ($cara / $tiros) ."<br>"; 



echo "<h3>version resuelta por javier<br>6. Utilizando un while haremos un script que tire una moneda (seleccionará un número al azar que puede ser 0 o 1) hasta que saque 5 veces cara (el número 1). Al terminar, debe imprimir cuántos tiros de monedas llevó obtener 5 veces cara.</h3>";

$contCaras = 0;
$intentos = 0;

while ($contCaras < 5) {
    $moneda = rand(0, 1);
    $intentos++;
    echo "(Moneda: $moneda -- Intentos: $intentos) <br>";
    $contCaras += $moneda;
}

echo "<h1>Se tomaron $intentos intentos para sacar 5 veces cara </h1>";

$contador = 0;
while ($contador > 0) {
    echo "$contador <br>";
    $contador--;
}

do {
    echo "$contador <br>";
    $contador--;
} while ($contador > 0);

for ($i = 1; $i <= 10 ; $i++) {
    $palabra = $i == 1 ? "vez" : "veces";
    echo "Van $i $palabra <br>";
}

$alumnos = ["Juana", "Mariana", "Pedro", "Andrea"];

for ($i = 0; $i < count($alumnos); $i++) {
    if ($alumnos[$i] == "Pedro") {
        break;
    }
    echo "$alumnos[$i] <br>";
}

// Ejercicio 7 - Clase 3 PHP
// Utilizando un do/while realizar un script que tire la moneda hasta que se obtenga cara (el número 1). Al final del programa imprimir cuántos tiros de moneda llevó.

echo "<br>" . "<br>";
echo "<h2> Ejercicio 7 - Clase 3 PHP </h2>";
echo "<br>" . "<br>";

$cara = 0;
$tiros = 0;
$moneda = 0;

do {
    $moneda = rand(0,1);
    if ($moneda == 1){
      $cara++;
    }
    $tiros++;
} while ($cara == 1);

echo "Se necesitaron $tiros tiros para obtener 1 cara.<br> Probabilidad = " . ($cara / $tiros) ."<br>"; 


#---------------------------------------------------
// Practica Previa sobre Arrays

echo "<br><br>";
echo "<h3> Practica Previa sobre Arrays </h3>";
echo "<br><br>";

$spiceGirls = array('Baby Spice','Scary Spice','Ginger Spice','Posh Spice','Sporty Spice'); 
                #using lenguaje constructor array(), used to represent literal arrays, and not a regular function.
$spiceGirls2 = ['Baby Spice','Scary Spice','Ginger Spice','Posh Spice','Sporty Spice']; 
                #short syntax array
$spiceGirls3 = ['Baby Spice' => 1, 'Scary Spice' => 2, 'Ginger Spice' => 3, 'Posh Spice' => 4, 'Sporty Spice' => 5];
                #'short syntax associative array'.

#Baby Spice Mel B, Scary Spice Geri, Ginger Spice (la pelirroja); Victoria, Posh Spice (la elegante) y Melanie C, Sporty Spice (la deportista).

echo '<pre>';
print_r($spiceGirls);
echo '<pre>';

echo '<pre>';
print_r($spiceGirls2);
echo '<pre>';

echo '<pre>';
print_r($spiceGirls3);
echo '<pre>';


// Ejercicio 8 - Clase 3 PHP
// Definir un array con 5 strings que sean nombres.

echo "<br><br>";
echo "<h2> Ejercicio 8 - Clase 3 PHP </h2>";
echo "<br><br>";

$spiceGirls = array('Baby Spice','Scary Spice','Ginger Spice','Posh Spice','Sporty Spice'); 
$colors = array('rojo', 'azul', 'verde', 'amarillo');

$lenght=count($spiceGirls);

#Recorrer este array para imprimir cada uno de los nombres en pantalla.

# Resolver este problema con un for.

echo "<br>Imprime usando for: <br>";

for ($i=0; $i < $lenght ; $i++) { 
    echo $spiceGirls[$i] . '<br>';
}

# Resolver este problema con while.

echo "<br>Imprime usando while: <br>";

$i = 0;
while ($i < $lenght) {
    echo $spiceGirls[$i] . '<br>';
    $i++;
}

# Resolver este problema con un do/while.

echo "<br>Imprime usando do/while: <br>";

$i = 0;
do {
    echo $spiceGirls[$i] . '<br>';
    $i++;
} while ($i < $lenght);

# Resolver este problema con un foreach.

echo "<br>Imprime usando foreach: <br>";

foreach ($spiceGirls as $singer) {
    echo "$singer <br>";
}

// Ejercicio 9 - Clase 3 PHP
// Definir un array con 10 números aleatorios entre 0 y 10.

echo "<br><br>";
echo "<h2> Ejercicio 9 - Clase 3 PHP </h2>";
echo "<br><br>";

echo "<br>Mediante el metodo for, se define un array con 10 numeros aleatorios entre 0 y 10:<br>";

for ($i=0; $i < 10 ; $i++) { 
    $arrayAleatorio[$i]=rand(0,10);
}

echo "<br>Mediante print_r() se imprime el arrayAleatorio definido para control posterior:<br>";
echo '<pre>';
print_r($arrayAleatorio);
echo '<pre>';

// Recorrer este array para imprimir todos los números. La ejecución debe terminarse si alguno de los números encontrados es un 5 (Se debe imprimir “Se encontró un 5!”)

// Resolver este problema con un for.

echo "<br>Mediante el metodo for, se imprime el arrayAleatorio definido, parando si encuentra un 5:<br>";

for ($i=0; $i < 10 ; $i++) {
    if ($arrayAleatorio[$i] == 5) {
        echo 'Se encontró un 5!<br>';
        break;
     } else{
        echo $arrayAleatorio[$i] . '<br>';
     }
}

// Resolver este problema con un while.

echo "<br>Mediante el metodo while, se imprime el arrayAleatorio definido, parando si encuentra un 5:<br>";

$i = 0;
while ($i < 10) {
    if ($arrayAleatorio[$i] == 5) {
        echo 'Se encontró un 5!<br>';
        break;
     } else{
        echo $arrayAleatorio[$i] . '<br>';
     }
    $i++;
}

// Resolver este problema con un do/while.

echo "<br>Mediante el metodo do-while, se imprime el arrayAleatorio definido, parando si encuentra un 5:<br>";

$i = 0;
do {
    if ($arrayAleatorio[$i] == 5) {
        echo 'Se encontró un 5!<br>';
        break;
     } else{
        echo $arrayAleatorio[$i] . '<br>';
     }
    $i++;
} while ($i < 10);


// Ejercicio 10 - Clase 3 PHP
/* Utilizando la funcion “Range”(http://php.net/manual/en/function.range.php) crear un rango de letras (de la 'A' hasta la 'O'), imprimir un valor que diga “En la posición [index] se encuentra el valor [value]” donde [value] se reemplazará por cada valor del array y [index] representa el índice.
*/

echo "<br><br>";
echo "<h2> Ejercicio 10 - Clase 3 PHP </h2>";
echo "<br><br>";


echo "<br>Imprime el foreach de un rango de 'a' a 'o' mientras construye el array 'letter': <br>";
foreach (range('a', 'o') as $i) {
    $letter[]=$i;
    echo $i;
}

echo "<br>";
echo "<br>Imprime 'letter',  el array resultante de foreach de un rango de 'a' a 'o' :<br>";
echo '<pre>';
print_r($letter);
echo '<pre>';

$letter2 = array_combine(range(0,14),range('a', 'o'));

echo "<br>Mediante print_r() se imprime el array 'letter2' creado mediante array_combine: <br>";
echo '<pre>';
print_r($letter2);
echo '<pre>';


echo "<br>Imprime el foreach pedido por la consigna: <br>";
echo '<pre>';

foreach ($letter2 as $key => $value) {
    echo "En la posición $key se encuentra el valor $value. <br>";
}unset($value);

echo '<pre>';

// Ejercicio 11 - Clase 3 PHP
/* Definir una variable $mascota que sea un array asociativo.
En el índice animal debe decir qué animal es. En el índice edad debe decir la edad.
En el índice altura debe decir la altura. En el índice nombre debe decir el nombre
*/

echo "<br><br>";
echo "<h2> Ejercicio 11 - Clase 3 PHP </h2>";
echo "<br><br>";

$mascota = [
        "animal" => ["Perro"],
        "edad" => [4],
        "altura" => [0.3],
        "nombre" => ["Pirulo"]
];

$mascota2 = [
        "animal" => "Perro",
        "edad" => 4,
        "altura" => 0.3,
        "nombre" => "Pirulo"
];

echo "<br>Mediante print_r() se imprime el array 'mascota' para control: <br>";
echo '<pre>';
print_r($mascota);
echo '<pre>';


echo "<br>Mediante print_r() se imprime el array 'mascota2' para control: <br>";
echo '<pre>';
print_r($mascota2);
echo '<pre>';


// Ejercicio 12 - Clase 3 PHP
/* 12. Recorrer los valores del array con un foreach imprimiendo (como ejemplo):
animal: perro
edad: 5
altura: 0,60
nombre: Sonic
*/

echo "<br><br>";
echo "<h2> Ejercicio 12 - Clase 3 PHP </h2>";
echo "<br><br>";

echo "<br>Imprime el foreach pedido por la consigna: <br>";
echo '<pre>';

# fijarse que si se hace cn $mascota se rompe porque se hace echo de un array
foreach ($mascota2 as $key => $value) {
    echo "$key: $value<br>";
}unset($value);

echo '<pre>';


// Ejercicio 13 - Clase 3 PHP
/* 13. Partiendo de un archivo con la siguiente variable definida:

$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

Crear un script que muestre el nombre de la capital y el país desde la variable $ceu.
Opcional: Ordenar la lista por el nombre del país.
        Ejemplo de output:
        La capital de Holanda es Amsterdam.
        La capital de Grecia es Atenas.
        La capital de Alemania es Berlín.
*/

echo "<br><br>";
echo "<h2> Ejercicio 13 - Clase 3 PHP </h2>";
echo "<br><br>";

$ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=> "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" => "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin", "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam", "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw") ;

echo "<br>Imprime el foreach pedido por la consigna: <br>";
echo '<pre>';

# sort($ceu); #sort elimina la asociacion del indice y el valor
asort($ceu); #asort mantiene la asociacion del indice y el valor
#array_sort($ceu,'Italia');

foreach ($ceu as $country => $city) {
    echo "La capital de $country es $city.<br>";
}unset($city);

echo '<pre>';

/*
function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}
*/


// Ejercicio 14 - Clase 3 PHP
/* 14. Partiendo de un archivo con la siguiente variable definida:
$ceu = [
        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
        "Francia" => ["Paris", "Nantes", "Lyon"],
        "Italia" => ["Roma", "Milan", "Venecia"],
        "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];
Crear un script que muestre el nombre de cada país y sus ciudades desde la variable $ceu con el siguiente formato:
        Las ciudades de Argentina son:
Buenos Aires
Córdoba
Santa Fé
        Las ciudades de Brasil son:
Brasilia
Rio de Janeiro
Sao Pablo
*/

echo "<br><br>";
echo "<h2> Ejercicio 14 - Clase 3 PHP </h2>";
echo "<br><br>";

$ceu = [
        "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
        "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
        "Francia" => ["Paris", "Nantes", "Lyon"],
        "Italia" => ["Roma", "Milan", "Venecia"],
        "Alemania" => ["Munich", "Berlin", "Frankfurt"]
];

foreach ($ceu as $pais => $ciudades) {
    echo "<br>Las ciudades de $pais son: <br>";
    foreach ($ciudades as $ciudad) {
            echo "$ciudad <br>";
    }
}


// Ejercicio 15 - Clase 3 PHP
/* 15. A partir del ejercicio anterior:
Agregarle a cada país un dato extra además de sus ciudades llamado esAmericano. Este valor debe ser true o false.
Hacer que la impresión anterior no muestre países que no sean Americanos.
IMPORTANTE: Para que esto funcione de manera prolija deberán crear un array asociativo por cada país en donde cada país tendrá los en la posición ciudades, sus ciudades y en la posición esAmericano un booleano conforme a si es o no americano.
*/

echo "<br><br>";
echo "<h2> Ejercicio 15 - Clase 3 PHP </h2>";
echo "<br><br>";

$ceu = [
        "Argentina" => [
                "esAmericano" => true,
                "ciudades"=> ["Buenos Aires", "Córdoba", "Santa Fé"],
        ],
        "Brasil"  => [
                "esAmericano" => true,
                "ciudades"=> ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        ],
        "Colombia" => [
                "esAmericano" => true,
                "ciudades"=> ["Cartagena", "Bogota", "Barranquilla"],
        ],
        "Francia" => [
                "esAmericano" => false,
                "ciudades"=> ["Paris", "Nantes", "Lyon"],
        ],
        "Italia" => [
                "esAmericano" => false,
                "ciudades"=> ["Roma", "Milan", "Venecia"],
        ],
        "Alemania" => [
                "esAmericano" => false,
                "ciudades"=> ["Munich", "Berlin", "Frankfurt"],
        ],
];

foreach ($ceu as $pais => $data) {
        if ($data["esAmericano"]){
            echo '<br>Las ciudades de ' . $pais . ' son: <br>';
            foreach ($data['ciudades'] as $ciudad) {
                    echo $ciudad . '<br>';
            }
        }
}

?>