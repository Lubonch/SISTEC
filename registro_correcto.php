<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio_Usuario.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_GET['usuario']) && !empty($_GET['usuario'])){
    $usuario= $_GET['usuario'];
} else{
    Redireccion::Redirigir(servidor);
}

$titulo='Registro correcto!';

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/nav.inc.php';

?>
<div id= "centro">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!--<div class="panel-heading">
                    <img src="images/open-iconic-master/png/check-2x.png"> Registro correcto
                </div>-->
				<br>
				<br>
				<br>
				<br>
				<br>

                <div class="panel-body text-center">
                    <p>¡Gracias por registrarte <b><?php echo $usuario ?></b>!</p>
                    <br>
                    <p><a href="<?php echo ruta_login ?>"><img src="images/open-iconic-master/png/account-login-2x.png"> Inicia sesión</a> para comenzar a usar tu cuenta.</p>
                </div>
            </div>
        </div>
    </div>
</div>
