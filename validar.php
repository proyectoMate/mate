<?php
    require_once './functions/funciones.php';
    require'./config/db_conexion.php';
    head('Logueo');
    echo '<link type="text/css" href="css/plugins/index/normalize.css" rel="stylesheet" >';
	
	$sha1dni=$_GET['x'];
	$pass=$_GET['y'];
	$idBuscado=0;
	conectarBD();
	$consulta = "SELECT * FROM usuarios";
    $sql = mysql_query($consulta);
    if(!$sql)
     {
       $mostrar="error en ingreso".mysql_error();
       msgbox($mostrar);
     }
    else
      {   
	      while($row = mysql_fetch_array($sql))
        {
	        if(sha1($row['dni'])==$sha1dni)
	        {
	        	if ($row['password']==$pass) 
				{
		        	$idBuscado=$row['id'];
		        	$estadoAnterior=$row['estado'];
		        	$nomyape=$row['nombre'].' '.$row['apellido'];

	        	}
	        	else msgbox('usuario correcto , pass incorrecto');
	        }
        }
      }
	desconectarBD();
	if (($idBuscado!=0)AND($estadoAnterior==0)) 
	{
	    conectarBD();
	    $sql = "UPDATE usuarios SET estado = 1, rol_id = 1 WHERE id = ".$idBuscado;
	    $resultado=mysql_query($sql);
	    if (!$resultado) 
	    {
	            msgbox('ERROR en la consulta SQL_UPDATE');
	    }
	    desconectarBD();
	    msgbox('Se activo su cuenta Sr. '.$nomyape);
	    f_ir_a('index.php');
	}
	else
		{
			if ($estadoAnterior>0) {
			msgbox('usted ya se encuentra activo');
		    f_ir_a('index.php');
			}
			else {msgbox('id no encontrado');}
		}
 ?>
 </div> <!-- Cierre del container NO BORRAR-->
</body>
</html>