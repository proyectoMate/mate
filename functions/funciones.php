<?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    error_reporting(E_ERROR);

function head($titulo='Sin titulo')
{?>           
    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
    <html>
        <head>    
            <meta  Content-Type="text/html"charset="encoding">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title><?php $titulo ?></title>

            <!-- Core CSS - Include with every page -->
            <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
            <link type="text/css" href="font-awesome/css/font-awesome.css" rel="stylesheet">

            <!-- Page-Level Plugin CSS - Dashboard -->
            <link type="text/css" href="css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
            <link type="text/css" href="css/plugins/timeline/timeline.css" rel="stylesheet">

            <!-- SB Admin CSS - Include with every page -->
            <link type="text/css" href="css/sb-admin.css" rel="stylesheet">

            <!-- Page-Level Plugin CSS - Tables -->
            <link type="text/css" href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
            

            <!-- Scrips -->
            <script src="./js/jquery.min.js"></script>
            <script src="./js/jquery-1.12.0.min.js"></script>
            <script src="./js/plugins/dataTables/jquery.dataTables.min.js"></script>
            <script src="./js/bootstrap.js"></script>
            <script src="./js/funciones.js"></script>
        </head>
        <body>
            <div class="container-fluid">
<?php
} //fin   function head($titulo='Sin titulo')
function f_footer()
{?>
                <br>    
                <div class="footer" style="background-color:#e6e6e6;">
                    <center>
                        <div class="about">
                            - Dirección de Informatica - &copy; <?php date('Y', $timestamp)?>
                        </div>
                    </center>
                </div>
            </div>
        </body>
    </html>
<?php
} // termina la funcion f_footer
function modal($id,$tituloModal,$cuerpoModal,$tam='md')
 {
?>
    <!-- Comienzo del Modal-->
    <div class="modal fade" id="<?php echo $id;?>" role="dialog">
      <div class="modal-dialog modal-<?php echo $tam;?>">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $tituloModal;?> </h4>
            </div>
            <div class="modal-body"><!-- abrimos modal-body -->
                <?php require_once('./layouts/'.$cuerpoModal);  ?>
            </div> <!-- cerramos modal-body -->
            <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal"> volver </button>
            </div>
        </div>
      </div>
    </div>
<?php
 } // fin de la funcion modal

function msgbox($texto)
{
    echo "
    <script type='text/javascript'>
    alert('".$texto."');
    </script>
    ";		
}
function f_ir_a($pagina)
{
			echo'<script>window.location="'.$pagina.'";</script>';
}


# ================== funciones con conexion a la base de datos ===================
function sql_crear_insert($post)
{

  array_pop($post); // elimino el ultimo valor del array post , busco eliminar el valor del boton
  $password='password'; //como se llama el name input password
  $values = ""; 
  $into = "";

  $sizeArray = count($post);
  $i = 0;
  //separo el post en su name y el valor
  foreach ($post as $campo => $valor) 
  {
    if ($i == ($sizeArray)){break;} // aca pregunto si llegue al final del post, de ser asi SALGO sin hacer nada
    else
    {
        if ($i != 0) // aca consulto si NO es el primer valor del post, de ser asi agrego la coma
        {
            $values .=",";
            $into .=",";
        }
    }
    $i ++;
    if ($campo == $password){$valor = sha1($valor);} // aqui encripto en caso de que el campo osea el name del form es lo cargado arriba como password
    // cuando todo lo anterior alla sido filtrado voy creando las variables
    $values .= "'".$valor."'";
    $into .= "".$campo."";
  }
  return "(".$into.") VALUES (".$values.");"; // devuelvo el insert solo le falta la primer parte
}

function sql_insert($tabla, $arrayPost)
{
  require ('./config/db_conexion.php');
  $sql="INSERT INTO ".$tabla.sql_crear_insert($arrayPost);
  #  etapa de conectar con la BD
  conectarBD();
  $resultado=mysql_query($sql);
  if(!$resultado)
    {
      $mostrar="error en ingreso".mysql_error();
      msgbox($mostrar);
    }
  else
    {   
      msgbox('Se ingreso correctamente');
    }
  desconectarBD();
}


function usuarioLogin($usuario, $contrasenia)
{
  require ('./config/db_conexion.php');
	conectarBD();
	$contrasenia = sha1($contrasenia);

	$sql = "SELECT * FROM usuarios WHERE dni='".$usuario."' AND password='".$contrasenia."'";
      $resultado = mysql_query($sql);
      if (!$resultado) 
      {
          msgbox("Su USS o PASS no estan registrados");
          return FALSE;
      }
      else
      {
      	return mysql_fetch_array($resultado, MYSQL_ASSOC);
      }
      desconectarBD();
} // fin usuarios
 
?>