<?php
/*//Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");

//Leer contenido
while (!feof($archivo)){
$contenido = fgets($archivo);
echo $contenido."<br>";
}

//Escribir
fwrite($archivo, "Hola mundo php ");

//Cerrar archivo
fclose($archivo);*/

//Copiar
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die('Error al copiar');

//Rename
//rename('fichero_copiado.txt', 'archivo_recopiadito.txt');

////Eliminar
//unlink('archivo_recopiadito.txt')or die('Error al borrar');

if (file_exists("fichero_texto.txt")){
    echo "El fichero existe";
}else{
    echo "El fichero no existe";
}