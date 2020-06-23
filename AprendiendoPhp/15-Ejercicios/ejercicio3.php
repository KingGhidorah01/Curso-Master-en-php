<?php

/*
 * Programa que comprueba si una variable está vacia, rellenarla con texro en minuscula y mostrarlo en mayusculas y negretas
 *
 */

$texto = "";

if (empty($texto)){
    $texto = "hola yo soy el relleno de la variable texto";
    $textoMayus = strtoupper($texto);
    echo "<strong>$textoMayus</strong>";
}else{
    echo "La variable tiene este contenido dentro: ".$texto;
}