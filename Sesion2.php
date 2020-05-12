<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio_Usuario.inc.php';
include_once 'app/ValidadorLogin.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';


if(ControlSesion::sesion_iniciada()){
	Redireccion::redirigir(servidor);

}
if(isset($_POST['ingresar'])){
	Conexion::abrir_conexion();

	$validador= new ValidadorLogin($_POST['email'], $_POST['password'], Conexion::obtener_conexion());

	if($validador -> get_error() === '' && !is_null($validador -> get_usuario())){
		ControlSesion::iniciar_sesion(
			$validador -> get_usuario() -> get_id(), $validador -> get_usuario() -> get_usuario());
		
		if($_SESSION['nombre_usuario']== 'moderador' ){
			Redireccion::redirigir(ruta_moderador);
				} else{
			
		Redireccion::redirigir(servidor);
			}
	}

	Conexion::cerrar_conexion();
}

$titulo= 'Iniciar Sesion';

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Iniciar Sesion</title>


<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
	<link href="css/sing.css" rel="stylesheet" type="text/css">
</head>


<body>

	<form class="form-signin" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<div class="text-center mb-4">
        <a href="<?php echo servidor ?>"><img src="images/BA2016.png" width="233" height="60" alt=""/></a>

<h1 class="h3 mb-3 ">Iniciar Sesión</h1>
        <p>Accede a tu cuenta para poder inscribirte a los talleres y hacer modificaciones en tu perfil</p>
      </div>


      <div class="form-label-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" <?php
				if (isset($_POST['ingresar']) && isset($_POST['email']) && !empty($_POST['email'])) {
					echo 'value="' . $_POST['email'] . '"';
														 }
				 ?>required autofocus>
        <label for="email">Correo Electronico</label>


      </div>



      <div class="form-label-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <label for="password">Contraseña</label>

			<?php
				if (isset($_POST['ingresar'])) {
					$validador -> mostrar_error();
				}
		  ?>
</div>
		
	<div class="checkbox mb-3">
        <label>
			<a class="olvido" href="<?php echo ruta_recuperar ?>">¿Olvidaste tu contraseña?</a>
          
        </label>
      </div>	
		
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Recordarme en este equipo
        </label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="ingresar"> Ingresar</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; <a href="<?php echo servidor ?>">2019 Centro Ángel Gallardo</a> </p>
    </form>


	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
