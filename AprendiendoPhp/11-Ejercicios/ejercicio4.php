<?php

/*Ejercico 4. Calculadora básica con número enviados por get*/

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if(isset($_GET['numero1'] ) && $_GET['numero2']){
//Cambiar tipo de dato (casteo o casting)
    $numero1 = (int) $_GET['numero1'];
    $numero2 = (int) $_GET['numero2'];
    $suma = $numero1 + $numero2;
    echo "La suma de $numero1 + $numero2, es: $suma "."</br>";
    $resta = $numero1 - $numero2;
    echo "La resta de $numero1 - $numero2, es: $resta "."</br>";
    $multiplicacion = $numero1 * $numero2;
    echo "La multiplicación de $numero1 * $numero2, es: $multiplicacion "."</br>";
    $divicion = $numero1 / $numero2;
    echo "La divición de $numero1 / $numero2, es: $divicion "."</br>";

}else{
    echo "<h1>Introduce correctamente los calores por la URL</h1>";
}
