 <?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    
 //Password Encryption  
    $password = hash('sha512', $password);

    $query = "INSERT INTO usuarios(nombre, email, usuario,telefono, password)
            VALUES('$nombre', '$email', '$usuario', '$password', '$telefono' )";

 //Verificar que el correo no se repita en la

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email ='$email' ");

    if(mysqli_num_rows($verificar_correo) > 0 ){
        echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro...");
            window.location = "../index.php";
        </script>    
        ';
        exit();
    }
  
    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>    
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location = "../index.php";
            </script>    
        ';
    }

    mysqli_close($conexion);

?>
