<?php

/*Ejericio 3. Escribir un programa que imprima por pantalla los cuadrados
(n*n) de los 40 primero números naturales, es decir, 1-40
PD: utilizar while*/


$contador = 1;
while ($contador <=40){
    $resultado = $contador * $contador;
    $contador++;
    echo "el cuadrado de $contador es ".$resultado."</br>";
}
/*$resultado = 0;
for ($i = 0; $i<=40; $i++){
    $resultado = $i * $i;
    echo "el cuadrado de $i es ".$resultado."</br>";
}*/