<?php
if (isset($_POST['btnpassword'])) 
{
    msgbox("Se envio un mail a su cuenta con su password");
    f_ir_a('index.php');
}
 else {?>
<form class="form-horizontal" method="POST" action="" autocomplete="off">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail">Mail</label>  
  <div class="col-md-4">
      <input id="mail" name="email" type="email" placeholder="mail@dominio.com" class="form-control input-md" required="">
  </div>
  <div class="col-md-3 ">
    <button id="button" name="btnpassword" class="btn btn-success">Recuperar</button>
  </div>
</div>
</form>
<?php
    
}
?>