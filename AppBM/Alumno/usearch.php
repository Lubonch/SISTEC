<?php
require_once "../configABM.php";
$search = $_GET['usuario'];
$sql = "SELECT id, usuario, password, email, taller_id FROM alumnos WHERE usuario LIKE '%".$search."%'";
$search_result = $link->query($sql);
include_once '../../app/Conexion.inc.php';
include_once '../../app/Repositorio_Usuario.inc.php';	
include_once '../../app/ControlSesion.inc.php';
include_once '../../app/config.inc.php';
$titulo= 'Lista Alumnos';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
     <!-- Bootstrap core CSS para TODOS los sitios y si no no te funca un carajo -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!-- CSS -->
<link href="../../css/multiColumnTemplate.css" rel="stylesheet" type="text/css">
	
	
    <style>
        .btn{
            margin-left: 10px;
        }
    </style>
    
</head>
<body>
<nav class="navbar navbar-expand-md fixed-top bg-light">
  <a class="navbar-brand" href="<?php echo servidor ?>"><img src="../../images/BA2016.png" width="233" height="60" alt=""/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo servidor ?>"> <img src="../../images/open-iconic-master/png/home-2x.png"> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <?php
        if(ControlSesion::sesion_iniciada()){
      ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="../../images/open-iconic-master/png/person-2x.png"> <?php echo ''. $_SESSION['nombre_usuario']; ?></a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="<?php echo ruta_moderador ?>"><img src="../../images/open-iconic-master/png/pin-2x.png"> Mi Perfil</a>
			
			<a class="dropdown-item" href="<?php echo ruta_mod1 ?>"><img src="../../images/open-iconic-master/png/people-2x.png"> Alumnos</a>
			<a class="dropdown-item" href="<?php echo ruta_mod2 ?>"><img src="../../images/open-iconic-master/png/brush-2x.png"> Talleres</a>
         
		  <a class="dropdown-item" href="<?php echo ruta_logout ?>"><img src="../../images/open-iconic-master/png/account-logout-2x.png"> Cerrar Sesión</a>
        </div>
      </li>

        <?php
        }else{
			Redireccion::redirigir(servidor);
		}
          ?>
         
    </ul>
    
  </div>
</nav>
	
	
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 20px;margin-bottom: 20px;">
                    <div class="card-body">
                        <h2 class="pull-left">Lista de alumnos <a href="createALU.php" class="btn btn-success pull-right">Agregar Alumno</a></h2>
                            <form action="usearch.php" method="GET">
                                <input name="usuario" id="search" type="text" placeholder="nombre usuario">
                                <input id="submit" type="submit" value="Search">
                            </form>
                </div>
                <?php
                if ($search_result->num_rows > 0) {
                        echo "<table class='table table-bordered table-striped'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>Usuario</th>";
                        echo "<th>Contraseña</th>";
                        echo "<th>Taller inscripto</th>";
                        echo "<th>Email</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while ($row = $search_result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['usuario'] . "</td>";
                            echo "<td>......</td>";
                            echo "<td>" . $row['taller_id'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>";
                            echo "<a href='readALU.php?id=" . $row['id'] . "' class='btn btn-primary'>Leer</a>";
                            echo "<a href='updateALU.php?id=" . $row['id'] . "' class='btn btn-info'>Modificar</a>";
                            echo "<a href='deleteALU.php?id=" . $row['id'] . "' class='btn btn-danger'>Eliminar</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        
                        $search_result->free();
                    } else {
                        echo "<p class='lead'><em>no se encontraron usuarios.</em></p>";
                    }
                $link->close();
                ?>
            </div>
        </div>
    </div>
</div>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to main site</a>
    </p>
    <p class="mt-5 mb-3 text-muted text-center">&copy; <a href="<?php echo servidor ?>">2019 Centro Ángel Gallardo</a> </p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>