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

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="WebStyles2/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <ul class="social-nav">
                    <li><a href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.google.com/?hl=es"><i class="fa fa-google-plus"></i></a></li>
                    <!-- /social links -->

            </div>
        </div>
        <!-- /Top nav -->
        <!-- Bottom nav -->
        <div id="bottom-nav">
            <div class="container">
                <nav id="nav">

                    <!-- nav -->
                    <ul class="main-nav nav navbar-nav">
                        <li><a href="Inicio.php">Inicio</a></li>
                        <li><a href="#AboutUs">Sobre Nosotros</a></li>
                        <li><a href="#OurMenu">Menú</a></li>
                        <li><a href="#Reservation">Reservación</a></li>
                        <li><a href="#Galeria">Galleria</a></li>
                        <li><a href="#ContactUs">Contactenos</a></li>

                    </ul>
                    <!-- /nav -->
                    <!-- button nav -->
                    <ul class="cta-nav">
                        <li><a href="Administracion.php" class="main-button">Administrar</a></li>
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
    <div id="home" class="banner-area">


        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image: url('webstyles2/img/background01.jpg');">
        </div>
        <!-- /Backgound Image -->


        <div class="home-wrapper">

            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="home-content">
                    <h1 class="white-text">Bienvenido a Cafeteria Risotto</h1>
                    <h4 class="white-text lead">Donde los Sabores se Despliegan</h4>
                    <a id="AboutUs" href="index.php#menu"><button class="main-button">Descubre el Menú</button></a>
                </div>
            </div>

        </div>

    </div>
    <!-- /Home -->
    <!-- About -->
    <div id="about" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h4 class="sub-title">Sobre Nosotros</h4>
                    <h2 class="title">Cafeteria Risotto</h2>
                </div>
                <!-- /section header -->
                <!-- about content -->
                <div class="col-md-5">
                    <h4 class="lead">Bienvenido/a a la Cafeteria Risotto. Desde 1988, ofreciendo platos tradicionales de
                        la más alta calidad.</h4>
                </div>
                <!-- /about content -->
                <!-- about content -->
                <div class="col-md-7">
                    <p>Te ofrecemos una amplia selección de bebidas a base de café, que incluye espresso, cappuccino,
                        latte, americano y muchas más, tanto calientes como frías. También podrás disfrutar de una
                        variedad de tés, infusiones y otras bebidas refrescantes sin alcohol.<br>

                        Nuestra pasión por el café va más allá, ya que te brindamos delicias complementarias para
                        complementar tu experiencia. Deléitate con nuestros pasteles, muffins, galletas, sándwiches,
                        ensaladas y aperitivos ligeros. Todo esto en un ambiente acogedor y relajante, diseñado para que
                        puedas reunirte, estudiar o trabajar mientras disfrutas de tus momentos especiales.<br>

                        Además, tenemos servicios adicionales para llevar el placer del café a tu hogar. Podrás adquirir
                        granos de café de alta calidad para preparar en la comodidad de tu casa. También ofrecemos
                        métodos alternativos de preparación del café y productos relacionados para que disfrutes de la
                        mejor experiencia en cada taza.</p>
                </div>
                <!-- /about content -->
                <!-- Gallery Slider -->
                <div id="Galeria" class="col-md-12">
                    <div id="Gallery" class="owl-carousel owl-theme">

                        <!-- single column -->
                        <div class="Gallery-item">

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image: url('webstyles2/img/image01.jpg');"></div>
                            <!-- /single image -->

                        </div>
                        <!-- single column -->
                        <!-- single column -->
                        <div class="Gallery-item">

                            <!-- single image -->
                            <div class="Gallery-img" style="background-image: url('webstyles2/img/image02.jpg');"></div>
                            <!-- /single image -->
                            <!-- single image -->
                            <div class="Gallery-img" style="background-image: url('webstyles2/img/image03.jpg');"></div>
                            <!-- /single image -->

                        </div>
                        <!-- single column -->
                        <!-- single column -->
                        <div class="Gallery-item">

                            <div class="item-column">
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image: url('webstyles2/img/image04.jpg');">
                                </div>
                                <!-- /single image -->
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image: url('webstyles2/img/image05.jpg');">
                                </div>
                                <!-- /single image -->
                            </div>

                            <div class="item-column">
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image: url('webstyles2/img/image06.jpg');">
                                </div>
                                <!-- /single image -->
                                <!-- single image -->
                                <div class="Gallery-img" style="background-image: url('webstyles2/img/image07.jpg');">
                                </div>
                                <!-- /single image -->
                            </div>

                        </div>
                        <!-- /single column -->

                    </div>
                </div>
                <!-- /Gallery Slider -->


            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /About -->
    <!-- Menu -->
    <div id="menu" class="section">

        <!-- Backgound Image -->
        <div class="bg-image bg-parallax overlay" style="background-image: url('webstyles2/img/background01.jpg');">
        </div>
        <!-- /Backgound Image -->
        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="section-header text-center">
                    <h4 class="sub-title">Descubre</h4>
                    <h2 id="OurMenu" class="title white-text">Nuestro Menú</h2>
                </div>

                <!-- menu nav -->
                <ul class="menu-nav">
                    <li class="active"><a data-toggle="tab" href="#menu1">Entradas</a></li>
                    <li><a data-toggle="tab" href="#menu2">Bebidas</a></li>
                    <li><a data-toggle="tab" href="#menu3">Platos Fuertes</a></li>
                    <li><a data-toggle="tab" href="#menu4">Postres</a></li>
                </ul>
                <!-- /menu nav -->
                <!-- menu content -->
                <div id="menu-content" class="tab-content">

                    <!-- menu1 -->
                    <div id="menu1" class="tab-pane fade in active">
                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Bruschetta de tomate y albahaca</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Rebanadas de pan tostado cubiertas con tomate fresco picado, ajo, albahaca, aceite de
                                    oliva, sal y pimienta.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Carpaccio de salmón con vinagreta de limón</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Finas láminas de salmón crudo marinado con limón, aceite de oliva, alcaparras,
                                    cebolla roja y hojas de rúcula.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Ensalada de quinoa con aguacate y aderezo de cilantro</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Ensalada de quinoa cocida con aguacate, tomate, pepino, cebolla morada y una
                                    vinagreta de cilantro y limón.</p>
                            </div>


                        </div>

                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Arancini</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Bolitas de arroz cocido rellenas de ragú de carne, guisantes y mozzarella, luego
                                    empanizadas y fritas hasta que queden crujientes por fuera y cremosas por dentro.
                                </p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Prosciutto e Melone</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Una combinación clásica de lonchas finas de jamón prosciutto italiano servidas con
                                    trozos dulces de melón, como cantalupo o melón verde.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Crostini con tapenade de aceitunas</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Rebanadas de pan tostado untadas con una mezcla de aceitunas, alcaparras, anchoas,
                                    ajo, aceite de oliva y hierbas, un aperitivo sabroso y fácil de preparar.</p>
                            </div>


                        </div>

                    </div>
                    <!-- /menu1 -->
                    <div id="menu2" class="tab-pane fade">
                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Espresso</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Un fuerte café concentrado preparado al pasar agua caliente a alta presión a través
                                    de café molido fino..</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Latte</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Una bebida de café hecha con espresso y leche caliente con una pequeña capa de espuma
                                    en la parte superior.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Té de hierbas</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Infusión de hierbas naturales sin cafeína, como manzanilla, menta, jengibre o frutas.
                                </p>
                            </div>


                        </div>

                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Aperol Spritz</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Un refrescante cóctel italiano que combina Aperol (licor de color naranja), vino
                                    espumoso y agua con gas. Se sirve con hielo y se adorna con una rodaja de naranja.
                                </p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Limoncello</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Un licor de limón dulce y fuerte originario de Italia, elaborado a partir de la
                                    cáscara de limones, alcohol y azúcar. Se sirve frío como digestivo después de las
                                    comidas.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Granita</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p> Una bebida helada y granulada similar a un sorbete, elaborada con agua, azúcar y
                                    diversos sabores naturales como limón, café, fresa o albahaca. Es perfecta para
                                    refrescarse en días calurosos.</p>
                            </div>


                        </div>

                    </div>
                    <!-- /menu2 -->
                    <div id="menu3" class="tab-pane fade">
                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Risotto de champiñones con parmesano</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Arroz arborio cocido lentamente con caldo de vegetales, champiñones salteados,
                                    cebolla, ajo, vino blanco, mantequilla y queso parmesano rallado.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Pechuga de pollo a la parrilla con salsa de mostaza y miel</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Pechuga de pollo marinada con mostaza y miel, luego a la parrilla hasta obtener un
                                    dorado perfecto.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Lasagna de vegetales con salsa de tomate y mozzarella</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Capas de pasta de lasaña con una mezcla de vegetales salteados, salsa de tomate
                                    casera y queso mozzarella derretido.
                                </p>
                            </div>


                        </div>

                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Saltimbocca alla Romana</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Delgadas y tiernas lonchas de ternera o pollo, cubiertas con hojas de salvia fresca y
                                    lonchas de jamón prosciutto, todo ello sujetado con un palillo. Luego, se doran en
                                    una sartén con mantequilla y vino blanco. Se sirven con una deliciosa salsa hecha de
                                    los jugos de la cocción.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Pizza Margherita</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Deliciosa y reconfortante, nuestra clásica receta italiana combina una fina masa de
                                    pizza horneada a la perfección con auténtica salsa de tomate y queso mozzarella
                                    derretido</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Osso Buco alla Milanese</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p> Rodajas gruesas de jarrete de ternera cocidas a fuego lento con cebolla, zanahoria,
                                    apio, ajo, tomate, caldo de carne y vino blanco. Se sirven con gremolata, una mezcla
                                    de ralladura de limón, ajo y perejil.</p>
                            </div>


                        </div>

                    </div>
                    <!-- /menu3 -->
                    <div id="menu4" class="tab-pane fade">
                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Tiramisú casero</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Un postre italiano hecho con capas de bizcochos de soletilla empapados en café, crema
                                    de mascarpone y cacao en polvo espolvoreado.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Brownie de chocolate con helado de vainilla</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Brownies de chocolate ricos y húmedos,
                                    servidos con una bola de helado de vainilla.
                                </p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Cheesecake de frutos rojos</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p> Pastel de queso cremoso horneado, adornado con una mezcla de frutos rojos (fresas,
                                    frambuesas, arándanos) y un toque de jarabe.
                                </p>
                            </div>


                        </div>

                        <div class="col-md-6">

                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Cannoli</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Tubos de masa frita rellenos de una mezcla de ricota endulzada con azúcar, vainilla y
                                    a menudo adornados con trozos de chocolate o frutas confitadas.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Panna Cotta</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p>Un postre de crema dulce y delicada, similar a un flan, que se sirve generalmente con
                                    una salsa de frutos rojos o caramelo.</p>
                            </div>
                            <!-- /single dish -->
                            <!-- single dish -->
                            <div class="single-dish">
                                <div class="single-dish-heading">
                                    <h4 class="name">Tarta de ricota y limón</h4>
                                    <h4 class="price">₡3500</h4>
                                </div>
                                <p> Una tarta de queso elaborada con ricota, huevos, azúcar, ralladura y jugo de limón,
                                    horneada hasta que esté dorada.</p>
                            </div>


                        </div>

                    </div>
                    <!-- /menu4 -->
                </div>
                <!-- /menu content -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Menu -->
    <!-- Reservation -->
    <div id="reservation" class="section">

        <!-- Backgound Image -->
        <div class="bg-image" style="background-image: url('webstyles2/img/background03.jpg');"></div>
        <!-- /Backgound Image -->
        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- reservation form -->
                <div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <form class="reserve-form row">
                        <div class="section-header text-center">
                            <h4 id="Reservation" class="sub-title">Reservación</h4>
                            <h2 class="title white-text">Reserva para actividades</h2>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input class="input" type="text" placeholder="Nombre" id="name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefono:</label>
                                <input class="input" type="tel" placeholder="Telefono" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="date">Fecha:</label>
                                <input class="input" type="text" placeholder="MM/DD/YYYY" id="date">
                            </div>
                            <div class="form-group">
                                <label for="time">Time:</label>
                                <input class="input" type="text" placeholder="HH:MM" id="time">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="input" type="email" placeholder="Email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="service">Tipo de servicio:</label>
                                <select class="input" id="service">
                                    <option value="1">Barra de Postres</option>
                                    <option value="1">Barra de Postres</option>
                                    <option value="2">Buffet de platos fuertes</option>
                                    <option value="3">Barra de bebidas</option>
                                    <option value="4">Buffet de Entradas</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="number">Cantidad de Invitados:</label>
                                <input class="input" type="tel" placeholder="Telefono" id="phone">
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button class="main-button">Reservar</button>
                        </div>

                    </form>
                </div>
                <!-- /reservation form -->
                <!-- opening time -->
                <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
                    <div class="opening-time row">
                        <div class="section-header text-center">
                            <h2 class="title white-text">Abierto</h2>
                        </div>
                        <ul>
                            <li>
                                <h4 class="day">De Miercoles a Domingo</h4>
                                <h4 class="hours">8:00 am – 11:00 pm</h4>
                            </li>

                            <li>
                                <h4 class="day">Lunes y martes</h4>
                                <h4 class="hours">Cerrado</h4>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /opening time -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Reservation -->
    <!-- Events -->
    <div id="events" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- section header -->
                <div class="section-header text-center">
                    <h4 id="Gallery" class="sub-title">Eventos Especiales</h4>
                    <h2 class="title">Proximos eventos</h2>
                </div>
                <!-- /section header -->
                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="/WebStyles2/img/event01.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="blog.html">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a>
                            </h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto
                                mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->
                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="/WebStyles2/img/event02.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto
                                mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->
                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="/WebStyles2/img/event02.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto
                                mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->
                <!-- single event -->
                <div class="col-md-6">
                    <div class="event">
                        <div class="event-img">
                            <img src="/WebStyles2/img/event01.jpg" alt="">
                            <div class="event-day">
                                <span>08<br>July</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <p><i class="fa fa-clock-o"></i> 8.00PM - 10.00PM</p>
                            <h3><a href="#">te vero tritani iuvaret vis. Nec odio periculis adipiscing an.</a></h3>
                            <p>Te sit stet labitur veritus, sea similique consetetur ut. Ne fastidii oportere usu. Iusto
                                mediocrem iudicabit ea eos, nemore offendit detraxit ei cum.</p>
                        </div>
                    </div>
                </div>
                <!-- /single event -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Events -->
    <!-- Contact -->
    <div id="contact" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <div class="col-md-5 col-md-offset-7">
                    <div class="section-header">
                        <h4 id="ContactUs" class="sub-title">Contactanos</h4>
                        <h2 class="title">Ponte en contacto</h2>
                    </div>
                    <div class="contact-content">
                        <p>Si tienes alguna pregunta, sugerencia o simplemente quieres decirnos algo, no dudes en
                            ponerte en contacto con nosotros. Estamos encantados de escucharte y brindarte la mejor
                            experiencia en nuestro acogedor espacio.</p>
                        <h3>Tel: <a href="#">87654321</a></h3>
                        <p>Ubicación: San Jose/Escazu/San Rafael/Guachipilin</p>
                        <p>Email: <a href="#">Risotto@email.com</a></p>
                        <ul class="list-inline">
                            <li>
                                <p>Siguenos:</p>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->
        <!-- map -->

        <!-- /map -->

    </div>
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




    <script src="assets/js/script.js"></script>
</body>

</html>