<?php
    session_start();
    require_once './functions/funciones.php';
    head('Logueo');
    echo '<link type="text/css" href="css/plugins/index/normalize.css" rel="stylesheet" >';
    if (isset($_POST["ok"])) 
	{
		$resultado = usuarioLogin($_POST["u"], $_POST["p"]);
		if ($resultado != false) 
		{
			$_SESSION["usuario"] = $resultado["dni"];
			$_SESSION["rol"] = $resultado["rol_id"];
			$_SESSION["id"] = $resultado["id"];
			$_SESSION["estado"] = $resultado["estado"];
			if ($resultado["estado"]==0) 
			{
				msgbox('Aun no esta activo, hable con el administrador');
                f_ir_a('index.php');
			}
			else
			{
				if ($resultado["estado"]==1) // si esta activo, acepto el mail pero no completo los datos debe completarlos.
				{
					f_ir_a('./inscripcion.php');
				}
				if ($resultado["estado"]==2) // si confirmo mail y se registro que valla al panel
				{
			        f_ir_a('./inscripcion.php?etapa=4');
				}
				if ($resultado["estado"]>2) // si confirmo mail y se registro que valla al panel
				{
			        f_ir_a('./cpanel/index.php');
				}
			}
		}
		else
		{
			//Vuelvo a enviar a la pagina por get el login falso
			msgbox('Sus datos aun no han sido registrados, favor de registrarse con sistemas');
			f_ir_a('index.php');
		}
	}
	else
	{
?>
    <div class="login">
	<h1>Ingresa</h1>
        <form method="post" action="" autocomplete="off">
            <input type="text" name="u" placeholder="Tu dni" required="required" />
            <input type="password" name="p" placeholder="Contraseña" required="required" />
            <button type="submit" name="ok" class="btn btn-primary btn-block btn-large"> Entrar </button>
            <button type="button" name="" class="btn btn-primary btn-block btn-large" data-toggle="modal" data-target="#myModal"> Registrarse </button>
        </form>
        <br>
        <a href="" data-toggle="modal" data-target="#olvidelaPas">¿Te olvidaste la contraseña?  Hace clic ACA! </a>
    </div>
    <!-- Modal -->
    <?php
        $id='myModal';
        $tituloModal='Registro Inicial';
        $cuerpoModal="registro_form.php";
        modal($id,$tituloModal, $cuerpoModal);
        
        $id='olvidelaPas';
        $tituloModal='Recuperar Password';
        $cuerpoModal="recuperar_pass.php";
        modal($id,$tituloModal, $cuerpoModal);
    ?>
</div> <!-- Cierre del container NO BORRAR-->
</body>
</html>
        <?php } //fin del else?>    