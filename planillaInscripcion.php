<?php
	require('fpdf/code128.php');
	require_once("config/db_conexion.php");
	$idUsuario = $_GET["id"];

	conectarBD();

	//Creo un objeto de la clase Code128 donde:
	//P es la orientación de la hoja
	//mm la unidad que voy a utilizar
	//A4 el tamaño de la hoja
	$pdf = new PDF_Code128('P','mm','A4');

	//Creo una nueva página
	$pdf->AddPage();
	$pdf->SetFont('Arial','',8);

	//Agrego la imagen
	$pdf->Image("imagenes/fichaInscripcion.jpg",0,0,210,297);

	//Si tiene foto se agrega en
	//$pdf->Image("imagenes/xxxxxx.jpg",149,37,45,45);

	## INSTITUTO ##
	$instituto = "177";
	$pdf->SetXY(141.3,32.5);
	$pdf->Write(0,$instituto);

	$pdf->SetFont('Arial','',10);

	## AÑO ##
	$anio = "2017";
	$pdf->SetXY(119.1,46.5);
	$pdf->Write(0,$anio);

	$pdf->SetFont('Arial','',8);

	## CARRERA ##
	$carrera = utf8_decode("Tecnicatura Superior en Tecnología en Salud con especialidad en Laboratorio de Análisis Clínicos");
	//Si el string es mayor a 79 lo corto y el resto lo ubico en el renglón siguiente
	if (strlen($carrera) > 79) 
	{
		$str1 = substr($carrera, 0,79);
		$str2 = substr($carrera, 79);

		$pdf->SetXY(36.4,58);
		$pdf->Write(0,$str1);

		$pdf->SetXY(17,61.9);
		$pdf->Write(0,$str2);
	}
	else
	{
		$pdf->SetXY(36.4,58);
		$pdf->Write(0,$carrera);
	}

	## TURNO ##
	$turno = utf8_decode("Noche");
	$pdf->SetXY(117.7,61.9);
	$pdf->Write(0,$turno);

	## APELLIDO Y NOMBRES ##
	$apeNom = utf8_decode("Greco Matías David");
	$pdf->SetXY(48.4,83.6);
	$pdf->Write(0,$apeNom);

	## SEXO ##
	$sexo = utf8_decode("Masculino");
	$pdf->SetXY(139.2,83.6);
	$pdf->Write(0,$sexo);

	## DNI ##
	$dni = 37362306;
	$pdf->SetXY(25.4,89.5);
	$pdf->Write(0,$dni);

	## FECHA Y LUGAR DE NACIMIENTO ##
	$fechaYLugar = utf8_decode("11/03/1993 San Miguel");
	$pdf->SetXY(95,89.5);
	$pdf->Write(0,$fechaYLugar);

	## ESTADO CIVIL ##
	$estCivil = utf8_decode("Soltero");
	$pdf->SetXY(36.7,95.4);
	$pdf->Write(0,$estCivil);

	## CANTIDAD DE HIJOS ##
	$cantHijos = 0;
	$pdf->SetXY(86,95.4);
	$pdf->Write(0,$cantHijos);

	## FAMILIARES A CARGO ##
	$famCargo = 0;
	$pdf->SetXY(137,95.4);
	$pdf->Write(0,$famCargo);

	## DOMICILIO ##
	$domicilio = utf8_decode("Dean Funes");
	$pdf->SetXY(33.3,101.3);
	$pdf->Write(0,$domicilio);

	## NUMERO ##
	$numero = 1281;
	$pdf->SetXY(107.3,101.3);
	$pdf->Write(0,$numero);

	## PISO ##
	$piso = utf8_decode("---");
	$pdf->SetXY(130.1,101.3);
	$pdf->Write(0,$piso);

	## DEPARTAMENTO ##
	$depto = utf8_decode("---");
	$pdf->SetXY(150.6,101.3);
	$pdf->Write(0,$depto);

	## LOCALIDAD / BARRIO ##
	$locBarrio = utf8_decode("Barrio Pompeya");
	$pdf->SetXY(34.7,107.2);
	$pdf->Write(0,$locBarrio);

	## PARTIDO ##
	$partido = utf8_decode("Merlo");
	$pdf->SetXY(117.8,107.2);
	$pdf->Write(0,$partido);

	## CÓDIGO POSTAL ##
	$cp = 1722;
	$pdf->SetXY(40.3,113);
	$pdf->Write(0,$cp);

	## TELÉFONO ##
	$telefono1 = utf8_decode("011 15 33268437");
	$pdf->SetXY(72.6,113);
	$pdf->Write(0,$telefono1);

	## TELÉFONO ALTERNATIVO ##
	$telefono2 = utf8_decode("0220 4891730");
	$pdf->SetXY(143.2,113);
	$pdf->Write(0,$telefono2);

	## PERTENECE A ##
	$perteneceA = utf8_decode("Propio (casa)");
	$pdf->SetXY(37.8,118.9);
	$pdf->Write(0,$perteneceA);

	## EMAIL ##
	$email = utf8_decode("matiasdgreco@gmail.com");
	$pdf->SetXY(120.4,118.9);
	$pdf->Write(0,$email);

	## TITULO SECUNDARIO ##
	$titSec = utf8_decode("Bachiller en Ciencias Naturales");
	$pdf->SetXY(64.7,139.5);
	$pdf->Write(0,$titSec);

	## AÑO DE EGRESO ##
	$anioEgreso = 2010;
	$pdf->SetXY(156,139.5);
	$pdf->Write(0,$anioEgreso);

	## ESCUELA ##
	$escuela = utf8_decode("E.E.M. N° 16");
	$pdf->SetXY(31.7,145.5);
	$pdf->Write(0,$escuela);

	## DISTRITO ##
	$distrito = utf8_decode("Merlo");
	$pdf->SetXY(130.4,145.5);
	$pdf->Write(0,$distrito);

	## OTROS ESTUDIOS ##
	$otrosEstudios = utf8_decode("Tecnicatura Superior en Análisis de Sistemas");
	$pdf->SetXY(41.6,151.3);
	$pdf->Write(0,$otrosEstudios);

	## INSTITUCIÓN ##
	$institucion = utf8_decode("I.S.F.T. N° 177");
	$pdf->SetXY(34.9,157.1);
	$pdf->Write(0,$institucion);

	## AÑO DE EGRESO ##
	$anioEgreso = 2016;
	$pdf->SetXY(157.5,157.1);
	$pdf->Write(0,$anioEgreso);

	## DATOS LABORALES ##
	$trabaja = true;
	if ($trabaja == true) 
	{
		$pdf->SetXY(35.8,178);
		$pdf->Write(0,"X");
	}
	else
	{
		$pdf->SetXY(57.6,178);
		$pdf->Write(0,"X");
	}

	## ACTIVIDAD ##
	$actividad = utf8_decode("Programador");
	$pdf->SetXY(86.2,177.5);
	$pdf->Write(0,$actividad);

	## HORARIO HABITUAL ##
	$horarioHab = utf8_decode("Lunes a viernes de 12 a 18 hs.");
	$pdf->SetXY(43.6,185.4);
	$pdf->Write(0,$horarioHab);

	## OBRA SOCIAL ##
	$obraSocial = utf8_decode("I.O.M.A.");
	$pdf->SetXY(116.8,185.4);
	$pdf->Write(0,$obraSocial);

	$pdf->SetFont('Arial','',10);
	
	## DIA ##
	$dia = date('d');
	$pdf->SetXY(153.5,204.1);
	$pdf->Write(0,$dia);

	## MES ##
	$mes = date('m');
	$pdf->SetXY(166.3,204.1);
	$pdf->Write(0,$mes);

	## AÑO ##
	$anio = date('y');
	$pdf->SetXY(181.3,204.1);
	$pdf->Write(0,$anio);

	

	//Cierro el .pdf
	//Nombre del archivo
	//"I" lo muestra en el navegador
	$apeNom = str_replace(" ", "_", $apeNom);
	$pdf->Output("Formulario_A1_".$apeNom,"I",".pdf");
?>.pdf