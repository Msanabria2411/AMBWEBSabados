<?php
include 'conexion_be.php';
function RetornarUsuarios() {
    try {
        //1. Estableciendo la conexion
        $conexion2 = Conecta();
        //2. Ejecutar la consulta
        $resultado = $conexion2->query("select id, nombre_completo, email,usuario,telefono,tipo from usuarios");

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
    echo "<th>Correo</th>";
    echo "<th>Usuario</th>";
    echo "<th>Teléfono</th>";
    echo "<th>Tipo</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";

    if($datos->num_rows > 0){
        while ($row = $datos->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['nombre_completo']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['usuario']}</td>";
            echo "<td>{$row['telefono']}</td>";
            if($row['tipo'] == 0){
                echo "<td>Cliente</td>";
            }else{
                echo "<td>Administrador</td>";
            }
            echo "<td><a href=\"mostrar.php?id={$row['id']}\">Mostrar</a></td>";

            echo "</tr>";
        }
    }else {
        echo "<tr><td>No hay registros de alumnos</td></tr>";
    }
    echo "</table>";
}
function RetorneUsuario($id) {
    try {
        //1. Estableciendo la conexion
        $conexion2 = Conecta();
        //2. Ejecutar la consulta
        $resultado = $conexion2->query("select id, nombre_completo, email,usuario,telefono,tipo from usuarios where id = $id");

        if($conexion2->error != ""){
            echo "Ocurrió un error al ejecutar la consulta : $conexion2->error";
        }

        //Mostrar los datos
        $datos = $resultado->fetch_assoc();
 
   echo '<label for="nombre_completo">Nombre: </label>';
   echo '<input type="text" name="nombre_completo" id="nombre_completo" value="'.$datos["nombre_completo"].'"><br>';  
   echo '<label for="email">Email: </label>';
   echo '<input type="email" name="email" id="email" value="'.$datos["email"].'"><br>'; 
   echo '<label for="user">Usuario: </label>';
   echo '<input type="text" name="user" id="user" value="'.$datos["usuario"].'"><br>'; 
   echo '<label for="telefono">Teléfono:</label>';  
   echo '<input type="number" name="telefono" id="telefono" value="'.$datos["telefono"].'"><br>';  
   echo '<select name="tipos" id="tipos">
         <option value="0"'.isSelected($datos["tipo"], "0").'>Cliente</option>
         <option value="1"'.isSelected($datos["tipo"], "1").'>Administrador</option>
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