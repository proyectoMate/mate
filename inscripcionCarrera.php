<?php
    require_once("config/db_conexion.php");
    if ($_POST['ok']=='registrofin') 
    {
        array_pop($_POST);
        conectarBD();
        foreach ($_POST as $key => $value) 
        {
            $sql = "UPDATE usuarios SET ".$key." = '".$value."' WHERE dni = ".$_SESSION['usuario'];
            $resultado=mysql_query($sql);
            if (!$resultado) 
            {
                $error='ERROR en la consulta SQL_UPDATE'.print_r($key).' '.print_r($value);
                msgbox($error);exit();
            }
        }
        $tabla='usuarios';
        $columnavalor='estado';
        $valor='3';
        $columna='id';
        $id=$_SESSION['id'];
        sql_update_uno($tabla,$columnavalor,$valor,$columna,$id);
        desconectarBD();
        f_ir_a('./cpanel/index.php');
    }
    else
    {
    ?>
    <fieldset>
    <legend>Inscribirme a una carrera</legend>
    <form method="POST" action="">
        <div class="form-group">
            <label>Instituto</label>
            <select class="form-control" id="instituto" name="idInstituto">
            <?php
            conectarBD();
            $sql="SELECT * FROM institutos ORDER BY nombre ASC";
            $resultado = mysql_query($sql);
            if (!$resultado) 
            {
                echo "La consulta contiene errores.";exit();
            }
            else
            {  
                while($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
                {
                    echo "<option value='".$fila["id"]."'>".utf8_decode($fila["nombre"])."</option>";
                }
            } 
            desconectarBD();
            ?>
            </select>
        </div>
        <div class="form-group">
            <label>Carrera</label>
            <select class="form-control" id="carrera" name="idCarreras">
            <?php
            conectarBD();
            $sql="SELECT * FROM carreras ORDER BY nombre ASC";
            $resultado = mysql_query($sql);
            if (!$resultado) 
            {
                echo "La consulta contiene errores.";
                exit();
            }
            else
            {  
                while($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
                {
                    echo "<option value='".$fila["id"]."'>".utf8_decode($fila["nombre"])."</option>";
                }
            }
            desconectarBD();
?>
            </select>
        </div>
        <div class="form-group">
        <label>Turno</label>
        <select class="form-control" id="turno" name="idTurno">
            <option value="noche">Noche</option>
        </select>
	</div>

        <div class="form-group">
            <label>Año</label>
                <select class="form-control" name="anio">
                <?php
		echo "<option value='".date("Y")."'>".date("Y")."</option>"; 
		$anioQueViene = date("Y") + 1;
		echo "<option value='".$anioQueViene."'>".$anioQueViene."</option>"; 
		?>
		</select>
	</div>
        <button name="ok" class="btn btn-primary" role="button" value="registrofin">Inscribirme</button>
    </form>
    </fieldset>
<?php 
    }	
?>