<?php
	
	require('config/db_conexion.php');

	if((isset($_POST['registrar'])=="OK")||(isset($_POST['registrar'])=="ACT"))
	{
		$apellido = $_POST['apellido'];
		$nombre = $_POST['nombre'];
		$dni = $_POST['dni'];
		$estadoCivil = $_POST['estadoCivil'];
		$fNacimiento = $_POST['fNacimiento'];
		$lugarNacimiento = $_POST['lugarNacimiento'];
		$cantHijos = $_POST['cantHijos'];
		$FamACargo = $_POST['FamACargo'];
		$domicilio = $_POST['domicilio'];
		$numDomcilio = $_POST['numDomcilio'];
		$pisoDomicilio = $_POST['pisoDomicilio'];
		$dptoDomicilio = $_POST['dptoDomicilio'];
		$localidad = $_POST['localidad'];
		$partidp = $_POST['partidp'];
		$codigoPostal = $_POST['codigoPostal'];
		$tel = $_POST['tel'];
		$telAlternativo = $_POST['telAlternativo'];
		$pertenecaA = $_POST['pertenecaA'];
		$email = $_POST['email'];
		$titulo = $_POST['titulo'];
		$anioEgreso = $_POST['anioEgreso'];
		$escuela = $_POST['escuela'];
		$distrito = $_POST['distrito'];
		$otrosEstudios = $_POST['otrosEstudios'];
		$institucion = $_POST['institucion'];
		$otrosEgresos = $_POST['otrosEgresos'];
		$trabaja = $_POST['trabaja'];
		$actividad = $_POST['actividad'];
		$horarioHabitual = $_POST['horarioHabitual'];
		$obraSocial = $_POST['obraSocial'];

		$sql="INSERT INTO `aspirantes`(`apellido`, `nombre`, `dni`, `estadoCivil`, `fechaNacimiento`, `lugar`, `cantHijos`, `fACargo`, `domicilio`, `nro`, `piso`, `dpto`, `localidad`, `barrioPartido`, `cp`, `telefono`, `telefonoAlternativo`, `nombreTelAlternativo`, `email`, `tiutloAcademico`, `anioEgresoAca`, `escuela`, `distrito`, `otrosEstudios`, `insitutcion`, `anioEgresoInsti`, `trabaja`, `actividad`, `horarioHabitual`, `obraSocial`) 
			  VALUES ('$apellido','$nombre','$dni','$estadoCivil','$fNacimiento','$lugarNacimiento',$cantHijos,$FamACargo,'$domicilio','$numDomcilio','$pisoDomicilio','$dptoDomicilio','$localidad','$partidp','$codigoPostal','$tel','$telAlternativo','$pertenecaA','$email','$titulo',$anioEgreso,'$escuela','$distrito','$otrosEstudios','$institucion',$otrosEgresos,/*'$trabaja'*/TRUE,'$actividad','$horarioHabitual','$obraSocial')";

		conectar();
		if(mysql_query($sql))
		{
			echo "Exito<br><br>";
		}
		desconectar();

		echo $sql."<br><br><br>";

		echo "apellido= ".$apellido."<br>";
		echo "nombre= ".$nombre."<br>";
		echo "dni= ".$dni."<br>";
		echo "estadoCivil= ".$estadoCivil."<br>";
		echo "fNacimiento= ".$fNacimiento."<br>";
		echo "lugarNacimiento= ".$lugarNacimiento."<br>";
		echo "cantHijos= ".$cantHijos."<br>";
		echo "FamACargo= ".$FamACargo."<br>";
		echo "domicilio= ".$domicilio."<br>";
		echo "numDomcilio= ".$numDomcilio."<br>";
		echo "pisoDomicilio= ".$pisoDomicilio."<br>";
		echo "dptoDomicilio= ".$dptoDomicilio."<br>";
		echo "localidad= ".$localidad."<br>";
		echo "partidp= ".$partidp."<br>";
		echo "codigoPostal= ".$codigoPostal."<br>";
		echo "tel= ".$tel."<br>";
		echo "telAlternativo= ".$telAlternativo."<br>";
		echo "pertenecaA= ".$pertenecaA."<br>";
		echo "email= ".$email."<br>";
		echo "titulo= ".$titulo."<br>";
		echo "anioEgreso= ".$anioEgreso."<br>";
		echo "escuela= ".$escuela."<br>";
		echo "distrito= ".$distrito."<br>";
		echo "otrosEstudios= ".$otrosEstudios."<br>";
		echo "institucion= ".$institucion."<br>";
		echo "otrosEgresos= ".$otrosEgresos."<br>";
		echo "trabaja= ".$trabaja."<br>";
		echo "actividad= ".$actividad."<br>";
		echo "horarioHabitual= ".$horarioHabitual."<br>";
		echo "obraSocial= ".$obraSocial."<br>";
	
	}

?>