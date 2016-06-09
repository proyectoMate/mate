<script language="javascript">
    $(document).ready(function(){
       $("#partido").change(function () {
               $("#partido option:selected").each(function () {
                elegido=$(this).val();
                $.post("data/localidades.php", { elegido: elegido }, function(data){
                $("#localidad").html(data);
                });            
            });
       })
    });

    $(document).ready(function(){
       $("#localidad").change(function () 
       {
           $("#localidad option:selected").each(function () 
           {
                elegido=$(this).val();
                $.post("data/cp.php", { elegido: elegido }, function(data)
                {
                    $("#codigoPostal").html(data);
                });            
            });
       })
    });
</script>
<?php
if ($_POST['boton']=='etapa2') 
{
    sql_update_post($_POST, 'usuarios', 'dni', $_POST['dni']);
    f_ir_a('inscripcion.php?etapa=2');
}
$datosForm=  sql_devuelve_detalle('usuarios', 'dni', $_SESSION['usuario']);
?>
<h2>Paso 1 de 3 </h2>
<legend>Datos Personales</legend>
<form action="" method="POST" role="form" autocomplete="off">
<div class="row"> <!-- Fila N°1 -->
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="apellido">Apellido</label>  
            <input id="apellido" name="apellido" type="text" class="form-control input-sm" readonly="" value="<?php echo $datosForm['apellido']?>">  
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="nombre">Nombre</label>  
            <input id="nombre" name="nombre" type="text" class="form-control input-sm" readonly="" value="<?php echo $datosForm['nombre']?>">   
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="sexo">Sexo </label> 
            <div class="form-group">
                <label class="col-sm-offset-1 radio-inline" for="sexo-0"><input type="radio" name="sexo" id="sexo-0" value="Femenino">Femenino</label> 
                <label class="radio-inline" for="sexo-1"><input type="radio" name="sexo" id="sexo-1" value="Masculino">Masculino</label> 
            </div>
        </div>
    </div>
</div><!-- FIN Fila N°1 -->

<div class="row"><!-- Fila N°2 -->
    <div class="col-sm-3">
        <div class="form-group">
            <label class="control-label" for="dni">DNI</label>  
            <input id="dni" name="dni" type="number" class="form-control input-sm" readonly="" value="<?php echo $_SESSION['usuario']?>">  
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label class="control-label" for="fNacimiento">Fecha de Nacimiento</label>  
            <input id="fNacimiento" name="fNacimiento" type="date" placeholder="Fecha de Nacimiento" class="form-control input-sm" required="" max="2016-01-01">  
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            <label class="control-label" for="lugarNacimiento">Lugar de Nacimiento</label>  
            <!--<input id="lugarNacimiento" name="lugarNacimiento" type="text" placeholder="Lugar de Nacimiento" class="form-control input-sm" required="">-->
            <select id="lugarNacimiento" name="lugarNacimiento" class="form-control input-sm" required="">
                <?php
                    conectarBD();
                    $consulta="SELECT DISTINCT partido,cod_partido FROM localidadPartidoCp";# consulta sql
                    $sql=mysql_query($consulta);
                    while($row = mysql_fetch_array($sql))
                    {
                    echo'<OPTION VALUE="'.$row['cod_partido'].'">'.$row['partido'].'</OPTION>';
                    }
                    desconectarBD();
                ?>
            </select>
        </div>
    </div>
</div><!-- FIN Fila N°2 -->

<div class="row"><!-- Fila N°3 -->
    <div class="col-sm-3"><!-- Col N°1 -->
        <div class="form-group">
            <label class="control-label" for="estadoCivil">Estado Civil</label>  
            <!--<input id="estadoCivil" name="estadoCivil" type="text" placeholder="Estado Civil" class="form-control input-sm" required="">-->
            <select id="estadoCivil" name="estadoCivil" class="form-control input-sm" required="">
                <?php
                    conectarBD();
                    $consulta="SELECT * from estadoCiviles";# consulta sql
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
    <div class="col-sm-3"><!-- Col N°2 -->
        <div class="form-group">
            <label class="control-label" for="cantHijos">Hijos (cantidad)</label>  
            <input id="cantHijos" name="cantHijos" type="number" placeholder="Cant. Hijos" class="form-control input-sm" required min="0" max="12" >  
        </div>
    </div>
    <div class="col-sm-offset-2 col-sm-4"><!-- Col N°3 -->
        <div class="form-group">
            <label class="control-label" for="FamACargo">Familiares a cargo</label>
        <div class="form-group">
            <label class="col-sm-offset-2 radio-inline" for="FamACargo-0"><input type="radio" name="FamACargo" id="FamACargo-0" value="Si">Si</label> 
            <label class="radio-inline" for="FamACargo-1"><input type="radio" name="FamACargo" id="FamACargo-1" value="No" checked="checked">No</label> 
        </div>
        </div>
    </div>
</div><!-- Fin N° -->

<div class="row"><!-- Fila N°3 -->
    <div class="col-sm-5"><!-- Col N°1 -->
        <div class="form-group">
            <label class="control-label" for="domicilio">Domicilio</label>  
            <input id="domicilio" name="domicilio" type="text" placeholder="Domicilio" class="form-control input-sm" required="">  
        </div>
    </div>
    <div class="col-sm-2"><!-- Col N°2 -->
        <div class="form-group">
            <label class="control-label" for="numDomcilio">Altura</label>  
            <input id="numDomcilio" name="numDomcilio" type="number" placeholder="Nro" class="form-control input-sm" required="" min="0" max="20000">  
        </div>
    </div>
    <div class="col-sm-2"><!-- Col N°3 -->
        <div class="form-group">
            <label class="control-label" for="pisoDomicilio">Piso</label>  
            <input id="pisoDomicilio" name="pisoDomicilio" type="text" placeholder="Piso" class="form-control input-sm" value="-">  
        </div>
    </div>
    <div class="col-sm-2"><!-- Col N°4 -->
        <div class="form-group">
            <label class="control-label" for="dptoDomicilio">Dpto</label>  
            <input id="dptoDomicilio" name="dptoDomicilio" type="text" placeholder="Dpto" class="form-control input-sm" value="-">  
        </div>
    </div>
</div><!-- Fin N°3 -->

<div class="row"><!-- Fila N°4 -->
    <div class="col-sm-5"><!-- Col N°1 -->
        <div class="form-group">
            <label class="control-label" for="partidp">Partido</label>
            <select id="partido" name="partido" type="text" class="form-control" required>
                <?php
                    conectarBD();

                    $sql = "SELECT DISTINCT partido,cod_partido FROM localidadPartidoCp";
                    $resultado = mysql_query($sql);
                    if (!$resultado) 
                    {
                        echo "La consulta contiene errores.";
                        exit();
                    }
                    else
                    {
                        while($fila = mysql_fetch_array($resultado, MYSQL_ASSOC))
                        {
                            echo "<option value='".$fila["cod_partido"]."'>".$fila["partido"]."</option>";
                        }
                    } 
                ?>
            </select>  
        </div>
    </div>
    <div class="col-sm-5"><!-- Col N°2 -->
        <div class="form-group">
           <label class="control-label" for="localidad">Localidad / Barrio</label> 
           <select id="localidad" name="localidad" type="text" class="form-control" required>
           </select>
        </div>
    </div>
</div><!-- Fin N°4 -->

<div class="row"><!-- Fila N°5 -->
    <div class="col-sm-3"><!-- Col N°1 -->
        <div class="form-group">
            <label class="control-label" for="codigoPostal">C&oacute;digo Postal</label>
            <select id="codigoPostal" name="codigoPostal" type="text" class="form-control" required>
           </select>
        </div>
    </div>
    <div class="col-sm-4"><!-- Col N°2 -->
        <div class="form-group">
            <label class="control-label" for="tel">Tel&eacute;fono</label>  
            <input id="tel" name="tel" type="number"  class="form-control input-sm" readonly="" value="<?php echo $datosForm['tel']?>"> 
        </div>
    </div>
    <div class="col-sm-4"><!-- Col N°3 -->
        <div class="form-group">
            <label class="control-label" for="telAlternativo">Tel&eacute;fono alternativo</label>  
            <input id="telAlternativo" name="telAlternativo" type="number" placeholder="Tel&eacute;fono alternativo" class="form-control input-sm" min="11111111" max="99999999999">  
        </div>
    </div>
</div><!-- Fin N°5 -->

<div class="row"><!-- Fila N°6 -->
    <div class="col-sm-5"><!-- Col N°1 -->
        <div class="form-group">
            <label class="control-label" for="perteneceA">Pertenece a </label>  
            <input id="perteneceA" name="perteneceA" type="text" placeholder="Pertenece a " class="form-control input-sm" >  
        </div>
    </div>
    <div class="col-sm-5"><!-- Col N°2 -->
        <div class="form-group">
            <label class="control-label" for="email">Correo electr&oacute;nico</label>  
            <input id="email" name="email" type="email" class="form-control input-sm" readonly="" value="<?php echo $datosForm['email']?>">  
        </div>
    </div>
</div><!-- Fin N°6 -->
<div class="row">
    <div class="container-fluid">
        <button type="submit" class="bottom btn btn-block btn-lg btn-success" name="boton" value="etapa2"><span class="glyphicon glyphicon-arrow-right"></span></button>
    </div>
</div>
</form>