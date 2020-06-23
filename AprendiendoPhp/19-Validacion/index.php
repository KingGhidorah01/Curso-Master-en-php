<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validación de formularios PHP</title>
    </head>
    <body>
        <h1>Validad Formularios en PHP</h1>

        <?php
        if (isset($_GET['error'])){
            $error = $_GET['error'];
            if ($error == 'Faltan_valores'){
                echo '<strong style="color:#ff0000">Introduce todos los datos en todos los campos del formulario</strong>';
            }
        }
        ?>

        <form method="POST" action="procesar.php">
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" ><br>

            <label for="apellidos">Apellido:</label><br>
            <input type="text" name="apellidos" ><br>

            <label for="edad">Edad:</label><br>
            <input type="number" name="edad" ><br>

            <label for="email">Correo:</label><br>
            <input type="email" name="email"><br>

            <label for="pass">Contraseña:</label><br>
            <input type="password" name="pass" ><br><br>

            <input type="submit" value="Enviar">

        </form>
    </body>
</html>