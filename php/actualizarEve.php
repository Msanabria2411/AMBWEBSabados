<?php

    include 'conexion_be.php';
    $conexion2 = Conecta();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    
 //Password Encryption  


    $query = "UPDATE eventos SET nombre = '$nombre', descripcion = '$descripcion', fecha= '$fecha',hora='$hora' WHERE ID = '$id';";

 //Verificar que el correo no se repita en la
  
    
    $ejecutar = mysqli_query($conexion2, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Platillo actualizado exitosamente");
                window.location = "../Eventos.php";
            </script>    
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, platillo no actualizado");
                window.location = "../MostrarEve.php";
            </script>    
        ';
    }

    Desconecta($conexion2);

?>