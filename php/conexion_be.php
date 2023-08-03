<?php

$conexion = mysqli_connect("localhost", "root", "", "cafeteria_db");

if ($conexion){
    echo "conectado";
}else{
        echo "no conectado";
}

?>
