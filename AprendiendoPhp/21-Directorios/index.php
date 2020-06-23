<?php
if(!is_dir('Mi carpeta')) {
    mkdir('Mi carpeta', 0777) or die ('No se puede crear la carpeta');
}else{
    echo "Ya existe la carpeta";
}

//rmdir('Mi carpeta');

echo "<hr><h1>Contenido de mi carpeta</h1></hr>";
if ($gestor = opendir('./Mi carpeta')){
    while(!false !== ($archivo = readdir($gestor))){
        if($archivo !=  '.' && $archivo != '..') {
            echo $archivo . "<br>";
        }
    }
}