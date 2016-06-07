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
           <div class="row" id="tabla_titu_registros">
                <div class="col-lg-12">
                    <h3 class="page-header">Alumnos</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row" id="tabla_registros">
                <div class="col-lg-12">
                    <div class='panel panel-default'>
                        <div class='panel-heading'><a href="" class="btn btn-success" role="button">Nuevo</a>
                        </div>
                        <div class='panel-body'> 
                            <div class='table-/responsive'>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr role="row">
                                            <th >Apellido</th>
                                            <th >Nombre</th>
                                            <th >DNI</th>
                                            <th ></th>
 
                                        </tr>
                                    </thead>
                                    <tbody id="tabla_alumnos">
                                    <?php
                                        $sqlx="SELECT * FROM usuarios ORDER BY apellido, nombre ASC";
                                        conectarBD();
                                        $resx=mysql_query($sqlx);

                                       // echo "<div id='buscando'>";
                                        while($reg=mysql_fetch_array($resx))
                                        {
                                            echo "<tr style='cursor:pointer;'class='gradeA even'>";
                                                echo '<td>'.$reg["apellido"].'</td>';
                                                echo '<td>'.$reg["nombre"].'</td>';
                                                echo '<td>'.$reg["dni"].'</td>';
                                                echo '<td><a target="_blank" href="../planillaInscripcion.php?id='.$reg["id"].'">PDF</a></td>';
                                      /*          if (strlen($reg["sitioweb"]) > 7)
                                                {
                                                  echo '<td onclick="bloquear_evento(event)"><a target="_blank "href="'.$reg["sitioweb"].'">Ir al Sitio</a></td>';
                                                }
                                                else
                                                {
                                                  echo '<td onclick="bloquear_evento(event)">N/A</a></td>';
                                                }   
                                                if ($reg["estado"] == "1")
                                                {
                                                  echo '<td id="estado_'.$reg["id"].'" onclick="bloquear_evento(event)" style="background-color:#47a447;"><span onclick="cambiar_estado('.$reg["id"].')"> Habilitado </span> </td>';
                                                }
                                                else 
                                                {
                                                    echo '<td id="estado_'.$reg["id"].'" onclick="bloquear_evento(event)" style="background-color:red;"><span onclick="cambiar_estado('.$reg["id"].')"> Deshabilitado</span> </td>';
                                                }*/
                                              echo "</tr>";
                                        }
                                    ?>
                                    </th></tr>
                                    </tbody>
                                </table>
                            </div><!-- Fin table-responsive -->    
                        </div><!-- Fin panel-body -->    
                    </div><!-- Fin panel panel-default -->
                </div><!-- Fin col-lg-12 -->
            </div> <!-- Fin row -->  
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

    <script src="../js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
