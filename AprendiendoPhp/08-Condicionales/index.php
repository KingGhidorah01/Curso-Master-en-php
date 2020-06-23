<?php

/*CONDICIONALES IF
if:
if(condicion){
    instrucciones
}else{
   otras insgrucciones
}

OPERADORES DE COMPARACIÓN
== Igual
=== Identico
!= Distinto o difernete
<> Diferente
!== No identico
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

//Operadores logicos
&& and
|| or
! no
and, or
*/
//Ejemplo 1
$color = "verde";
if($color == "rojo"){
    echo "El color es rojo";
}else{
    echo "El color no es rojo";
}
echo "<hr>";
echo "<br>";
//Ejemplo 2
$year = 2019;
if($year >= 2019){
    echo "Estamos a 2019 en adelante ";
    echo "Hola";
}else{
    echo "Estamos a 2019";
}
echo "<hr>";
echo "<br>";
//Ejemplo 3
$nombre = "Martín Josué";
$ciudad = "Ameca";
$continente = "Europa";
$edad = 18;
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
    echo $nombre. ", Eres mayor de edad ";

    if($continente == "America"){
    echo "Y es de ".$ciudad;
    }else {
        echo "No es Americano";
}
}else{
    echo $nombre. ", No eres mayor de edad";
}
echo "<hr>";
echo "<br>";
//Ejemplo 4
//else if
$dia = 6;

if($dia == 1){
    echo "Lunes";
}else if($dia == 2){
    echo "Martes";
}else if($dia == 3){
    echo "Miercoles";
}else if($dia == 4){
    echo "Jueves";
}else if($dia == 5){
    echo "Viernes";
}else{
    echo "Es fin de semana";
}

echo "<hr>";
echo "<br>";
//Ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Está en edad de trabajar";
}else{
    echo "No puede trabajar";
}

echo "<hr>";
echo "<br>";
$pais = "México";
if($pais == "México" || $pais == "España" || $pais == "Colombia"){
    echo "En este país se habla español";
}else{
    echo "No se habla español";
}

echo "<hr>";
echo "<br>";
//Ejemplo switch
$dia = 4;
switch ($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";
}

echo "<hr>";
echo "<br>";
//Ejeplos GOTO
goto marca;
echo "<h3><Instruccion 1/h3>";
echo "<h3><Instruccion 2/h3>";
echo "<h3><Instruccion 3/h3>";
echo "<h3><Instruccion 4/h3>";

marca:
    echo "<h3>Me he saltado 4 echos</h3>";

