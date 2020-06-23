<?php

/*
 * Cookie: es un fichero que se almacena en el ordenar del usuario que visita
 * la web, con el fin de recordar datos o rastrear el comportamiento del mismo
 * en la web.
 */

//Crear cookie
//setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, domino);

//Cookie básica
setcookie("micookie", "valor de mi galleta");
echo "<br>";
//cookie con expiración
setcookie("oneyear", "Valor de mi cookie de 365 días", time()+(60*60*24*365));

header('Location:ver_cookies.php');

?>



