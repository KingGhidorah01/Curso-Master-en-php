<?php
/*
Bucle While
Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces como sea necesario.

while(condicion) {
    bloque de instrucciones
}
 */

//Ejemplo 1
$numero = 1;
while($numero <= 100){
    echo "$numero";

    if($numero != 100){
        echo ", ";
    }
    $numero++;
}

echo "<hr>";
echo "<br>";
//Ejemplo 2

if(isset($_GET['numero'])){
    //Cambiar tipo de dato (casteo o casting)
    $numero = (int) $_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";
$contador = 1;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."</br>";
    $contador++;
}

echo "<hr>";
echo "<br>";
/*//Do while
do{
    //Bloque de instruccion
}while(condicion);*/
//ejemplo 1
$edad = 17;
$contador = 1;
do{
    echo "Tienes acceso al local privado $contador"."</br>";
    $contador++;
}while($edad >= 18 && $contador <= 10);


















