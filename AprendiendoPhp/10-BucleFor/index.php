<?php

/*
FOR
for (Variable contador, condicion, incrementa contador){
    Bloque de instrucciones.
}
*/

//Ejemplo 1

$resultado = 0;
for ($i = 0; $i <= 100; $i++){
    $resultado += $i;
}
echo "El resultado es, $resultado";

echo "<hr>";
echo "<br>";
//Ejemplo 2
if (isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h3>Tabla de multiplicar del número $numero</h3>";

for ($contador = 1; $contador <= 10; $contador++){
    if($numero == 45){
        echo "No se puede mostrar está operación";
        break;
    }
    echo "$numero x $contador = ". ($numero*$contador)."</br>";
}