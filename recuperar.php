<?php


$titulo= 'Recuperacion de Contraseña';

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Recuperar Contraseña</title>


<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
	<link href="css/sing.css" rel="stylesheet" type="text/css">
</head>


<body>

	<form class="form-signin" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">

		<div class="text-center mb-4">
        <a href="<?php echo servidor ?>"><img src="images/BA2016.png" width="233" height="60" alt=""/></a>

<h1 class="h3 mb-3 ">Recuperar Contraseña</h1>
        <p>¿Olvidaste tu contraseña? No te preocupes. Introduce tu email y te enviaremos las instrucciones para poder reestablecerla.</p>
      </div>


      <div class="form-label-group">
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="email">Correo Electronico</label>
      </div>
      <br>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar_email">Enviar</button>

      <br>
      <br>
      <br>
      <br>
      <br>
      <p class="mt-5 mb-3 text-muted text-center">&copy; <a href="<?php echo servidor ?>">2019 Centro Ángel Gallardo</a> </p>
    </form>


	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
