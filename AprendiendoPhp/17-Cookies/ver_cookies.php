<?php

/*
 * para mostrar el valor de las cookies, tengo que usar $_COOKIE, que es una variable superglobal
 * es un array asociativo.
 */

if (isset($_COOKIE['micookie'])){
    echo $_COOKIE['micookie']."<br>";
}else{
    echo "No existe la cookie";
}
echo "<br>";
if (isset($_COOKIE['oneyear'])){
    echo $_COOKIE['oneyear'];
}else{
    echo "No existe la cookie";
}
?>
<br>
<a href="crear_cookies.php">Crear mis galletas</a>
<a href="borrar_cookies.php">Borrar mis galletas</a>



