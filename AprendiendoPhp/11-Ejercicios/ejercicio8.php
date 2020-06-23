<?php

$nombre = "Francisco";

for ($i = 0; $i < strlen() . $nombre; $i++){

    for ($j = 0; $j <= strlen() . $nombre; $j--){
        echo " ";
    }
    for ($j = $i; $j >= 0; $j--){
        echo "$nombre.substr($j)";
    }
    for ($j = 0; $j <= $i; $j++){
        echo "$nombre.substr($j)";
    }
    echo "<br>";
}