<?php

    include 'conexion_be.php';
    $conexion2 = Conecta();
    $id = $_POST['id'];
    $nombre = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    
 //Password Encryption  


    $query = "UPDATE usuarios SET nombre_completo = '$nombre', email = '$email', telefono= '$telefono' WHERE ID = '$id';";

 //Verificar que el correo no se repita en la
  
    
    $ejecutar = mysqli_query($conexion2, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario actualizo exitosamente");
                window.location = "../Administracion.php";
            </script>    
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no actualizado");
                window.location = "../Administracion.php";
            </script>    
        ';
    }

    Desconecta($conexion2);

?>