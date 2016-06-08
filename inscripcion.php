<?php
    session_start();
    include('./functions/funciones.php');
    //require_once("config/db_conexion.php");
    head('Logueo');
?>
    <?php 
    if($_GET['etapa'])
    {
        if($_GET['etapa']==2)
        {
            require_once './layouts/insc2.php';
        }
        if($_GET['etapa']==3)
        {
            require_once './layouts/insc3.php';
        }
        if($_GET['etapa']==4)
        {
            require_once './inscripcionCarrera.php';
        }
        
    }
    else 
    {
        require_once './layouts/insc1.php';
    }
    ?>
</div> <!-- Fin del div container que trae el HEAD-->
</body>
</html>

