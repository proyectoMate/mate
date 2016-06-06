<?php
if ($_POST['boton']=='etapa3') 
{
    sql_update_post($_POST, 'usuarios', 'dni', $_SESSION['usuario']);
    f_ir_a('inscripcion.php?etapa=3');
}
$datosForm=  sql_devuelve_detalle('usuarios', 'dni', $_SESSION['usuario']);
?>
<h2>Paso 2 de 3 </h2>
<legend>Estudios Cursados</legend>
<form action="" method="POST" role="form" autocomplete="off">
<div class="row">
    <!-- Inicio Columna 1 -->
    <div class="col-sm-6">
        <!-- Text input-->
        <div class="form-group">
            <label class="control-label" for="titulo">T&iacute;tulo o Nivel Medio o Polimodal</label>  
            <input id="titulo" name="titulo" type="text" placeholder="T&iacute;tulo o Nivel Medio o Polimodal" class="form-control input-sm" required="">  
        </div>
       
        <div class="form-group">
            <label class="control-label" for="escuela">Escuela</label>  
            <!--<input id="escuela" name="escuela" type="text" placeholder="Escuela" class="form-control input-sm" required="">-->
            <select id="escuela" name="escuela" class="form-control input-sm" required="">
                <?php
                    conectarBD();
                    $consulta="SELECT * FROM escuelas";# consulta sql
                    $sql=mysql_query($consulta);
                    while($row = mysql_fetch_array($sql))
                    {
                    echo'<OPTION VALUE="'.$row['id'].'">'.$row['detalle'].'</OPTION>';
                    }
                    desconectarBD();
                ?>
            </select>
        </div>
        
    </div>
    <!-- Fin Columna 1 -->

    <!-- Inicio Columna 2 -->
    <div class="col-sm-6">
         <div class="form-group">
            <label class="control-label" for="anioEgreso">A&ntilde;o de egreso</label>  
            <input id="anioEgreso" name="anioEgreso" type="number" placeholder="A&ntilde;o de egreso" class="form-control input-sm" required="" min="1900" max="<?php echo date(Y);?>">  
        </div>
        
        <div class="form-group">
            <label class="control-label" for="distrito">Distrito</label>  
            <input id="distrito" name="distrito" type="text" placeholder="Distrito" class="form-control input-sm" required="">  
        </div>
    </div>                 
    <!-- Fin Columna 2 -->
</div><!-- fin row -->

<div class="row"><!-- inicio row2 -->
    <div class="col-sm-11">
        <div class="form-group">
                <label class="control-label" for="otrosEstudios">Otros estudios</label>  
                <input id="otrosEstudios" name="otrosEstudios" type="text" placeholder="Otros estudios" class="form-control input-sm" required="">  
        </div>
    </div><!-- fin row2 -->
</div>
<div class="row"><!-- inicio row3 -->
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label" for="institucion">Instituci&oacute;n</label>  
            <!--<input id="institucion" name="institucion" type="text" placeholder="Instituci&oacute;n" class="form-control input-sm" required="">-->
             <select id="institucion" name="institucion" class="form-control input-sm" required="">
                <?php
                    conectarBD();
                    $consulta="SELECT * FROM instituciones";# consulta sql
                    $sql=mysql_query($consulta);
                    while($row = mysql_fetch_array($sql))
                    {
                    echo'<OPTION VALUE="'.$row['id'].'">'.$row['detalle'].'</OPTION>';
                    }
                    desconectarBD();
                ?>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="control-label" for="otrosEgresos">A&ntilde;o egreso</label>  
            <input id="otrosEgresos" name="otrosEgresos" type="number" placeholder="A&ntilde;o egreso" class="form-control input-sm" required="" min="1900" max="<?php echo date(Y);?>"> 
        </div>
    </div>
</div><!-- fin row3 -->
<div class="row">
    <div class="container-fluid">
        <button type="submit" class="bottom btn btn-block btn-lg btn-success" name="boton" value="etapa3"><span class="glyphicon glyphicon-arrow-right"></span></button>
        <a href="javascript:history.back()" class="btn btn-block btn-lg btn-info"><span class="glyphicon glyphicon-arrow-left"></span></a>
    </div>
</div>
</form>