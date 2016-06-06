<?php

 /*$ok=$_POST["ok"];
 if($ok==Enviar) 
 {*/

define("host_db",'localhost');
define("user_db",'root');
define('pass_db','root');
define('name_db','encuentro_inst');

	function conectar()
		{
			global $conexion;
			$conexion=mysql_connect(host_db,user_db,pass_db)or die ('no se pudo conectar');
			mysql_select_db(name_db)or die ('no se encuentra BD'.name_db);
		}

	function desconectar()

		{
			global $conexion;
			mysql_close($conexion);
		}	

    $nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$inst=$_POST["inst"];
	$cargo=$_POST["cargo"];
	$mail=$_POST["mail"];
	$telef=$_POST["telef"];

   // recupero todas las variables
conectar();

$sql.="insert into datos (nombre,apellido,instituto,cargo_inst,mail,telefono)";
$sql.="values('".$nombre."','".$apellido."','".$inst."','".$cargo."','".$mail."','".$telef."')";
$resultado=mysql_query($sql);

	if(!$resultado)
	{
		echo"error en ingreso".mysql_error();
		exit();
	}
	
else
	{	 echo"<script>alert('Registrado correctamente')</script>";
		echo"<script>document.location.href='formulario.html';</script>";
	}

desconectar();
/*}
else
{
	echo"<script>alert('No completaste el formulario!!!')</script>";
	echo"<script>document.location.href='formulario.html';</script>";
}*/
?>