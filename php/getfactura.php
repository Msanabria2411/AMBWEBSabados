<?php

include 'conexion_be.php';

function registroFactura($usuario)
{
    $retorno = false;
    try {
        //1. Estableciendo la conexion

        //1. Estableciendo la conexion
        $conexion2 = Conecta();
        //2. Ejecutar la consulta
        $conexion2->query("INSERT INTO maestro(fecha, total, usuario) SELECT CURDATE(), SUM(C.cantidad * M.precio), C.usuario 
        FROM carrito C 
        INNER JOIN menu M ON C.id_menu = M.id 
        WHERE usuario = '$usuario'
        GROUP BY C.usuario;");
        $ide = $conexion2->query("SELECT @@IDENTITY as id ;");
        $row = $ide->fetch_assoc();
        $_SESSION['ide'] = $row['id'];
        $conexion2->query("INSERT INTO factura(id_maestro, cantidad, precio, id_menu) SELECT @@Identity, C.cantidad, C.cantidad * M.precio, c.id_menu
        FROM carrito C 
        INNER JOIN menu M ON C.id_menu = M.id 
        WHERE usuario = '$usuario'");
        $conexion2->query("DELETE FROM carrito WHERE usuario = '$usuario';");
        if ($conexion2->error != "") {
            echo "Ocurrió un error al ejecutar la consulta : $conexion2->error";
        }
        $retorno = true;

    } catch (\Throwable $th) {

    } finally {
        Desconecta($conexion2);
    }
    return $retorno;
}


function RetornarFactUser()
{
    try {
        $ide =  $_SESSION['ide'];
        //1. Estableciendo la conexion
        $conexion2 = Conecta();
        //2. Ejecutar la consulta
        $resultado = $conexion2->query("SELECT m.id AS maestro_id, m.fecha, m.total, m.usuario, f.cantidad, f.precio, me.nombre AS menu_nombre
        FROM maestro m
        JOIN factura f ON m.id = f.id_maestro
        JOIN menu me ON f.id_menu = me.id
        where m.id = '$ide';");

        if ($conexion2->error != "") {
            echo "Ocurrió un error al ejecutar la consulta : $conexion2->error";
        }

        //Mostrar los datos
        ImprimirFactura($resultado);

    } catch (\Throwable $th) {

    } finally {
        Desconecta($conexion2);
    }
}
function ImprimirFactura($datos){
    $rowP = $datos->fetch_assoc();
    echo "<h2>#{$rowP['maestro_id']}</h2>";
    echo "<h2>{$rowP['fecha']}</h2>";
    echo '<table class="table">';
    echo "<tr>";
    echo "<th>Cantidad</th>";
    echo "<th>Nombre</th>";
    echo "<th>Precio</th>";
    echo "</tr>";
    $datos->data_seek(0);
    if ($datos->num_rows > 0) {
        while ($row = $datos->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['cantidad']}</td>";
            echo "<td>{$row['menu_nombre']}</td>";
            echo "<td>{$row['precio']}</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td>No hay registros de platillos</td></tr>";
    }
    echo "</table>";
    echo "<div class='total'>";
    echo "<h2>{$rowP['total']}</h2>";
    echo "</div>";
}
function RetornarFacturas()
{
    try {
        $user = $_SESSION['usuario'];
        //1. Estableciendo la conexion
        $conexion2 = Conecta();
        //2. Ejecutar la consulta
        $resultado = $conexion2->query();

        if ($conexion2->error != "") {
            echo "Ocurrió un error al ejecutar la consulta : $conexion2->error";
        }

        //Mostrar los datos
        ImprimirDatos($resultado);

    } catch (\Throwable $th) {

    } finally {
        Desconecta($conexion2);
    }
}

function RetorneFactura($id)
{
    try {
        //1. Estableciendo la conexion
        $conexion2 = Conecta();
        //2. Ejecutar la consulta
        $resultado = $conexion2->query("select id, cantidad from carrito where id = '$id'");

        if ($conexion2->error != "") {
            echo "Ocurrió un error al ejecutar la consulta : $conexion2->error";
        }

        //Mostrar los datos
        $datos = $resultado->fetch_assoc();

        echo '<label for="cantidad">Cantidad:  </label><br>';
        echo '<input type="number" name="cantidad" id="cantidad" min="1" value="' . $datos["cantidad"] . '"><br>';


    } catch (\Throwable $th) {
        //echo $th;
        //throw $th;
        //almacenar en bitacora (apache) el error
        //devolver un mensaje al usuaro más acorde a su función
        //almacer en archivos o tablas y bitacoras propias
    } finally {
        Desconecta($conexion2);
    }
}
function recogeGet($var, $m = "")
{
    //isset devuelve false null
    if (!isset($_GET[$var])) {
        //is_array 
        $tmp = (is_array($m)) ? [] : "";
    } elseif (!is_array($_GET[$var])) {
        //trim recortar caracteres en blanco al inicio y al final
        //htmlspecialchars convierte caracteres en entidades html
        // ENT_COMPAT: predeterminado. Codificar comillas dobles
        // ENT_QUOTES - Codifica comillas dobles como simples
        // ENT_NOQUOTES - no codifica comillas
        $tmp = trim(htmlspecialchars($_GET[$var], ENT_QUOTES, "UTF-8"));
    } else {
        $tmp = $_GET[$var];
        //array_walk_recursive recorrer la matriz
        array_walk_recursive($tmp, function (&$valor) {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}
?>