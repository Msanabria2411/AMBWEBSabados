<?php
include 'conexion_be.php';


function RetornarPlatillos() {
    try {
        //1. Estableciendo la conexion
        $conexion2 = Conecta();
        //2. Ejecutar la consulta
        $resultado = $conexion2->query("select id, nombre, descripcion, precio, tipo from menu");

        if($conexion2->error != ""){
            echo "Ocurrió un error al ejecutar la consulta : $conexion2->error";
        }

        //Mostrar los datos
        ImprimirDatos($resultado);

    } catch (\Throwable $th) {
        
    }finally{
        Desconecta($conexion2);
    }
}

function ImprimirDatos($datos) {
    echo '<table class="table">';
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Descripcion</th>";
    echo "<th>Precio</th>";
    echo "<th>Tipo</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";

    if($datos->num_rows > 0){
        while ($row = $datos->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['nombre']}</td>";
            echo "<td>{$row['descripcion']}</td>";
            echo "<td>{$row['precio']}</td>";
            if($row['tipo'] == 1){
                echo "<td>Entrada</td>";
            }elseif($row['tipo'] == 2){
                echo "<td>Bebida</td>";
            }elseif($row['tipo'] == 3){
                echo "<td>Plato Fuerte</td>";
            }else{
                echo "<td>Postre</td>";
            }
            echo "<td><a href=\"MenuMostrar.php?id={$row['id']}\">Mostrar</a></td>";

            echo "</tr>";
        }
    }else {
        echo "<tr><td>No hay registros de platillos</td></tr>";
    }
    echo "</table>";
}

function RetornePlatillo($id) {
    try {
        //1. Estableciendo la conexion
        $conexion2 = Conecta();
        //2. Ejecutar la consulta
        $resultado = $conexion2->query("select id, nombre, descripcion, precio, tipo from menu where id = $id");

        if($conexion2->error != ""){
            echo "Ocurrió un error al ejecutar la consulta : $conexion2->error";
        }

        //Mostrar los datos
        $datos = $resultado->fetch_assoc();
 
   echo '<label for="nombre">Nombre:  </label>';
   echo '<input type="text" name="nombre" id="nombre" value="'.$datos["nombre"].'"><br>';  
   echo '<label for="descripcion">Descripción: </label><br>';
   echo '<textarea name="descripcion" id="descripcion" rows="4" cols="50" >'.$datos["descripcion"].'</textarea><br>';
   echo '<label for="precio">Precio:</label>';  
   echo '<input type="number" name="precio" id="precio" value="'.$datos["precio"].'"><br>'; 
   echo '<select name="tipos" id="tipos">
         <option value="1"'.isSelected($datos["tipo"], "1").'>Entrada</option>
         <option value="2"'.isSelected($datos["tipo"], "2").'>Bebida</option>
         <option value="3"'.isSelected($datos["tipo"], "3").'>Plato Fuerte</option>
         <option value="4"'.isSelected($datos["tipo"], "4").'>Postre</option>
         </select><br>' ;

    } catch (\Throwable $th) {
        //echo $th;
        //throw $th;
        //almacenar en bitacora (apache) el error
        //devolver un mensaje al usuaro más acorde a su función
        //almacer en archivos o tablas y bitacoras propias
    }finally{
        Desconecta($conexion2);
    }
}
function isSelected($valorActual, $valorDeseado) {
    $valorR = $valorActual === $valorDeseado ? "selected" : " ";
    return $valorR;
}
function recogeGet($var, $m ="")
{
    //isset devuelve false null
    if(!isset($_GET[$var])){
        //is_array 
        $tmp = (is_array($m)) ? [] : "";
    }elseif (!is_array($_GET[$var])){
        //trim recortar caracteres en blanco al inicio y al final
        //htmlspecialchars convierte caracteres en entidades html
        // ENT_COMPAT: predeterminado. Codificar comillas dobles
        // ENT_QUOTES - Codifica comillas dobles como simples
        // ENT_NOQUOTES - no codifica comillas
        $tmp = trim(htmlspecialchars($_GET[$var], ENT_QUOTES, "UTF-8"));
    }else{
        $tmp = $_GET[$var];
        //array_walk_recursive recorrer la matriz
        array_walk_recursive($tmp, function (&$valor)
        {
            $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
    }
    return $tmp;
}
?>