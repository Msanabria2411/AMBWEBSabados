<?php 
    session_start();
    include 'conexion_be.php';

    $idUsuario = $_SESSION['id'];

    if(isset($idUsuario) and !empty($idUsuario)){
        
        $Precio_total = 0;
        foreach($_SESSION['carrito'] as $indice => $producto){
            $Precio_total += $producto['precio'];
        }

        $fecha = date("Y-m-d H:i:s");
        
        // INSERT DE COMPRA
        $query = "INSERT INTO compra(idUsuario, Precio_total, fecha)
                VALUES('$idUsuario', '$Precio_total', '$fecha')";
        $ejecutar = mysqli_query($conexion, $query);
        // rerturn idCompra
        $idCompra= mysqli_insert_id($conexion);

        // INSERT DE COMPRA PRODUCTO
        foreach($_SESSION['carrito'] as $indice => $producto){
            $idProducto = $producto['idProducto'];
            $query = "INSERT INTO compra_producto(idCompra, idProducto)
                    VALUES('$idCompra', '$idProducto')";
            $ejecutar = mysqli_query($conexion, $query);
        }




        // if($ejecutar){
        //     echo '
        //         <script>
        //             alert("Producto agregado exitosamente");
        //             window.location = "../inicio.php";
        //         </script>    
        //     ';
        // }else{
        //     echo '
        //         <script>
        //             alert("Intentalo de nuevo, producto no agregado");
        //             window.location = "../inicio.php";
        //         </script>    
        //     ';
        // }
    }

