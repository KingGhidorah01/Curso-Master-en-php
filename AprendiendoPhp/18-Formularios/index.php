<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formularios php y html</title>
    </head>
    <body>
         <h1>Formulario</h1>
         <form action="" method="post" enctype="multipart/form-data">
             <label for="nombre">Nombre: </label>
                 <p><input type="text" name="nombre" required="" autofocus="autofocus" placeholder="Nombre" /></p>
             <label for="apellido">Apellido:</label>
             <p><input type="text" name="apellido"  required="" placeholder="Apellido" pattern="[A-Z, a-z]+"></p>

             <label for="botón">Botón:</label>
             <p><input type="button" name="boton" value="Button"></p>

             <label for="sexo">Sexo:</label>
             <p>
                 Hombre:<input type="checkbox" name="sexo" value="hombre" >
                 Mujer:<input type="checkbox" name="sexo" value="mujer">
             </p>

             <label for="color">Color:</label>
             <p><input type="color" name="color"></p>

             <label for="date">Fecha:</label>
             <p><input type="date" name="fecha"></p>

             <label for="correo">Correo:</label>
             <p><input type="email" name="correo"></p>

             <label for="archivo">Archivo:</label>
             <p><input type="file" name="archivo" multiple="multiple"></p>

             <label for="numero">Número:</label>
             <p><input type="number" name="numero"></p>

             <label for="pass">Contraseña:</label>
             <p><input type="password" name="pass"></p>

             <label for="continente">Continente:</label>
             <p>
                 América<input type="radio" name="continente" value="America">
                 Europa<input type="radio" name="continente" value="Europa">
                 Asia<input type="radio" name="continente" value="Asia">
             </p>

             <label for="web">Pagina web:</label>
             <p><input type="url" name="web"></p>

             <textarea></textarea><br>
             Peliculas:
             <select name="peliculas">
                 <option value="">Rapido y furioso 1:  </option>
                 <option value="">Rapido y furioso 2:  </option>
                 <option value="">Rapido y furioso 3:  </option>
                 <option value="">Rapido y furioso 4:  </option>
                 <option value="">Rapido y furioso 5:  </option>
                 <option value="">Rapido y furioso 6:  </option>
                 <option value="">Rapido y furioso 7:  </option>
                 <option value="">Rapido y furioso 8:  </option>
             </select><br>


             <input type="submit" value="Enviar">
         </form>
    </body>
</html>