<?php
include_once 'app/Conexion.inc.php';
include_once 'app/Repositorio_Usuario.inc.php';	

$titulo= 'Educacion No formal';

include_once 'plantillas/declaracion.inc.php';
include_once 'plantillas/nav.inc.php';
include_once 'plantillas/menu.inc.php';
?>
  	
<style>
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
    </style>

<div id= "centro">
 
<h2 class="noDisplay">Main Content</h2>
  
  
  <div id= "caja1">
    <h3>Nuestra Escuela</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
  </div>
  
  <div id ="caja2"><img src="images/ESCUELA.jpg" alt="" width="400" height="600" class="placeholder"/> </div>



	
	</div><!--cierra centro-->
  
</div>
	 	 
<?php
include_once 'plantillas/pie.inc.php';
include_once 'plantillas/cierre.inc.php';
?>