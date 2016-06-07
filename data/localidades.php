<?php
    header("Content-Type: text/html; charset=ISO-8859-1");
    require_once("../config/db_conexion.php");
	$partido = $_POST["elegido"];

	conectarBD();

	$sql = "SELECT DISTINCT localidad
			FROM localidadPartidoCp
			WHERE cod_partido = '".$partido."'
			ORDER BY localidad ASC ";

    $resultado = mysql_query($sql);
    if (!$resultado) 
    {
        echo "La consulta contiene errores.";
        exit();
    }
    else
    {
        $tabla = array();

        while($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
        {
            if ($fila["localidad"] != "") 
            {
                array_push($tabla, $fila["localidad"]);
            }
        }
    }

    foreach ($tabla as $fila) 
    {
    	echo "<option value='".$fila."'>".$fila."</option>";
    }
?>