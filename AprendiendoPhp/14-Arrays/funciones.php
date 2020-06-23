<?php

$cantantes = ['Wiz Khalifa', 'Reik', 'Ariel camacho', 'Alvares'];
$numeros = [1,2,5,8,3,4];

//Ordenar
sort($numeros);
//var_dump($numeros);

//Añadir elementos array
$cantantes[] = "Natos";
array_push($cantantes, "Waor");

//Eliminar elementos array
array_pop($cantantes);
unset($cantantes[2]);


//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

echo "<br>";

//Dar la vuelta
var_dump(array_reverse($numeros));

//Buscar dentro de un array
echo "<br>";
$resultado = array_search('Alvares', $cantantes);
var_dump($resultado);


echo "<br>";
//Contar número de elementos
echo sizeof($cantantes);





