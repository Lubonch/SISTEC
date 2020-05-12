<?php
include_once 'app/config.inc.php';
include_once 'app/ControlSesion.inc.php';

Conexion :: abrir_conexion();
$total_usuarios = RepositorioUsuario :: get_num_usuarios (Conexion:: obtener_conexion());
Conexion :: cerrar_conexion();
?>

<nav class="navbar navbar-expand-md fixed-top bg-light">
  <a class="navbar-brand" href="<?php echo servidor ?>"><img src="images/BA2016.png" width="233" height="60" alt=""/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo servidor ?>"> <img src="images/open-iconic-master/png/home-2x.png"> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <?php
        if(ControlSesion::sesion_iniciada()){
      ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="images/open-iconic-master/png/person-2x.png"> <?php echo ''. $_SESSION['nombre_usuario']; ?></a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#"><img src="images/open-iconic-master/png/pin-2x.png"> Mi Perfil</a>
          <a class="dropdown-item" href="<?php echo ruta_mis_talleres ?>"><img src="images/open-iconic-master/png/brush-2x.png"> Mis Talleres</a>
			
			
          <a class="dropdown-item" href="<?php if($_SESSION['nombre_usuario']== 'moderador' ){
			echo ruta_moderador;
				} else{
			
		echo ruta_config;
			} ?>"><img src="images/open-iconic-master/png/cog-2x.png"> Configuración</a>
		  <a class="dropdown-item" href="<?php echo ruta_logout ?>"><img src="images/open-iconic-master/png/account-logout-2x.png"> Cerrar Sesión</a>
        </div>
      </li>

        <?php
        }else{
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ruta_registro ?>"><img src="images/open-iconic-master/png/plus-2x.png"> Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ruta_login ?>"><img src="images/open-iconic-master/png/account-login-2x.png"> Iniciar Sesión</a>
          </li>
    			<li class="nav-item">
            <a class="nav-link" href="#"> <img src="images/open-iconic-master/png/people-2x.png"> Usuarios:
    				   <?php
    				    echo $total_usuarios;
    				    ?>
              </a>
            </li>



          <?php
        }
       ?>

      </ul>
    <form action="Buscataller.php" method="GET" class="form-inline mt-2 mt-md-0">
    <input class="form-control mr-sm-2" name="taller" type="text" placeholder="Buscar" aria-label="Search">
    <button id="submit" type="submit" class="btn btn-outline-success my-2 my-sm-0">Buscar</button>
    </form>
  </div>
</nav>
