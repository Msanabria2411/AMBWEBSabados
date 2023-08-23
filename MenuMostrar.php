<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
            alert("Debes de Iniciar Sesion");
            window.location = "Login.php";
            </script>
        ';
    session_destroy();
    die();
}

require 'include/funciones.php';

incluirTemplate('headerAdmin');
require_once 'include/funciones/recogeRequests.php';
$id = recogeGet('id');
$errores = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = recogePost("nombre");
    $descripcion = recogePost("descripcion");
    $precio = recogePost("precio");
    $tipos = recogePost("tipos");
    //Investigar expresiones regulares para validar telefono y correo
    $nombreOK = false;
    $descripcionOK = false;
    $precioOK = false;
    $tiposOK = false;
    if ($nombre === "") {
        $errores[] = "No se digitó el nombre del platillo";
    } else {
        $nombreOK = true;
    }

    if ($descripcion === "") {
        $errores[] = "No se digitó ninguna descriocion";
    } else {
        $descripcionOK = true;
    }

    if ($precio === "") {
        $errores[] = "No se digitó el precio del platillo";
    } else {
        $precioOK = true;
    }
    if ($tipos === "") {
        $errores[] = "Sin tipo";
    } else {
        $tiposOK = true;
    }

    if ($nombreOK && $descripcionOK && $precioOK && $tiposOK) {
        //inserción de datos
        require_once 'php/getMenu.php';
        if (actualizarMenu($nombre, $descripcion, $precio,$tipos,$id)) {
            header("Location: Menu.php");
        }
    }
}
?>



    <!-- About -->
    <div id="about" class="section">

        <!-- container -->
        <div class="container" style="background-color: white;">

            <!-- row -->
            <div class="row">

                <br>
                <br>
                <br>
                <br>
                <div>
                    <H2>Platillos</H2>
                    <div>



                        <form  method="post">
                            <?php
                            require_once 'php/getMenu.php';
                            
                            RetornePlatillo($id);
                            ?>

                            <button class="boton-rojo" type="submit">Actualizar</button>
                        </form>
                        <form action="php/eliminarMenu.php" method="post">
                            <!-- novalidate cuando no se quiere la validación html5 -->

                            <input type="text" name="id" id="id" value="<?= $id ?>" hidden>
                            <button class="boton-rojo" type="submit">Eliminar</button>
                        </form>
                    </div>


                </div>




            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /About -->



    <!-- Contact -->
    <?php

    //include 'include/template/footer.php';
    incluirTemplate('footerAdmin');

    ?>