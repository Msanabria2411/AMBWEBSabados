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
$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'include/funciones/recogeRequests.php';

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
        if (registroMenu($nombre, $descripcion, $precio,$tipos)) {
            header("Location: Menu.php");
        }
    }
}
?>

<!-- About -->
<div id="menu" class="section">

    <!-- container -->
    <div class="container" style="background-color: white;">

        <!-- row -->
        <div class="row">

            <br>
            <br>
            <br>
            <br>
            <div>
                <H2>Agregar Platillo</H2>
                <div class="login-wrap p-0">
                
                    <form  method="POST" class="formulario__register">

                        <div class="form-group">
                            <input type="text" id="nombre" placeholder="Nombre" name="nombre">
                        </div>

                        <div class="form-group">
                            <textarea name="descripcion" id="descripcion" rows="4" cols="50" placeholder='Descripcion' ></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="precio" placeholder="Precio" name="precio">
                        </div>
                        <div class="form-group">
                            <select name="tipos" id="tipos">
                                <option value="1">Entrada</option>
                                <option value="2">Bebida</option>
                                <option value="3">Plato Fuerte</option>
                                <option value="4">Postre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" >Agregar</button>
                        </div>


                    </form>
                    <?php foreach($errores as $error): ?>
                    <div class="alerta error">
                        <?php echo $error; ?>
                    </div>
                    <?php endforeach; ?>
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