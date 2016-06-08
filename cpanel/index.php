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

?>
<!DOCTYPE html>
<html>
<?php
head();

?>
<body>

     <div id="wrapper">

            <?php
                top_menu($_SESSION["id"]);
            ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Panel de Control / Bienvenido </h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
<?php

?>                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
