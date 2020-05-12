<?php
include_once '../app/Conexion.inc.php';
include_once '../app/Repositorio_Usuario.inc.php';	
include_once '../app/ControlSesion.inc.php';
include_once '../app/config.inc.php';
$titulo= 'Administrador';

?>



<!doctype html>
<html lang="en">
	<head>	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Moderador</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
 <!-- Bootstrap core CSS para TODOS los sitios y si no no te funca un carajo -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- CSS -->
<link href="../css/multiColumnTemplate.css" rel="stylesheet" type="text/css">

<link href="../css/slider mine.js.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!--<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style><!--

    <!-- Custom styles for this template -->
    <link href="../css/admin.css" rel="stylesheet" type="text/css">
    <link href="../css/moderador.scss" rel="stylesheet" type="text/css">
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
          <a class="dropdown-item" href="<?php echo ruta_moderador ?>"><img src="../images/open-iconic-master/png/pin-2x.png"> Mi Perfil</a>
			
			<a class="dropdown-item" href="<?php echo ruta_mod1 ?>"><img src="../images/open-iconic-master/png/people-2x.png"> Alumnos</a>
			<a class="dropdown-item" href="<?php echo ruta_mod2 ?>"><img src="../images/open-iconic-master/png/brush-2x.png"> Talleres</a>
         
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
 
	
	

<main role="main">
	<br>
	<br>
	<br>
  <section class="jumbotron text-center">
    <div class="container1">
      <h1 class="jumbotron-heading">¿Qué desea administrar hoy?</h1>
      <p class="lead text-muted"></p>
      <p>
        <a href="<?php echo ruta_mod1 ?>" class="btn btn-primary my-2">Lista de Alumnos</a>
        <a href="<?php echo ruta_mod2 ?>" class="btn btn-primary my-2">Lista de Talleres</a>
      </p>
    </div>
  </section>

  

</main>
<br>
	<br>
	<br>
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