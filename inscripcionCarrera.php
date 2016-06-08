<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Inscripción a carrera</title>
	<meta charset="UTF-8"> 
=======
<html>
<head>
	<title>Inscripción a carrera</title>
	<meta charset="UTF-8">
>>>>>>> c5357155961692f4a46cdd862c39276dde562282
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<div class="container">
<<<<<<< HEAD
	-->
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<?php
			require_once("config/db_conexion.php");

			    if ($_POST['ok']=='registrofin') 
			    {
			    	//print_r($_POST);
			    	array_pop($_POST);
			    	//print_r($_POST);
				    conectarBD();
				    foreach ($_POST as $key => $value) 
				    {
				            $sql = "UPDATE usuarios SET ".$key." = '".$value."' WHERE dni = ".$_SESSION['usuario'];
				            //print_r($sql);
				            $resultado=mysql_query($sql);
				            if (!$resultado) 
				            {
				                $error='ERROR en la consulta SQL_UPDATE'.print_r($key).' '.print_r($value);
				                msgbox($error);
				                exit();
				            }
				    }
				    desconectarBD();
				    f_ir_a('./cpanel/index.php');
=======
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<?php
			    require_once("config/db_conexion.php");

			    if ($_POST) 
			    {
			    	print_r($_POST);
>>>>>>> c5357155961692f4a46cdd862c39276dde562282
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
<<<<<<< HEAD
							        desconectarBD();
=======
>>>>>>> c5357155961692f4a46cdd862c39276dde562282
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
<<<<<<< HEAD
								        }
								        desconectarBD(); 
=======
								        } 
>>>>>>> c5357155961692f4a46cdd862c39276dde562282
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

<<<<<<< HEAD
							<button name="ok" class="btn btn-primary" role="button" value="registrofin">Inscribirme</button>
=======
							<button name="ok" class="btn btn-primary" role="button">Inscribirme</button>
>>>>>>> c5357155961692f4a46cdd862c39276dde562282
						</form>
					</fieldset>
					<?php
				}	
			?>		
			</div>
		</div>
<<<<<<< HEAD
	<!--</div>
</body>
</html>
-->
=======
	</div>
</body>
</html>
>>>>>>> c5357155961692f4a46cdd862c39276dde562282
