<?php
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio_Usuario.inc.php';	
include_once 'app/ControlSesion.inc.php';
include_once 'app/config.inc.php';
$titulo= 'Administrador';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	
<!-- Bootstrap core CSS para TODOS los sitios y si no no te funca un carajo -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	
	
	
	
</head>

<body>
<nav class="navbar navbar-expand-md fixed-top bg-light">
  <a class="navbar-brand" href="<?php echo servidor ?>"><img src="../images/BA2016.png" width="233" height="60" alt=""/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo servidor ?>"> <img src="../images/open-iconic-master/png/home-2x.png"> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <?php
        if(ControlSesion::sesion_iniciada()){
      ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="../images/open-iconic-master/png/person-2x.png"> <?php echo ''. $_SESSION['nombre_usuario']; ?></a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#"><img src="../images/open-iconic-master/png/pin-2x.png"> Mi Perfil</a>
			
			<a class="dropdown-item" href="#"><img src="../images/open-iconic-master/png/pin-2x.png"> Alumnos</a>
			<a class="dropdown-item" href="#"><img src="../images/open-iconic-master/png/pin-2x.png"> Talleres</a>
          
          <a class="dropdown-item" href="#"><img src="../images/open-iconic-master/png/cog-2x.png"> Configuración</a>
		  <a class="dropdown-item" href="<?php echo ruta_logout ?>"><img src="../images/open-iconic-master/png/account-logout-2x.png"> Cerrar Sesión</a>
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
	
	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
	
	

</body>
</html>
