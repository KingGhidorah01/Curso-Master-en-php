<?php

//Debbugear
$nombre = "Josue";
var_dump($nombre);

echo "<br>";
echo "<br>";

//Fechas
echo date('d-m-y');
echo "<br>";
echo time();

echo "<br>";
echo "<br>";

//Matemáticas
echo "Raíz cuadrada de 10: ".sqrt(10);
echo "<br>";
echo "Número aleatorio entre 10 y 40: ".rand(10,40);
echo "<br>";
echo "Número pi ".pi();
echo "<br>";
echo "Redondear: ".round(7.891234,1);

echo "<br>";
echo "<br>";

//Más funciones generales
echo gettype($nombre);
echo "<br>";
//Detectar tipos
if (is_string($nombre)){
    echo "Esa variable es un string";
}
echo "<br>";
if (is_float($nombre)){
    echo "La variable nombre no es número con decimales.";
}

echo "<br>";
echo "<br>";

//Comprobar si existe variable
if (isset($edad)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}

echo "<br>";
echo "<br>";

//Limpiar espacios
$frase = "     mi contenido     ";
var_dump(trim($frase));

echo "<br>";
echo "<br>";

//Eliminar variables / indices

$year = 2020;
unset($year);
var_dump($year);

echo "<br>";
echo "<br>";

//Comprobar si una varianble es vacia, si existe y tiene contenido
$texto = "";
if (empty($texto)){
    echo "La variable texto está vacia.";
}else{
    echo "La variable texto TIENE CONTENIDO";
}

echo "<br>";
echo "<br>";

//Contar caracteres de una cadena
$cadena = "12345";
echo strlen($cadena);

echo "<br>";
echo "<br>";

//Encontrar un string o caracter
$frase = "La vida es bella";
echo strpos($frase, "i");

echo "<br>";
echo "<br>";

//Remplazar contenido de un string
$frase = str_replace("vida" , "moto", $frase);
echo $frase;

echo "<br>";
echo "<br>";

//Mayusculas y minusculas
echo strtolower($frase);
echo "<br>";
echo "<br>";
echo strtoupper($frase);