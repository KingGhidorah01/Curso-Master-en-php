<?php
//Operadores aritméticos
$numero1 = 65;
$numero2 = 33;

echo 'Suma: '.($numero1+$numero2). '<br>';
echo 'Resta: '.($numero1-$numero2). '<br>';
echo 'Multiplicación: '.($numero1*$numero2).'<br>';
echo 'Divición: '.($numero1/$numero2).'<br>';
echo 'Resto: '.($numero1%$numero2).'<br>';

//Operadores incremento y decremento
$year = 2019;
//Incrementa
//$year++;
//$year = $year + 1;

//Decrementa
//$year--;
//$year = $year - 1;

//Pre-incremento
//++$year;
//$year = 1 + $ $year;

//Pre-decremento
//$year = 1- $year;
//--$year;
echo '<h1>'.$year.'<h1>';


//Operadores de asignacion
$edad = 55;

echo $edad.'<br>';
echo ($edad+=5).'<br>';//Le asigna 5 valores más
echo ($edad+-5).'<br>';//Le quitamos 5 valores
echo ($edad/=5).'<br>';//Lo dividimos entre 5
echo ($edad*=5).'<br>';//Lo multiplicamos por 5



?>