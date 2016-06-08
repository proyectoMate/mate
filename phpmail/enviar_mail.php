<?php
/**
  * Este ejemplo muestra las opciones para usar cuando se envían a través de los servidores de Gmail de Google.
  */

// SMTP necesita tiempos precisos, y la zona horaria PHP deberá ser fijado
// Esto debe hacerse en su php.ini, pero esta es la forma de hacerlo si no tiene acceso a esa
function enviarmail($enviarA='vegaluis.v@gmail.com',$nomyape='Luis Vega',$dni,$pass,$serv='http://proyectomate.ddns.net',$asunto='Activacion de su cuenta en Proyecto Mate')
{

date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';


$cuerpo='
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<style>
* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow:hidden; }

body { 
	width: 100%;
	height:100%;
	font-family: "Open Sans", sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#3E1D6D", endColorstr="#092756",GradientType=1 );
}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
</style>
<body>
<h2>Gracias por registrarse, como ultimo paso para poder acceder con su usuario: '.$dni.' y password: '.$pass.'</h2>
<br><br>
	<center><h2><a href="'.$serv.'/validar.php?x='.sha1($dni).'&y='.sha1($pass).'" class="btn btn-block btn-lg btn-success">
	<span class="glyphicon glyphicon-envelope"></span> Confirmar Mail</a></h2><center>
</body>
</html>';
// Crear una nueva instancia PHPMailer
$mail = new PHPMailer;

// Indicar PHPMailer utilizar SMTP
$mail->isSMTP();

// Habilitar depuración SMTP
// 0 = apagado (para uso en producción)
// 1 = mensajes del cliente
// 2 = cliente y servidor de mensajes
$mail->SMTPDebug = 2;

// Obtener la salida de depuración de usar HTML
$mail->Debugoutput = 'html';

// Establecer el nombre de host del servidor de correo
$mail->Host = 'smtp.gmail.com';
// utilizar
// $ Mail-> Host = gethostbyname ('smtp.gmail.com');
// Si la red no admite SMTP a través de IPv6

// Establecer el número de puerto SMTP - 587 para TLS autenticado, presentación SMTP alias RFC4409
$mail->Port = 587;

// Establecer el sistema de encriptación de usar - SSL (en desuso) o TLS
$mail->SMTPSecure = 'tls';

// Si se debe usar la autenticación SMTP
$mail->SMTPAuth = true;

// Nombre de usuario a utilizar para la autenticación SMTP - introduzca la dirección de correo electrónico completa de Gmail
$mail->Username = "reclamostecnico.ddi@gmail.com";

// Contraseña a utilizar para la autenticación SMTP
$mail->Password = "sistemas2016";

// Set que se va a enviar el mensaje de
$mail->setFrom('info.proyectomate@gmail.com', 'Proyecto Mate');

// Establecer una alternativa dirección de respuesta
$mail->addReplyTo('info.proyectomate@gmail.com', 'Proyecto Mate');

// Set que se va a enviar al mensaje
$mail->addAddress($enviarA, $nomyape);

// Establecer la línea de asunto
$mail->Subject = $asunto;

// Lea un cuerpo de mensaje HTML desde un archivo externo, convertir las imágenes referenciadas a incrustado,
// Convertir HTML en un cuerpo alternativo de texto sin formato básico
$mail->msgHTML($cuerpo);

// Sustituir el cuerpo de texto plano con una creada manualmente
//$mail->AltBody = 'This is a plain-text message body';

// Adjuntar un archivo de imagen
//$mail->addAttachment('images/phpmailer_mini.png');

// Enviar el mensaje, comprobar si hay errores
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

} // fin funcion