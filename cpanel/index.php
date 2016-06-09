<?php
    session_start();
    header("Content-Type: text/html; charset=ISO-8859-1");
    if(!$_SESSION){
        echo'<script>window.location="../index.php";</script>';
        die();
    }

    require("functions/generales.php");

/*    SELECT u.id, u.rol_id, up.id_perfil, pm.idMenu, m.nombreMenu FROM usuarios as u
INNER JOIN usuariosPerfiles as up ON u.id =  up.id_usuario
INNER JOIN perfilesMenu as pm on up.id_perfil = pm.idPerfil
INNER JOIN menus as m on pm.idMenu = m.id*/

$sql = "SELECT * FROM usuarios WHERE  id = ".$_SESSION['id']."";
conectarBD();

$reg = mysql_query($sql);
while ($registro = mysql_fetch_array($reg))
{

    $nombre = $registro['nombre'];
    $apellido = $registro['apellido'];
}

?>
<!DOCTYPE html>
<html>
<?php
$tit = "Panel de Control :: ".$apellido." ".$nombre."";
head($tit);

?>
<body>

     <div id="wrapper">

            <?php
                top_menu($_SESSION["id"]);
            ?>

        <div id="page-wrapper">
           <div class="row" id="tabla_titu_registros">
                <div class="col-lg-12">
                    <h3 class="page-header">Bienvenido <?php echo $apellido." ".$nombre; ?></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row" id="tabla_registros">
                <div class="col-lg-12">
                    <div class='panel panel-default'>
                        <!-- <div class='panel-heading'><a href="" class="btn btn-success" role="button">Nuevo</a> -->
                        </div>
                        <div class='panel-body'> 
                            <div class='table-/responsive'>
                            <?php
                            //echo $_SESSION['id'];
                            ?>
                            <!--     <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                
 
                                        </tr>
                                    </thead>
                                    <tbody id="tabla_alumnos">
                                    <?php

                                    ?>
                                    </th></tr>
                                    </tbody>
                                </table> -->
                            </div><!-- Fin table-responsive -->    
                        </div><!-- Fin panel-body -->    
                    </div><!-- Fin panel panel-default -->
                </div><!-- Fin col-lg-12 -->
            </div> <!-- Fin row -->  
        </div>
        <!-- /#page-wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="../js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="../js/demo/dashboard-demo.js"></script>

</body>

</html>
