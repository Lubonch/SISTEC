<?php

class RepositorioUsuario {

  public static function Get_todos($conexion){

    $usuarios= array();
    if(isset($conexion)){

      try{
        include_once 'usuario.inc.php';

        $sql= "SELECT * FROM alumnos";

        $sentencia = $conexion -> prepare($sql);
        $sentencia -> execute();

        $resultado = $sentencia -> fetchAll();

        if(count ($resultado)){
          foreach ($resultado as $fila){
            $usuarios [] = new Usuario($fila['id'], /*$fila['nombre'], $fila['apellido'], $fila['sexo'], $fila['dni'], $fila['fecha_nacimiento'],*/  $fila['usuario'], $fila['password'], $fila['email'],/*$fila['direccion'], $fila['altura'], $fila['piso'], $fila['cp'], $fila['localidad'], $fila['provincia'], $fila['telefono'], $fila['telefono_emergencia'], $fila['cel'], $fila['leer'], $fila['nivel'], $fila['cursos'], $fila['como'], $fila['discapacidad'], $fila['tipo'], $fila['apoyo'],*/$fila['fecha_registro'], $fila['activo']);
          }

        }
          else{
            print 'no hay alumnos';
            }


      } catch (PDOException $ex){
        print "ERROR"  . $ex -> getMessage();
      }
    }
    return $usuarios;
  }

  public static function get_num_usuarios($conexion) {
    $total_usuarios = null;

    if(isset($conexion)){
      try{
        $sql = "SELECT COUNT(*) as total FROM alumnos";

        $sentencia = $conexion -> prepare($sql);
        $sentencia -> execute();
        $resultado = $sentencia -> fetch();

        $total_usuarios = $resultado['total'];
      } catch (PDOException $ex) {
          print 'ERROR'. $ex -> getMessage();
      }
    }

    return $total_usuarios;
  }

public static function insertar_usuario($conexion, $usuario){
  $usuario_insertado = false;

  if (isset($conexion)){
    try{
      $sql= "INSERT INTO alumnos(/*nombre, apellido, sexo, dni, fecha_nacimiento,*/usuario, password, email, /*direccion, altura, piso, cp, localidad, provincia, telefono, telefono_emergencia, cel, leer, nivel, final, cursos, como, discapacidad, tipo, apoyo,*/ fecha_registro, activo) VALUES(/*:nombre, :apellido, :sexo, :dni, :fecha_nacimiento,*/ :usuario, :password, :email, /*:direccion, :altura, :piso, :cp, :localidad, :provincia, :telefono, :telefono_emergencia, :cel, :leer, :nivel, :final, :cursos, :como, :discapacidad, :tipo, :apoyo,*/NOW(), 0)";

      $usuariotemp = $usuario -> get_usuario();
      $emailtemp = $usuario -> get_email();
      $passwordtemp = $usuario -> get_password();

      $sentencia = $conexion -> prepare($sql);

      //$sentencia -> bindParam(':nombre', $usuario -> getNombre(), PDO::PARAM_STR);
      //$sentencia -> bindParam(':apellido', $usuario -> getApellido(), PDO::PARAM_STR);
      //$sentencia -> bindParam(':sexo', $usuario -> getSexo(), PDO::PARAM_STR);
      //$sentencia -> bindParam(':dni', $usuario -> getDni(), PDO::PARAM_INT);
      //$sentencia -> bindParam(':fecha_nacimiento', $usuario -> getFechaNacimiento(), PDO::PARAM_INT);

      /*$sentencia -> bindParam(':usuario', $usuario -> get_usuario(), PDO::PARAM_STR);
      $sentencia -> bindParam(':password', $usuario -> get_password(), PDO::PARAM_STR);
      $sentencia -> bindParam(':email', $usuario -> get_email(), PDO::PARAM_STR);*/


      $sentencia -> bindParam(':usuario', $usuariotemp, PDO::PARAM_STR);
      $sentencia -> bindParam(':password', $passwordtemp, PDO::PARAM_STR);
      $sentencia -> bindParam(':email', $emailtemp, PDO::PARAM_STR);

      /*$sentencia -> bindParam(':direccion', $usuario -> getDireccion(), PDO::PARAM_STR);
      $sentencia -> bindParam(':altura', $usuario -> getAltura(), PDO::PARAM_INT);
      $sentencia -> bindParam(':piso', $usuario -> getPiso(), PDO::PARAM_STR);
      $sentencia -> bindParam(':cp', $usuario -> getCp(), PDO::PARAM_STR);
      $sentencia -> bindParam(':localidad', $usuario -> getLocalidad(), PDO::PARAM_STR);
      $sentencia -> bindParam(':provincia', $usuario -> getProvincia(), PDO::PARAM_STR);
      $sentencia -> bindParam(':telefono', $usuario -> getTelefono(), PDO::PARAM_INT);
      $sentencia -> bindParam(':telefono_emergencia', $usuario -> getTelEmer(), PDO::PARAM_INT);
      $sentencia -> bindParam(':cel', $usuario -> getCel(), PDO::PARAM_INT);

      $sentencia -> bindParam(':leer', $usuario -> getLeer(), PDO::PARAM_STR);
      $sentencia -> bindParam(':nivel', $usuario -> getNivel(), PDO::PARAM_STR);
      $sentencia -> bindParam(':final', $usuario -> getFinal(), PDO::PARAM_STR);
      $sentencia -> bindParam(':cursos', $usuario -> getCursos(), PDO::PARAM_STR);
      $sentencia -> bindParam(':como', $usuario -> getComo(), PDO::PARAM_STR);

      $sentencia -> bindParam(':discapacidad', $usuario -> getDiscapacidad(), PDO::PARAM_STR);
      $sentencia -> bindParam(':tipo', $usuario -> getTipo(), PDO::PARAM_STR);
      $sentencia -> bindParam(':apoyo', $usuario -> getApoyo(), PDO::PARAM_STR); */

      $usuario_insertado= $sentencia -> execute();
    } catch (PDOException $ex){
        print 'ERROR'. $ex->getMessage();
    }
  }
  return $usuario_insertado;
}

public static function get_usuario_email($conexion, $email) {
        $usuario = null;

        if (isset($conexion)) {
            try {
                include_once 'usuario.inc.php';

                $sql = "SELECT * FROM alumnos WHERE email = :email";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);

                $sentencia -> execute();

                $resultado = $sentencia -> fetch();

                if (!empty($resultado)) {
                    $usuario = new Usuario($resultado['id'],
                            $resultado['usuario'],
                            $resultado['password'],
                            $resultado['email'],
                            $resultado['fecha_registro'],
                            $resultado['activo']);
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }

        return $usuario;
    }

public static function get_usuario_id($conexion, $id) {
        $usuario = null;
        $idtemp = $usuario -> get_id();

        if (isset($conexion)) {
            try {
                include_once 'usuario.inc.php';

                $sql = "SELECT * FROM alumnos WHERE id = :id";

                $sentencia = $conexion -> prepare($sql);

                $sentencia -> bindParam(':id', $id, PDO::PARAM_STR);

                $sentencia -> execute();

                $resultado = $sentencia -> fetch();

                if (!empty($resultado)) {
                    $usuario = new Usuario($resultado['id'],
                            $resultado['usuario'],
                            $resultado['password'],
                            $resultado['email'],
                            $resultado['fecha_registro'],
                            $resultado['activo']);
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }

        return $usuario;
    }

}
