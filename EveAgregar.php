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
                <H2>Agregar Evento</H2>
                <div class="login-wrap p-0">
                    <form action="php/registroEve.php"  method="POST" class="formulario__register">

                        <div class="form-group">
                            <input type="text" id="nombre" placeholder="Nombre" name="nombre">
                        </div>

                        <div class="form-group">
                            <textarea name="descripcion" id="descripcion" rows="4" cols="50" placeholder='Descripcion' ></textarea>
                        </div>
                        <div class="form-group">
                            <input type="date" id="fecha"  name="fecha">
                        </div>
                        <div class="form-group">
                            <input type="time" id="hora"  name="hora">
                        </div>
                        <div class="form-group">
                            <button  type="submit" >Agregar</button>
                        </div>


                    </form>

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