<?php

// Calculadora PHP

  if (isset($_POST["enviando"])){

    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];
    calcular($operacion);
}

  function calcular($calc){
    if (!strcmp("Suma", $calc)) {
      global $numero1;
      global $numero2;
      $resultado =$numero1 + $numero2;
      echo "El resultado es: $resultado";
    } 
    if (!strcmp("Resta", $calc)) {
      global $numero1;
      global $numero2;
      echo "El resultado es:  " . ($numero1 - $numero2);
    } 
    if (!strcmp("Multiplicación", $calc)) {
      global $numero1;
      global $numero2;
      echo "El resultado es:  " . ($numero1 * $numero2);
    } 
    if (!strcmp("División", $calc)) {
      global $numero1;
      global $numero2;
      echo "El resultado es:  " . ($numero1 / $numero2);
    } 
    if (!strcmp("Módulo", $calc)) {
      global $numero1;
      global $numero2;
      echo "El resultado es:  " . ($numero1 % $numero2);
    } 
  }

?>
