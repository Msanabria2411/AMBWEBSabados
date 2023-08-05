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
                        <form action="php/eliminar_usuario_be.php" method="post">
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