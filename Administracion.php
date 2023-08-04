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


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Restaurante Risotto</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="WebStyles2/css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="WebStyles2/css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="WebStyles2/css/owl.theme.default.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="WebStyles2/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="WebStyles2/css/style.css" />

    <link type="text/css" rel="stylesheet" href="CSS/tablestyles.css" />

</head>

<body>

    <!-- Header -->
    <header id="header">

        <!-- Top nav -->
        <div id="top-nav">
            <div class="container">

                <!-- logo -->
                <div class="logo">
                    <a href="Inicio.php"><img src="WebStyles2/img/logo.png" alt="logo"></a>
                </div>
                <!-- logo -->
                <!-- Mobile toggle -->
                <button class="navbar-toggle">
                    <span></span>
                </button>
                <!-- Mobile toggle -->
                <!-- social links -->
               
            </div>
        </div>
        <!-- /Top nav -->
        <!-- Bottom nav -->
        <div id="bottom-nav">
            <div class="container">
                <nav id="nav">

                    <!-- nav -->
                    <ul class="main-nav nav navbar-nav">
                        <li><a href="Administracion.php">Usuarios</a></li>
                        <li><a href="Eventos.php">Eventos</a></li>
                        <li><a href="Menu.php">Menu</a></li>
                        <li><a href="Pedidos.php">Pedidos</a></li>


                    </ul>
                    <!-- /nav -->
                    <!-- button nav -->
                    <ul class="cta-nav">
                        <li><a href="Inicio.php" class="main-button">Cerrar Administracion</a></li>
                        <li><a href="php/cerrar_sesion.php" class="main-button">Cerrar Sessión</a></li>

                    </ul>
                    <!-- button nav -->
                    <!-- contact nav -->

                    <!-- contact nav -->

                </nav>
            </div>
        </div>
        <!-- /Bottom nav -->


    </header>
    <!-- /Header -->
    <!-- Home -->
    <div>

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image: url('webstyles2/img/background01.jpg');">
        </div>
        <!-- /Backgound Image -->
    </div>
    <!-- /Home -->
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
                    <H2>Lista Usuarios</H2>
                    <?php
                    //imprimir los alumnos
                    require_once 'php/get_data.php';
                    RetornarAlumnos();
                    ?>


                </div>




            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /About -->



    <!-- Contact -->
    <!-- Footer -->
    <footer id="footer">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- copyright -->
                <div class="col-md-6">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <span class="copyright">Copyright 2023 Todos los derechos reservados | Ufidelitas
                    </span>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <!-- /copyright -->

                <!-- /row -->

            </div>





    </footer>
    <!-- /Footer -->
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->
    <!-- jQuery Plugins -->
    <script type="text/javascript" src="WebStyles2/js/jquery.min.js"></script>
    <script type="text/javascript" src="WebStyles2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="WebStyles2/js/owl.carousel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script type="text/javascript" src="WebStyles2/js/google-map.js"></script>
    <script type="text/javascript" src="WebStyles2/js/main.js"></script>


    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>