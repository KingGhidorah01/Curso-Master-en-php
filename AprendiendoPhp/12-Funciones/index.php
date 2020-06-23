<?php

/*Funciones: conjuntos de ordenes agrupadas por un nombre en concreto.
y que pueden reutilizarse solamente llamando a la funcion, las veces que queramos

function nombre_funcion(){
       Conjunto de ordenes
}
*/

//Ejemplo

/*function MuestraNombres(){
    echo "Josué Andrade </br>";
    echo "Martín Andrade </br>";
    echo "Ignacio Andrade </br>";
    echo "Nacho Andrade </br>";
    echo "<hr>";
}
//Llamamos funcion
MuestraNombres();
MuestraNombres();
MuestraNombres();*/

//Ejemplo 2
/*function tabla($numero){
    echo "Tabla de multiplicar del número: $numero";
    for ($i = 1; $i <= 10; $i++){
        echo "$numero x $i = ". $numero * $i. "<br>";
    }
}*/
/*if (isset($_GET['numero'])){
tabla($_GET['numero']);
}else{
    echo "No hay número para multiplicar";
}*/
/*for ($i = 1; $i <= 10; $i++){
    echo "<hr>";
    tabla($i);
}

echo "<hr>";*/
//Ejemplo 3
function calculadora($numero1, $numero2, $negrita = false){

    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $divicion = $numero1 / $numero2;
        $cadena_texto = "";
    if ($negrita) {
        $cadena_texto.= "<h3>";
    }
        $cadena_texto.= "Suma: " . $suma . "<br>";
        $cadena_texto.= "Resta: " . $resta . "<br>";
        $cadena_texto.= "Multiplicacion: " . $multiplicacion . "<br>";
        $cadena_texto.= "Divición: " . $divicion . "<br>";

        if ($negrita) {
            $cadena_texto.= "</h3>";
        }
        return $cadena_texto;
    }
echo calculadora(10,30, true);

//Ejemplo return 4

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto;
}
function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto;
}
function devuelveElNombre($nombre, $apellidos){
    $texto = getNombre($nombre)."<br>". getApellidos($apellidos) ;
    return $texto;
}
echo devuelveElNombre("Martín Josué", "Andrade Salazar");

