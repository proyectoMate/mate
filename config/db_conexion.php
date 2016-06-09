<?php
/* conexion con base de datos */
        define('HOST_DB', 'localhost');
        define('USER_DB', 'root');
        define('PASS_DB', 'root');
        define('NAME_DB', 'proyectoMate');

function conectarBD()
{
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
