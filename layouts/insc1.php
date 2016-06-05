<h2>Paso 1 de 3 </h2>
<legend>Datos Personales</legend>
<div class="row"> <!-- Fila N°1 -->
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="apellido">Apellido</label>  
            <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-sm" required="">  
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label class="control-label" for="nombre">Nombre</label>  
            <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-sm" required="">  
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
            <input id="dni" name="dni" type="number" placeholder="DNI" class="form-control input-sm" required="" min="0" max="99999999" autofocus>  
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
            <input id="lugarNacimiento" name="lugarNacimiento" type="text" placeholder="Lugar de Nacimiento" class="form-control input-sm" required="">  
        </div>
    </div>
</div><!-- FIN Fila N°2 -->

<div class="row"><!-- Fila N°3 -->
    <div class="col-sm-3"><!-- Col N°1 -->
        <div class="form-group">
            <label class="control-label" for="estadoCivil">Estado Civil</label>  
            <input id="estadoCivil" name="estadoCivil" type="text" placeholder="Estado Civil" class="form-control input-sm" required="">  
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
           <label class="control-label" for="localidad">Localidad</label>  
           <input id="localidad" name="localidad" type="text" placeholder="Localidad" class="form-control input-sm" required="">  
        </div>
    </div>
    <div class="col-sm-5"><!-- Col N°2 -->
        <div class="form-group">
            <label class="control-label" for="partidp">Barrio / Partido</label>  
            <input id="partidp" name="partido" type="text" placeholder="Barrio / Partido" class="form-control input-sm" required="">  
        </div>
    </div>
</div><!-- Fin N°4 -->

<div class="row"><!-- Fila N°5 -->
    <div class="col-sm-3"><!-- Col N°1 -->
        <div class="form-group">
            <label class="control-label" for="codigoPostal">C&oacute;digo Postal</label>  
            <input id="codigoPostal" name="codigoPostal" type="text" placeholder="C&oacute;digo Postal" class="form-control input-sm" required="">  
        </div>
    </div>
    <div class="col-sm-4"><!-- Col N°2 -->
        <div class="form-group">
            <label class="control-label" for="tel">Tel&eacute;fono</label>  
            <input id="tel" name="tel" type="number" placeholder="Tel&eacute;fono" class="form-control input-sm" required="">  
        </div>
    </div>
    <div class="col-sm-4"><!-- Col N°3 -->
        <div class="form-group">
            <label class="control-label" for="telAlternativo">Tel&eacute;fono alternativo</label>  
            <input id="telAlternativo" name="telAlternativo" type="number" placeholder="Tel&eacute;fono alternativo" class="form-control input-sm" required="">  
        </div>
    </div>
</div><!-- Fin N°5 -->

<div class="row"><!-- Fila N°6 -->
    <div class="col-sm-5"><!-- Col N°1 -->
        <div class="form-group">
            <label class="control-label" for="pertenecaA">Pertenece a </label>  
            <input id="pertenecaA" name="pertenecaA" type="text" placeholder="Pertenece a " class="form-control input-sm" required="">  
        </div>
    </div>
    <div class="col-sm-5"><!-- Col N°2 -->
        <div class="form-group">
            <label class="control-label" for="email">Correo electr&oacute;nico</label>  
            <input id="email" name="email" type="email" placeholder="Correo electr&oacute;nico" class="form-control input-sm" required="">  
        </div>
    </div>
</div><!-- Fin N°6 -->
<div class="row">
    <div class="container-fluid">
        <input type="submit" class="bottom btn btn-block btn-lg btn-success" name="boton" value="etapa2">
        <a href="inscripcion.php?etapa=2" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-arrow-right"></span></a>
    </div>
</div>