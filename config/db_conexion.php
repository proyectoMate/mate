<?php
define('HOST_DB', 'localhost'); //Nombre del host, nomalmente localhost 
define('USER_DB', 'root'); //Usuario de la base de datos 
define('PASS_DB', 'root'); //Contraseña de la base de datos 
define('NAME_DB', 'mate'); //Nombre de la base de datos
//$conexion="";

function conectar()
{ 
	global $conexion; //Definición global para poder utilizar en todo el contexto 
	$conexion = mysql_connect(HOST_DB, USER_DB, PASS_DB) 
		or die ('NO SE HA PODIDO CONECTAR AL MOTOR DE LA BASE DE DATOS'); 
	mysql_select_db(NAME_DB) 
		or die ('NO SE ENCUENTRA LA BASE DE DATOS ' . NAME_DB);

/*  	if ($conexion == TRUE){
	echo "Se ha conectado a la base de datos con éxito. \n";
}*/
} 

function desconectar()
{ 
	global $conexion; 
	mysql_close($conexion); 
}
?>
