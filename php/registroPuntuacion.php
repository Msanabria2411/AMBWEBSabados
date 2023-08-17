<?php

include 'conexion_be.php';
session_start();
$servicio = $_POST['rating'];
$comida = $_POST['ratingC'];
$bebida = $_POST['ratingB'];
$usuario = $_SESSION['usuario'];

//Password Encryption  


$query = "INSERT INTO criticas(servicio, comida, bebidas, usuario)
        VALUES('$servicio', '$comida', '$bebida','$usuario')";

//Verificar que el correo no se repita en la


$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
        <script>
            alert("Puntacion almacenada exitosamente");
            window.location = "../Inicio.php";
        </script>    
    ';
}else{
    echo '
        <script>
            alert("Intentalo de nuevo, puntiacion no almacenada");
            window.location = "../Inicio.php";
        </script>    
    ';
}

mysqli_close($conexion);

?>