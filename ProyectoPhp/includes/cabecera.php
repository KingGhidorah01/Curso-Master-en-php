<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/1.png"/>
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
<!--Cabecera -->
<header id="cabecera">
    <!--Logo-->
    <div id="logo">
        <a href="index.php">
            Blog de Videojuegos
        </a>
    </div>

    <!--Menu-->
    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <?php
            $categorias = conseguirCategorias($db);
            if(!empty($categorias)):
            while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <li>
                <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
            </li>
            <?php
            endwhile;
            endif;
            ?>
        </ul>
    </nav>
    <div class="clearfix"></div>
</header>

<div id="contenedor">

