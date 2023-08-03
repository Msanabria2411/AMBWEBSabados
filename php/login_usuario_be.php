<?php
    session_start();
    
    include 'conexion_be.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Realiza la consulta para obtener el hash de la contraseña asociada al email
    $query = mysqli_query($conexion, "SELECT password FROM usuarios WHERE email='$email'");
    
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $hash = $row['password'];

        // Verifica si la contraseña coincide con el hash almacenado en la base de datos
        if (password_verify($password, $hash)) {
            $_SESSION['usuario'] = $email;
            header("location: ../Inicio.php");
            exit;
        } else {
            echo '
               <script>
                    alert("Contraseña incorrecta, favor verificar sus datos correctamente");
                    window.location = "../Login.php";
                </script>
            ';
            exit;
        }
    } else {
        echo '
            <script>
                alert("Usuario inexistente, favor verificar sus datos correctamente");
                window.location = "../Login.php";
            </script>
        ';
        exit;
    }
?>
