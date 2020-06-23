<?php

/*
 * Programa que añade valores a un array mientras que su longitud
 * sea menor a 120, y mostrarlo en pantalla
 *
 */

$coleccion = array();

for ($i = 0; $i < 120; $i++){
    array_push($coleccion, "Elemento-".$i);
}
echo $coleccion[45];