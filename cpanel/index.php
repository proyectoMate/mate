<?php
    header("Content-Type: text/html; charset=ISO-8859-1");
    require("functions/generales.php");

?>
<!DOCTYPE html>
<html>
<?php
head();

?>
<body>

     <div id="wrapper">

            <?php
                top_menu();
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
