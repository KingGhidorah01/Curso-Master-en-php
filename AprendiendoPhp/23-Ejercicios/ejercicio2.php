<?php

/*
 * Ejercicio2:
 * 1. FUnción
 * 2. Validad un email con filter_var
 * 3. Recoger variable por get y validarla
 * 4. Mostrar los resultados
 * */

function validarEmail($email){
    $status = "No válido";
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Válido";
    }

    return$status;
}

if (isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo "Pasa por get un email";
}

