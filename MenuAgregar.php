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
                <H2>Agregar Platillo</H2>
                <div class="login-wrap p-0">
                    <form action="php/registroMenu.php"  method="POST" class="formulario__register">

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
                            <button id="botonM" type="submit" >Agregar</button>
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