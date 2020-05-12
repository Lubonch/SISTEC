<?php
include_once 'app/Conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/Repositorio_Usuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';
include_once 'app/Redireccion.inc.php';

if(isset($_POST['enviar'])){
	Conexion :: abrir_conexion();

$validador= new ValidadorRegistro( /*?>$POST['firstName'], $POST['lastName'], $POST['sexo'], $POST['dni'], $POST['fechanac'],<?php */ $_POST['usuario'], $_POST['password'], $_POST['email']/*?>, $POST['address'], $POST['altura'], $POST['piso'], $POST['zip'], $POST['loca'], $POST['state'], $POST['telefono'], $_POST['telemer'], $POST['cel'], $POST['leer'], $POST['nivel'], $POST['final'], $POST['cursos'], $POST['como'], $POST['discap'], $POST['tipo'], $POST['apoyo']<?php */);

	if ($validador -> registro_validado()){
		$usuario= new Usuario('',/*?>$validador -> getNombre(), $validador -> getApellido(), $validador -> getSexo(), $validador -> getDni(), $validador -> getFechaNacimiento(),<?php */ $validador -> get_usuario(), password_hash($validador -> get_password(), PASSWORD_DEFAULT), $validador -> get_email(), /*?><?php /*?><?php /*?> $validador -> getDireccion(), $validador -> getAltura(), $validador -> getPiso(), $validador -> getCp(), $validador -> getLocalidad(), $validador -> getProvincia(), $validador -> getTelefono(), $validador -> getTelEmer(), $validador -> getCel(), $validador -> getLeer(), $validador -> getNivel(), $validador -> getFinal(), $validador -> getCursos(), $validador -> getComo(), $validador -> getDiscapacidad(), $validador -> getTipo(), $validador -> getApoyo(),<?php */ '', '');

		$usuario_insertado= RepositorioUsuario :: insertar_usuario(Conexion::obtener_conexion(), $usuario);

		if($usuario_insertado){ /*?>Redirigir a registro<?php */
			Redireccion::redirigir(ruta_registro_correcto . '?usuario=' . $usuario -> get_usuario());
		}
	}
	Conexion :: cerrar_conexion();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Registro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!--Estilos personalizados de esta pag-->

    <link href="css/estilosreg.css" rel="stylesheet" type="text/css">
</head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img src="images/BA2016.png" width="233" height="60" alt=""/>
<h2>Registro</h2>
        <p class="lead">Completa todos tus datos para poder crear tu cuenta la que te permitirá inscribirte en nuestros talleres disponibles</p>
      </div>

 <div class="col-md-8 order-md-1">
  <h4 class="mb-3">Datos Personales</h4>


	<form role="form" method= "post" action= "<?php echo $_SERVER['PHP_SELF'] ?>">
		<?php

			if (isset($_POST['enviar'])){
			include_once 'plantillas/registro_validado.inc.php';
			}else {
				include_once 'plantillas/registro_vacio.inc.php';
				}
		?>
	</form>

</div>
</div>

 <footer class="my-5 pt-5 text-muted text-center text-small">
	<!--<p class="float-right"><a href="#"> <img src="images/open-iconic-master/png/home-2x.png"> Volver al Inicio</a></p>-->
   <p class="mb-1">&copy; <a href="<?php echo servidor ?>">2019 Centro Ángel Gallardo</a></p>
</footer>
            <!--aca termina todo-->

          <!--  <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" name="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input name="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input name="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" name="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" name="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" name="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" name="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>-->


        <!--<ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
   	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	  <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
