<html>
<head>
	<title>Inscripción a carrera</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			<?php
			    require_once("config/db_conexion.php");

			    if ($_POST) 
			    {
			    	print_r($_POST);
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

							<button name="ok" class="btn btn-primary" role="button">Inscribirme</button>
						</form>
					</fieldset>
					<?php
				}	
			?>		
			</div>
		</div>
	</div>
</body>
</html>