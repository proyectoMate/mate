<?php

$email='vegaluis.v@gmail.com';
$asunto='Nuevo Reclamo';
$nomyape='Sin Datos';
$cuerpo='Nuevo reclamo falta crear cuerpo';

$email=$_POST['email'];
$asunto=$_POST['asunto'];
$nomyape=$_POST['nomyape'];
$cuerpo=$_POST['cuerpo'];

require './PHPMailer/PHPMailerAutoload.php';

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
$mail->setFrom('reclamostecnico.ddi@gmail.com', 'Reclamos Tecnicos');

// Establecer una alternativa dirección de respuesta
$mail->addReplyTo('reclamostecnico.ddi@gmail.com', 'Reclamos Tecnicos');

// Set que se va a enviar al mensaje
$mail->addAddress($email, $nomyape);

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