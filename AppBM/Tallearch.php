<?php
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio_Usuario.inc.php';	
require_once "./AppBM/configABM.php";

$sql = "SELECT * FROM talleres";
$result = $link->query($sql);
$titulo= 'Talleres';

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/nav.inc.php';
include_once 'plantillas/menu.inc.php';
?>
	
<div>
  <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <?php
    if($result->num_rows <= 0)
    {
      echo "<p class='lead'><em>no hay talleres disponibles.</em></p>";
    }
    else
    {
      $row = $result->fetch_assoc();
      while ($row <> NULL)
      {
        echo "<div class='row'>";
        for ($i = 1; $i <= 4; $i++) 
        {
          if($row == NULL) break 1;

          echo "<div class='columns'>";
          echo "<p class='thumbnail_align'> <img src='images/bkg_06.jpg' alt='imagen del taller' class='thumbnail'/> </p>";
          echo "<h4>" . $row['nombre'] . "</h4>";
          echo "<p style='color:black;'>" . $row['descripcion'] . "</p>";
          echo "<a href='taller_correcto.php?id_taller=" . $row['id'] . "' class='btn btn-primary'>Registrarse</a>";
          echo "</div>";
          $row = $result->fetch_assoc();
        }
        echo "</div>";
      }
    }
    ?>
  </form>
</div>

</div>
</div><!-- /.container -->

<?php
include_once 'plantillas/pie.inc.php';
include_once 'plantillas/cierre.inc.php';
?>
