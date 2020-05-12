<?php
session_start();
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio_Usuario.inc.php';	
require_once "./AppBM/configABM.php";

$iduser = $_SESSION['id_usuario'];
$sql = "SELECT taller_id FROM alumnos WHERE id = $iduser LIMIT 1";
$result = $link->query($sql);

if ($row = $result->fetch_assoc())
{
    $idtaller = $row['taller_id'];
    $sqltaller = "SELECT id, nombre, descripcion FROM talleres WHERE id =$idtaller";
    if ($stmt = $link->prepare($sqltaller)) {
        if ($stmt->execute()) {
            $resultaller = $stmt->get_result();
            if ($resultaller->num_rows == 1) {
                $row = $resultaller->fetch_array(MYSQLI_ASSOC);

                $nombre_taller = $row["nombre"];
                $descripcion = $row["descripcion"];

            } else {
                echo "Error! intente de nuevo mas tarde.";
                exit();
            }

        } else {
            echo "Error! intente de nuevo mas tarde.";
            exit();
        }
        $stmt->close();
        $link->close();
    }
    
}

$titulo= 'Mis Talleres';

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/nav.inc.php';
include_once 'plantillas/menu.inc.php';
?>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 20px;">
                    <div class="card-body">
                        <div class="page-header">
                            <h1>Tu taller:</h1>
                        </div>
                        <div class="form-group">
                            <p class="form-control-static"><?php 
                                                                if($idtaller == NULL)
                                                                {
                                                                    echo "no te inscribiste a ningun taller!";
                                                                }
                                                                else
                                                                {
                                                                    echo $nombre_taller; 
                                                                }
                                                            ?>
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="form-control-static"><?php 
                                                                if($idtaller <> NULL)
                                                                {
                                                                    echo $descripcion; 
                                                                }
                                                            ?>
                            </p>
                        </div>
                        <p>
                            <?php
                                if($idtaller <> NULL)
                                {
                                    echo "<a href='index.php' class='btn btn-primary'>Volver</a>";
                                    echo"<a href='desuscribirse.php?id_taller= ".$idtaller."' class='btn btn-danger'>Desuscribirse</a>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>	

</div>
</div><!-- /.container -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include_once 'plantillas/pie.inc.php';
include_once 'plantillas/cierre.inc.php';
?>
