<?php
/**
  * Este ejemplo muestra las opciones para usar cuando se envían a través de los servidores de Gmail de Google.
  */

// SMTP necesita tiempos precisos, y la zona horaria PHP deberá ser fijado
// Esto debe hacerse en su php.ini, pero esta es la forma de hacerlo si no tiene acceso a esa
function enviarmail($enviarA='vegaluis.v@gmail.com',$nomyape='Luis Vega',$dni,$pass,$serv='localhost',$asunto='Activacion de su cuenta en Proyecto Mate')
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
<body>
<h2>Gracias por registrarse, como ultimo paso para poder acceder con su usuario: '.$dni.' y password: '.$pass.'</h2>
<br><br>
<a href="'.$serv.'/mate/validar.php?x='.sha1($dni).'&y='.sha1($pass).'" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-envelope"></span> Confirmar Mail</a>
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