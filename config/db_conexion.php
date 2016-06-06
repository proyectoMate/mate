<?php
/* conexion con base de datos */
function definirdatosBD($pass,$name, $host='localhost',$user='root')
{
        define('HOST_DB', $host);
        define('USER_DB', $user);
        define('PASS_DB', $pass);
        define('NAME_DB', $name);
}

function conectarBD()
{
        definirdatosBD('33667241a', 'proyectoMate');
        global $conexion; 
        $conexion=mysql_connect(HOST_DB,USER_DB,PASS_DB)
        OR die('NO SE PUEDE ABRIR BD');
        mysql_select_db(NAME_DB) or die('NO SE ENCONTRO BD');
}

function desconectarBD()
{       
        global $conexion;
        mysql_close($conexion);
}
?>
