<?php

class Usuario {

    private $id;
    /*private $nombre;
    private $apellido;
    private $sexo;
    private $dni;
    private $fecha_nacimiento;*/

    private $usuario;
    private $password;
    private $email;

    /*private $direccion;
    private $altura;
    private $piso;
    private $cp;
    private $localidad;
    private $provincia;
    private $telefono;
    private $telefono_emergencia;
    private $cel;

    private $leer;
    private $nivel;
    private $final;

    private $cursos;
    private $como;
    private $discapacidad;
    private $tipo;
    private $apoyo;*/

    private $fecha_registro;
    private $activo;


    public function __construct($id, /*$nombre, $apellido, $sexo, $dni, $fecha_nacimiento,*/  $usuario, $password, $email, /*$direccion, $altura, $piso, $cp, $localidad, $provincia, $telefono, $telefono_emergencia, $cel, $leer, $nivel, $final, $cursos, $como, $discapacidad, $tipo, $apoyo,*/  $fecha_registro, $activo){

      $this -> id = $id;
      /*$this -> nombre = $nombre;
      $this -> apellido = $apellido;
      $this -> sexo = $sexo;
      $this -> dni = $dni;
      $this -> fecha_nacimiento = $fecha_nacimiento;*/

      $this -> usuario = $usuario;
      $this -> password = $password;
      $this -> email = $email;

      /*$this -> direccion = $direccion;
      $this -> altura = $altura;
      $this -> piso = $piso;
      $this -> cp = $cp;
      $this -> localidad = $localidad;
      $this -> provincia = $provincia;
      $this -> telefono = $telefono;
      $this -> telefono_emergencia = $telefono_emergencia;
      $this -> cel = $cel;
      $this -> leer = $leer;
      $this -> nivel = $nivel;
      $this -> final = $final;
      $this -> cursos = $cursos;
      $this -> como = $como;
      $this -> discapacidad = $discapacidad;
      $this -> tipo = $tipo;
      $this -> apoyo = $apoyo;*/

      $this -> fecha_registro = $fecha_registro;
      $this -> activo = $activo;

    }

    public function get_id(){
      return $this -> id;
    }

    /*public function getNombre(){
      return $nombre;
    }

    public function getApellido(){
      return $apellido;
    }

    public function getSexo(){
      return $sexo;
    }

    public function getDni(){
      return $dni;
    }

    public function getFechaNacimiento(){
      return $fecha_nacimiento;
    }*/

    public function get_usuario(){
      return $this-> usuario;
    }

    public function get_password(){
      return $this-> password;
    }

    public function get_email(){
      return $this-> email;
    }

    /*public function getDireccion(){
      return $direccion;
    }

    public function getAltura(){
      return $altura;
    }

    public function getPiso(){
      return $piso;
    }

    public function getCp(){
      return $cp;
    }

    public function getLocalidad(){
      return $localidad;
    }

    public function getProvincia(){
      return $provincia;
    }

    public function getTelefono(){
      return $telefono;
    }

    public function getTelEmer(){
      return $telefono_emergencia;
    }

    public function getCel(){
      return $cel;
    }

    public function getNivel(){
      return $nivel;
    }

    public function getLeer(){
      return $leer;
    }

    public function getFinal(){
      return $final;
    }

    public function getCursos(){
      return $cursos;
    }

    public function getComo(){
      return $como;
    }

    public function getDiscapacidad(){
      return $discapacidad;
    }

    public function getTipo(){
      return $tipo;
    }

    public function getApoyo(){
      return $apoyo;
    }
*/
    public function get_fechaRegistro(){
      return $fecha_registro;
    }

    public function get_activo(){
      return $activo;
    }





  /*  public function setNombre(){
      $this -> nombre= $nombre;
    }

    public function setApellido(){
      $this -> apellido= $apellido;
    }

    public function setSexo(){
      $this -> sexo= $sexo;
    }

    public function setDni(){
      $this -> dni= $dni;
    }

    public function setFechaNacimiento(){
      $this -> fecha_nacimiento= $fecha_nacimiento;
    }*/

    public function setUsuario(){
      $this -> usuario= $usuario;
    }

    public function setPassword(){
      $this -> password= $password;
    }

    public function setEmail(){
      $this -> email= $email;
    }

    /*public function setDireccion(){
      $this -> direccion= $direccion;
    }

    public function setAltura(){
      $this -> altura= $altura;
    }

    public function setPiso(){
      $this -> piso= $piso;
    }

    public function setCp(){
      $this -> cp= $cp;
    }

    public function setLocalidad(){
      $this -> localidad= $localidad;
    }

    public function setProvincia(){
      $this -> provincia= $provincia;
    }

    public function setTelefono(){
      $this -> telefono= $telefono;
    }

    public function setTelEmer(){
      $this -> telefono_emergencia= $telefono_emergencia;
    }

    public function setCel(){
      $this -> cel= $cel;
    }

    public function setNivel(){
      $this -> nivel= $nivel;
    }

    public function setLeer(){
      $this -> leer= $leer;
    }

    public function setFinal(){
      $this -> final= $final;
    }

    public function setCursos(){
      $this -> cursos= $cursos;
    }

    public function setComo(){
      $this -> como= $como;
    }

    public function setDiscapacidad(){
      $this -> discapacidad= $discapacidad;
    }

    public function setTipo(){
      $this -> tipo= $tipo;
    }

    public function setApoyo(){
      $this -> apoyo= $apoyo;
    }*/

    public function setActivo(){
      $this -> activo= $activo;
    }
}
