<?php
session_start();
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio_Usuario.inc.php';	
require_once "./AppBM/configABM.php";

$sql = "SELECT * FROM talleres";
$result = $link->query($sql);
$titulo= 'Talleres';
$usuario= $_SESSION['nombre_usuario'];
$iduser = $_SESSION['id_usuario'];
include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/nav.inc.php';
include_once 'plantillas/menu.inc.php';

if (isset($_GET['id_taller'])) 
{
    $sql = "UPDATE alumnos SET taller_id = ? WHERE id = $iduser";
    if ($stmt = $link->prepare($sql)) 
    {
        $stmt->bind_param("i", $_GET["id_taller"]);
        $stmt->execute();
        if ($stmt->error) 
        {
            echo "Error!" . $stmt->error;
            exit();
        }
        $stmt->close();
    }
}
$link->close();

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
                    <p>¡Gracias por anotarte al taller <b><?php echo $usuario ?></b>!</p>
                    <br>
                    <p><a href="<?php echo ruta_mis_talleres ?>"><img src="images/open-iconic-master/png/account-login-2x.png"> Hace click aca</a> para ver mas detalles del taller.</p>
                </div>
            </div>
        </div>
    </div>

</div>
</div><!-- /.container -->

<?php
include_once 'plantillas/pie.inc.php';
include_once 'plantillas/cierre.inc.php';
?>
