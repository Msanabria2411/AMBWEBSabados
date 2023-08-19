<?php
    session_start();

    array_push($_SESSION['carrito'],
        [
            'idProducto' => $_POST['id'],
            'nombre' => $_POST['nombre'],
            'precio' => $_POST['precio']
        ]
    );
    
    header('Location: ../inicio.php');
