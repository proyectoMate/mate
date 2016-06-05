<?php
    include('./functions/funciones.php');
    head('Logueo');
	?>
	<form action="" method="POST">
            <!-- Form Name -->
            <legend>Datos Personales</legend>
            <div class='row'>
                <!-- Columna 1 -->
                <div class='col-md-6'>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="control-label" for="apellido">Apellido</label>  
                        <input id="apellido" name="apellido" type="text" placeholder="Apellido" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nombre">Nombre</label>  
                        <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="dni">Dni</label>  
                        <input id="dni" name="dni" type="text" placeholder="DNI" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="estadoCivil">Estado Civil</label>  
                        <input id="estadoCivil" name="estadoCivil" type="text" placeholder="Estado Civil" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="fNacimiento">Fecha de Nacimiento</label>  
                        <input id="fNacimiento" name="fNacimiento" type="text" placeholder="Fecha de Nacimiento" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="lugarNacimiento">Lugar de Nacimiento</label>  
                        <input id="lugarNacimiento" name="lugarNacimiento" type="text" placeholder="Lugar de Nacimiento" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="cantHijos">Cant. Hijos</label>  
                        <input id="cantHijos" name="cantHijos" type="text" placeholder="Cant. Hijos" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="FamACargo"></label>  
                        <input id="FamACargo" name="FamACargo" type="text" placeholder="Familiares a cargo" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="domicilio"></label>  
                        <input id="domicilio" name="domicilio" type="text" placeholder="Domicilio" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="numDomcilio"></label>  
                        <input id="numDomcilio" name="numDomcilio" type="text" placeholder="Nro" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="pisoDomicilio"></label>  
                        <input id="pisoDomicilio" name="pisoDomicilio" type="text" placeholder="Piso" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="dptoDomicilio"></label>  
                        <input id="dptoDomicilio" name="dptoDomicilio" type="text" placeholder="Dpto" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="localidad"></label>  
                        <input id="localidad" name="localidad" type="text" placeholder="Localidad" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="partidp"></label>  
                        <input id="partidp" name="partidp" type="text" placeholder="Barrio / Partido" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="codigoPostal"></label>  
                        <input id="codigoPostal" name="codigoPostal" type="text" placeholder="C&oacute;digo Postal" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="tel"></label>  
                        <input id="tel" name="tel" type="text" placeholder="Tel&eacute;fono" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="telAlternativo"></label>  
                        <input id="telAlternativo" name="telAlternativo" type="text" placeholder="Tel&eacute;fono alternativo" class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="pertenecaA"></label>  
                        <input id="pertenecaA" name="pertenecaA" type="text" placeholder="Pertenece a " class="form-control input-md" required="">  
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="email"></label>  
                        <input id="email" name="email" type="text" placeholder="Correo electr&oacute;nico" class="form-control input-md" required="">  
                    </div>
                </div>
                <!-- Columna 1 -->
                <div class='col-md-6'>
                    
                </div>
            </div>
            <div class='row'>
            <!-- Button -->
		<div class="form-group">
			<label class="control-label" for=""></label>
			
				<button id="" name="registrar" value="OK" class="btn btn-primary">Registrarme</button>
			</div>
		</div>
            </div>
        </form>
</div>
</body>
</html>