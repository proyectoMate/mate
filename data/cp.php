<?php
    header("Content-Type: text/html; charset=ISO-8859-1");
    require_once("../config/db_conexion.php");
	$localidad = $_POST["elegido"];

	conectarBD();

	$sql = "SELECT cp
			FROM localidadPartidoCp
			WHERE localidad = '".$localidad."'";

    $resultado = mysql_query($sql);
    if (!$resultado) 
    {
        echo "La consulta contiene errores.";
        exit();
    }
    else
    {
        $resultado = mysql_fetch_array($resultado, MYSQL_ASSOC);
        echo "<option value='".$resultado["cp"]."'>".$resultado["cp"]."</option>";
    }
?>