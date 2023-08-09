<?php

    include 'conexion_be.php';
    $conexion2 = Conecta();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipos'];
    
 //Password Encryption  


    $query = "UPDATE menu SET nombre = '$nombre', descripcion = '$descripcion', precio= '$precio',tipo='$tipo' WHERE ID = '$id';";

 //Verificar que el correo no se repita en la
  
    
    $ejecutar = mysqli_query($conexion2, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Platillo actualizado exitosamente");
                window.location = "../Menu.php";
            </script>    
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, platillo no actualizado");
                window.location = "../MostrarMenu.php";
            </script>    
        ';
    }

    Desconecta($conexion2);

?>