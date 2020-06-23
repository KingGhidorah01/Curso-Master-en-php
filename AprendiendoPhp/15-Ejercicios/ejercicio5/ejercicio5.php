<?php

/*
 * Crear un array con el contenido de la siguiente tabla
 * Accion       Aventura        Deportes
 * GTA          ASSASINS        FIFA 18
 * COD          CRASH           PES 19
 * PUGB         PERSIA          MOTO GP 19


 */

$tabla = array(
    "ACCION" => array("GTA5", "CALL OF DUTY", "PUGB"),
    "AVENTURA" => array("ASSASIANS CREED", "CRASH NADICOOT", "PINCE OF PERSIA"),
    "DEPORTES" => array("FIFA 19", "PES 19", "MOTO GP 19")
);

$categorias = array_keys($tabla);
?>
<table border="2">

    <?php
    include 'encabezado.php';
    ?>

    <?php
    include 'primera.php';
    ?>

    <?php
    include 'segunda.php';
    ?>

    <?php
    include 'tercera.php';
    ?>

</table>
