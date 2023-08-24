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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'include/funciones/recogeRequests.php';

    $id = recogePost("id");
   

    $idOK = false;
   

	if ($id === "") {
		$errores[] = "No se ingresó el Id Correcto: el campo de Id está vacío.";
	} elseif (strlen($id) > 50) {
		$errores[] = "El id ingresado es demasiado largo, debe tener 50 caracteres o menos.";
	} else {
		$idOK = true;
    }

    if ($idOK) {
        //inserción de datos
        require_once 'php/get_data.php';
        if (ActualizarUsuario($id)) {
            header("Location: Login.php");
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



                        <form action="php/actualizar_usuario_be.php" method="post">
                            <?php
                            require_once 'php/get_data.php';
                            $id = recogeGet('id');
                            RetorneUsuario($id);
                            ?>

                            <input type="text" name="id" id="id" value="<?= $id ?>" hidden>
                            <button class="boton-rojo" type="submit">Actualizar</button>
                        </form>
                        <form method="post">
                            <!-- Borramos el action -->

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