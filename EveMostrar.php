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
    $fecha = recogePost("fecha");
    $hora = recogePost("hora");
    //Investigar expresiones regulares para validar telefono y correo
    $nombreOK = false;
    $descripcionOK = false;
    $fechaOK = false;
    $horaOK = false;
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

    if ($fecha === "") {
        $errores[] = "No se digitó el precio del platillo";
    } else {
        $fechaOK = true;
    }
    if ($hora === "") {
        $errores[] = "Sin tipo";
    } else {
        $horaOK = true;
    }

    if ($nombreOK && $descripcionOK && $fechaOK && $horaOK) {
        //inserción de datos
        require_once 'php/getEve.php';
        if (actualizarEve($nombre, $descripcion, $fecha, $hora, $id)) {
            header("Location: Eventos.php");
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
                <H2>Usuario</H2>
                <div>



                    <form method="post">
                        <?php
                        require_once 'php/getEve.php';
                        RetorneEve($id);
                        ?>
                        <button class="boton-rojo" type="submit">Actualizar</button>
                    </form>
                    <form action="php/eliminarEve.php" method="post">
                        <!-- novalidate cuando no se quiere la validación html5 -->

                        <input type="text" name="id" id="id" value="<?= $id ?>" hidden>
                        <button class="boton-rojo" type="submit">Eliminar</button>
                    </form>
                    <?php foreach ($errores as $error): ?>
                        <div class="alerta error">
                            <?php echo $error; ?>
                        </div>
                    <?php endforeach; ?>
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