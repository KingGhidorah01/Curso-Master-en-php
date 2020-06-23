<?php

/*
 * Variables locales: Son las que se defininen dentro de una función y no pueden
 * ser usadas fuera de la función.
 *
 * Variables globales: Son las que se declaran fuera de un afunción y están disponibles,
 * dentro y fuera de las funciones
 */

//variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;

function HolaMundo()
{
    global $frase;
    echo "<h1>$frase</h1>";

    $year = 2019;
    echo "<h1>$year</h1>";

    return $year;
}

echo HolaMundo();

echo "<br>";
//Funciones Variables:
function buenasDias(){
    echo "Hola!, Buenos días";
}

function buenasTardes(){
    echo "Hey!, ¿Qué tal ha ido la comida? ";
}

function buenasNoches(){
    return "¿Te vas a dormir ya?, Buenas noches!!";
}

$horario = "Noches";

$miFuncion = "buenas".$horario;
echo $miFuncion();
