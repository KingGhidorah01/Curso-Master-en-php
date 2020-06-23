<?php
/*Ejercicio 2. Escribir un script en php que nos muestre en pantalla todos
los números pares que hay del 1 al 100*/

/*Una forma
for ($i = 2; $i <=100; $i+=2){
    echo $i."</br>";
}*/
//Otra forma
for ($i = 1; $i <=100; $i++){
    if($i%2 == 0){
        echo $i."</br>";
    }
}