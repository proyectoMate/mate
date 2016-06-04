<?php
if (isset($_POST['button'])) 
{
    $tabla='usuarios';
    sql_insert($tabla, $_POST);
    f_ir_a('index.php');
}
 else {?>
     
<form class="form-horizontal" method="POST" action="" autocomplete="off">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
  <div class="col-md-4">
  <input id="nombre" name="nombre" type="text" placeholder="Jose" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="apellido">Apellido</label>  
  <div class="col-md-4">
  <input id="apellido" name="apellido" type="text" placeholder="Perez" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dni">Dni</label>  
  <div class="col-md-4">
      <input id="dni" name="dni" type="number" placeholder="11223345" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>  
  <div class="col-md-4">
      <input id="password" name="password" type="password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail">Mail</label>  
  <div class="col-md-4">
      <input id="mail" name="email" type="email" placeholder="mail@dominio.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="celular">Celular</label>  
  <div class="col-md-4">
      <input id="celular" name="tel" type="number" placeholder="1166448866" class="form-control input-md">
  </div>
</div>
<input type="hidden" name='estado' value="0">

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button"></label>
  <div class="col-md-4">
    <button id="button" name="button" class="btn btn-success">Registrarse</button>
  </div>
</div>
</form>

<?php
    
}
?>