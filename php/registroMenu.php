<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$tipo = $_POST['tipos'];

//Password Encryption  


$query = "INSERT INTO menu(nombre, descripcion, precio, tipo)
        VALUES('$nombre', '$descripcion', '$precio','$tipo')";

//Verificar que el correo no se repita en la


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Platillo almacenado exitosamente");
            window.location = "../Menu.php";
        </script>    
    ';
}else{
    echo '
        <script>
            alert("Intentalo de nuevo, platillo no almacenado");
            window.location = "../MenuAgregar.php";
        </script>    
    ';
}

mysqli_close($conexion);

?>