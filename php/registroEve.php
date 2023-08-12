<?php

include 'conexion_be.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

//Password Encryption  


$query = "INSERT INTO eventos(nombre, descripcion, fecha, hora)
        VALUES('$nombre', '$descripcion', '$fecha','$hora')";

//Verificar que el correo no se repita en la


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Evento almacenado exitosamente");
            window.location = "../Eventos.php";
        </script>    
    ';
}else{
    echo '
        <script>
            alert("Intentalo de nuevo, evento no almacenado");
            window.location = "../EveAgregar.php";
        </script>    
    ';
}

mysqli_close($conexion);

?>