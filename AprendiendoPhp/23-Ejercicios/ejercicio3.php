<?php

/*
 * Ejercicio 3: Calculadora
 *
 * */
$resultado = false;
if (isset($_POST['n1']) && isset($_POST['n2'])){


    //Sumar
    if (isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['n1'] + $_POST['n2']);
    }
    //Restar
    if (isset($_POST['restar'])){
        $resultado = "El resultado es: ".($_POST['n1'] - $_POST['n2']);
    }
    //Multiplicar
    if (isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['n1'] * $_POST['n2']);
    }
    //Dividir
    if (isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['n1'] / $_POST['n2']);
    }
}

?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Calculadora</title>
    </head>
    <body>
    <h1>Calculadora en php</h1>
    <form action="" method="post" >
        <label for="n1">Número 1</label><br>
        <input type="number" name="n1"><br><br>

        <label for="n2">Número 2</label><br>
        <input type="number" name="n2"><br><br>

        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Multiplicar" name="multiplicar">
        <input type="submit" value="Dividir" name="dividir">
    </form>

    <?php
    //Rsultado
    if ($resultado != false):
        echo "<h2>$resultado</h2>";
    endif;
    ?>
    </body>
</html>

