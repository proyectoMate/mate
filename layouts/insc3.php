<?php
if ($_POST['boton']=='registrar') 
{
    print_r($_POST);
}
?>
<h2>Paso 3 de 3 </h2>
<legend>Datos Laborales</legend>
<form action="" method="POST" role="form" autocomplete="off">
<div class="row"><!-- Fila N°1 -->
    <div class="col-sm-4"><!-- Col N°1 -->
        <div class="form-group">
            <label class="control-label" for="trabaja">Trabaja: </label> 
            <div class="form-group">
                <label class="col-sm-offset-1 radio-inline" for="trabaja-0"><input type="radio" name="trabaja" id="trabaja-0" value="si">Si</label> 
                <label class="radio-inline" for="trabaja-1">                <input type="radio" name="trabaja" id="trabaja-1" value="no">No</label> 
            </div>
        </div>
    </div>
    <div class="col-sm-6"><!-- Col N°2 -->
        <div class="form-group">
            <label class=" control-label" for="actividad">Actividad</label>  
            <input id="actividad" name="actividad" type="text" placeholder="Actividad" class="form-control input-sm" >  
        </div>
    </div>
    <div class="col-sm-"><!-- Col N°3 -->
    </div>
</div><!-- Fin Fila N°1 -->

<div class="row">
    <div class="col-sm-4"><!-- Col N°3 -->
        <div class="form-group">
            <label class=" control-label" for="horarioHabitual">Horario habitual</label>  
            <input id="horarioHabitual" name="horarioHabitual" type="text" placeholder="Horario habitual" class="form-control input-sm" required="">  
        </div>
    </div>
    <div class="col-sm-4"><!-- Col N°3 -->
        <div class="form-group">
            <label class=" control-label" for="obraSocial">Obra Social</label>  
            <input id="obraSocial" name="obraSocial" type="text" placeholder="Obra Social" class="form-control input-sm" required="">  
        </div>
    </div>
</div>

<div class="row">
    <div class="container-fluid">
        <input type="submit" class="bottom btn btn-block btn-lg btn-success" name="boton" value="registrar">
        <a href="javascript:history.back()" class="btn btn-block btn-lg btn-info"><span class="glyphicon glyphicon-arrow-left"></span></a>
    </div>
</div>
</form>        