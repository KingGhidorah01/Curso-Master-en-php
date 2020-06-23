<?php

/*
 * Array con 8 numeros enteros:
 * recorrerlo y mostrarlo
 * Ordenarlo y mostrarlo
 * Mostrar longitud
 * Buscar dentro del array
 * */
//Funciones

function mostrarArray($numeros){
    $resultado = "";
    foreach ($numeros as $numero) {
        $resultado .= "$numero.<br>";
    }
    return $resultado;
}

//Recorrer y mostrar
$numeros = array(11,44,55,77,23,9,97,67);

echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros);

//Ordenarlo y mostrarlo
echo "<h1>Ordenarlo y mostarlo</h1>";

sort($numeros);
echo mostrarArray($numeros);

//Mostrar longitud
echo "<h1>Mostrar longitud</h1>";
echo count($numeros);

//Busqueda en el array
if (isset($_GET['numero'])){

    $busqueda = $_GET['numero'];

    echo "<h1>Busqueda en el array del numero $busqueda</h1>";

    $search = array_search($busqueda, $numeros);

    if (!empty($search)){
        echo "<h4>El número buscado existe en el array, en el indice: $search</h4>";
    }else{
        echo "No existe el número buscado";
    }
}