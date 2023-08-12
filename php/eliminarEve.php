<?php

    include 'conexion_be.php';
    $conexion2 = Conecta();
    $id = $_POST['id'];
   
    
 //Password Encryption  


    $query = "DELETE FROM eventos WHERE ID = $id;";

 //Verificar que el correo no se repita en la
  
    
    $ejecutar = mysqli_query($conexion2, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Platillo Eliminado exitosamente");
                window.location = "../Eventos.php";
            </script>    
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, platillo no elimino");
                window.location = "../EveMostrar.php";s
            </script>    
        ';
    }

    Desconecta($conexion2);

?>