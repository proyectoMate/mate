<?php
require('functions/funciones.php')
?>
<html>
<head>
	<?php
	head("Aspirantes");
	?>
</head>
<body>

	<form action="abm.php" method="POST" class="form-horizontal">
		<fieldset>
			<!-- Form Name -->
			<legend>Datos Personales</legend>
			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="apellido"></label>  
				<div class="col-md-4">
					<input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md" required="Falta completar Apellido">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="nombre"></label>  
				<div class="col-md-4">
					<input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="dni"></label>  
				<div class="col-md-4">
					<input id="dni" name="dni" type="text" placeholder="DNI" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="estadoCivil"></label>  
				<div class="col-md-4">
					<input id="estadoCivil" name="estadoCivil" type="text" placeholder="Estado Civil" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="fNacimiento"></label>  
				<div class="col-md-4">
					<input id="fNacimiento" name="fNacimiento" type="text" placeholder="Fecha de Nacimiento" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="lugarNacimiento"></label>  
				<div class="col-md-4">
					<input id="lugarNacimiento" name="lugarNacimiento" type="text" placeholder="Lugar de Nacimiento" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="cantHijos"></label>  
				<div class="col-md-4">
					<input id="cantHijos" name="cantHijos" type="text" placeholder="Cant. Hijos" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="FamACargo"></label>  
				<div class="col-md-4">
					<input id="FamACargo" name="FamACargo" type="text" placeholder="Familiares a cargo" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="domicilio"></label>  
				<div class="col-md-4">
					<input id="domicilio" name="domicilio" type="text" placeholder="Domicilio" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="numDomcilio"></label>  
				<div class="col-md-4">
					<input id="numDomcilio" name="numDomcilio" type="text" placeholder="Nro" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="pisoDomicilio"></label>  
				<div class="col-md-4">
					<input id="pisoDomicilio" name="pisoDomicilio" type="text" placeholder="Piso" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="dptoDomicilio"></label>  
				<div class="col-md-4">
					<input id="dptoDomicilio" name="dptoDomicilio" type="text" placeholder="Dpto" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="localidad"></label>  
				<div class="col-md-4">
					<input id="localidad" name="localidad" type="text" placeholder="Localidad" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="partidp"></label>  
				<div class="col-md-4">
					<input id="partidp" name="partidp" type="text" placeholder="Barrio / Partido" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="codigoPostal"></label>  
				<div class="col-md-4">
					<input id="codigoPostal" name="codigoPostal" type="text" placeholder="C&oacute;digo Postal" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="tel"></label>  
				<div class="col-md-4">
					<input id="tel" name="tel" type="text" placeholder="Tel&eacute;fono" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="telAlternativo"></label>  
				<div class="col-md-4">
					<input id="telAlternativo" name="telAlternativo" type="text" placeholder="Tel&eacute;fono alternativo" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="pertenecaA"></label>  
				<div class="col-md-4">
					<input id="pertenecaA" name="pertenecaA" type="text" placeholder="Pertenece a " class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="email"></label>  
				<div class="col-md-4">
					<input id="email" name="email" type="text" placeholder="Correo electr&oacute;nico" class="form-control input-md" required="">  
				</div>
			</div>

		</fieldset>

		<fieldset>
			<legend>Estudios Cursados</legend>
			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="titulo"></label>  
				<div class="col-md-4">
				<input id="titulo" name="titulo" type="text" placeholder="T&iacute;tulo o Nivel Medio o Polimodal" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="anioEgreso"></label>  
				<div class="col-md-4">
					<input id="anioEgreso" name="anioEgreso" type="text" placeholder="A&ntilde;o de egreso" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="escuela"></label>  
				<div class="col-md-4">
					<input id="escuela" name="escuela"escuela type="text" placeholder="Escuela" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="distrito"></label>  
				<div class="col-md-4">
					<input id="distrito" name="distrito" type="text" placeholder="Distrito" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="otrosEstudios"></label>  
				<div class="col-md-4">
					<input id="otrosEstudios" name="otrosEstudios" type="text" placeholder="Otros estudios" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="institucion"></label>  
				<div class="col-md-4">
					<input id="institucion" name="institucion" type="text" placeholder="Instituci&oacute;n" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="otrosEgresos"></label>  
				<div class="col-md-4">
					<input id="otrosEgresos" name="otrosEgresos" type="text" placeholder="A&ntilde;o egreso" class="form-control input-md" required="">  
				</div>
			</div>
		</fieldset>


		<fieldset>
			<legend>Datos Laborales</legend>
			<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="trabaja"></label>  
				<div class="col-md-4">
					<input id="trabaja" name="trabaja" type="text" placeholder="Trabaja" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
			<label class="col-md-4 control-label" for="actividad"></label>  
				<div class="col-md-4">
				<input id="actividad" name="actividad" type="text" placeholder="Actividad" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
			<label class="col-md-4 control-label" for="horarioHabitual"></label>  
				<div class="col-md-4">
				<input id="horarioHabitual" name="horarioHabitual" type="text" placeholder="Horario habitual" class="form-control input-md" required="">  
				</div>
			</div>
			<div class="form-group">
			<label class="col-md-4 control-label" for="obraSocial"></label>  
				<div class="col-md-4">
				<input id="obraSocial" name="obraSocial" type="text" placeholder="Obra Social" class="form-control input-md" required="">  
				</div>
			</div>




		</fieldset>


		<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for=""></label>
			<div class="col-md-4">
				<button id="" name="registrar" value="OK" class="btn btn-primary">Registrarme</button>
			</div>
		</div>
	</form>
</body>
</html>