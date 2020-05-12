<?php



class ValidadorRegistro {


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
  private $apoyo;

  private $error_nombre;
  private $error_apellido;
  private $error_sexo;
  private $error_fecha_nacimiento;*/
  private $error_usuario;
  private $error_password;
  private $error_email;

  /*private $error_direccion;
  private $error_altura;
  private $error_piso;
  private $error_cp;
  private $error_localidad;
  private $error_provincia;
  private $error_telefono;
  private $error_telefono_emergencia;
  private $error_cel;

  private $error_leer;
  private $error_nivel;
  private $error_final;

  private $error_cursos;
  private $error_como;
  private $error_discapacidad;
  private $error_tipo;
  private $error_apoyo;*/

public function __construct(/*$nombre, $apellido, $sexo, $dni, $fecha_nacimiento,*/$usuario, $password, $email/*, $direccion, $altura, $piso, $cp, $localidad, $provincia, $telefono, $telefono_emergencia, $cel, $leer, $nivel, $final, $cursos, $como, $discapacidad, $tipo, $apoyo,*/){
    /*$this -> nombre = "";
    $this -> apellido = "";
    $this -> sexo = "";
    $this -> dni = "";
    $this -> fecha_nacimiento = "";*/

    $this -> usuario = "";
    $this -> password = "";
    $this -> email = "";

    /*$this -> direccion = "";
    $this -> altura = "";
    $this -> piso = "";
    $this -> cp = "";
    $this -> localidad = "";
    $this -> provincia = "";
    $this -> telefono = "";
    $this -> telefono_emergencia = "";
    $this -> cel = "";

    $this -> leer = "";
    $this -> nivel = "";
    $this -> final = "";
    $this -> cursos = "";
    $this -> como = "";

    $this -> discapacidad = "";
    $this -> tipo = "";
    $this -> apoyo = "";*/

    $this -> error_usuario= $this -> validar_usuario($usuario);
    $this -> error_email= $this -> validar_email($email);
    $this -> error_password= $this -> validar_password($password);

    if ($this -> error_password == ""){
      $this -> password= $password;
    }

    /*$this -> $error_direccion= $this -> validar_direccion($direccion);
    $this -> $error_altura= $this -> validar_altura($altura);
    $this -> $error_cp= $this -> validar_cp($cp);
    $this -> $error_localidad= $this -> validar_localidad($localidad);
    $this -> $error_telefono= $this -> validar_telefono($telefono);
    $this -> $error_telefono_emergencia= $this -> validar_telefono_emergencia($telefono_emergencia);
    $this -> $error_cel= $this -> validar_cel($cel);
    $this -> $error_como= $this -> validar_como($como);*/

  }

  private function variable_iniciada($variable){
    if (isset($variable) && !empty($variable)){
      return true;
    }
    else{
      return false;
    }
  }

  private function validar_usuario($usuario){
    if (!$this -> variable_iniciada($usuario)){
      return "Por favor escribe un nombre de usuario";
    }
    else{
      $this -> usuario= $usuario;
    }

    if (strlen($usuario)<4){
      return "El usuario debe tener más de 4 caracteres";
    }
    if (strlen($usuario)>24){
      return "El usuario debe tener menos de 24 caracteres";
    }

    return "";

  }

  private function validar_email($email){
    if (!$this -> variable_iniciada($email)){
      return "Por favor introduce tu email";
    }

    else {
      $this -> email = $email;
    }

    return "";

  }

  private function validar_password($password){
    if (!$this -> variable_iniciada($password)){
      return "Por favor introduce la contraseña";
    }

    return "";

  }

  /*private function validar_direccion($direccion){
    if (!$this -> variable_iniciada($direccion)){
      return "Por favor introduce tu direccion";
    }

    else {
      $this -> direccion = $direccion;
    }

    return "";

  }

  private function validar_altura($altura){
    if (!$this -> variable_iniciada($altura)){
      return "Por favor introduce tu altura";
    }

    else {
      $this -> altura = $altura;
    }

    return "";

  }

  private function validar_cp($cp){
    if (!$this -> variable_iniciada($cp)){
      return "Por favor introduce tu codigo postal";
    }

    else {
      $this -> cp = $cp;
    }

    return "";
  }

  private function validar_localidad($localidad){
    if (!$this -> variable_iniciada($localidad)){
      return "Por favor introduce tu localidad";
    }

    else {
      $this -> localidad = $localidad;
    }

    return "";
  }

  private function validar_telefono($telefono){
    if (!$this -> variable_iniciada($telefono)){
      return "Por favor introduce tu telefono";
    }

    else {
      $this -> telefono = $telefono;
    }

    return "";
  }

  private function validar_telefono_emergencia($telefono_emergencia){
    if (!$this -> variable_iniciada($telefono_emergencia)){
      return "Por favor introduce un telefono para emergencias";
    }

    else {
      $this -> telefono_emergencia = $telefono_emergencia;
    }

    return "";
  }

  private function validar_cel($cel){
    if (!$this -> variable_iniciada($cel)){
      return "Por favor introduce un telefono celular";
    }

    else {
      $this -> cel = $cel;
    }

    return "";
  }

  private function validar_como($como){
    if (!$this -> variable_iniciada($como)){
      return "Por favor tomate un minuto para contarnos como nos conociste, ¡es muy importante para nosotros!";
    }

    else {
      $this -> como = $como;
    }

    return "";
  }*/

/*  public function get_nombre(){
    return $this -> nombre;
  }

  public function get_apellido(){
    return $this -> apellido;
  }

  public function get_sexo(){
    return $this -> sexo;
  }

  public function get_dni(){
    return $this -> dni;
  }

  public function get_fecha_nacimiento(){
    return $this -> fecha_nacimiento;
  }
*/
  public function get_usuario(){
    return $this -> usuario;
  }

  public function get_email(){
    return $this -> email;
  }

  public function get_password(){
    return $this -> password;
  }


/*  public function get_direccion(){
    return $this -> direccion;
  }

  public function get_altura(){
    return $this -> altura;
  }

  public function get_piso(){
    return $this -> piso;
  }

  public function get_cp(){
    return $this -> cp;
  }

  public function get_localidad(){
    return $this -> localidad;
  }

  public function get_provincia(){
    return $this -> provincia;
  }

  public function get_telefono(){
    return $this -> telefono;
  }

  public function get_telefono_emergencia(){
    return $this -> telefono_emergencia;
  }

  public function get_cel(){
    return $this -> cel;
  }

  public function get_leer(){
    return $this -> leer;
  }

  public function get_nivel(){
    return $this -> nivel;
  }

  public function get_final(){
    return $this -> final;
  }

  public function get_cursos(){
    return $this -> cursos;
  }

  public function get_como(){
    return $this -> como;
  }

  public function get_discapacidad(){
    return $this -> discapacidad;
  }

  public function get_tipo(){
    return $this -> tipo;
  }

  public function get_apoyo(){
    return $this -> apoyo;
  }*/


  public function get_error_usuario(){
    return $this -> error_usuario;
  }

  public function get_error_email(){
    return $this -> error_email;
  }

  /*public function get_error_direccion(){
    return $this -> error_direccion;
  }

  public function get_error_altura(){
    return $this -> error_altura;
  }

  public function get_error_cp(){
    return $this -> error_cp;
  }

  public function get_error_localidad(){
    return $this -> error_localidad;
  }

  public function get_error_telefono(){
    return $this -> error_telefono;
  }

  public function get_error_telefono_emergencia(){
    return $this -> error_telefono_emergencia;
  }

  public function get_error_cel(){
    return $this -> error_cel;
  }

  public function get_error_como(){
    return $this -> error_como;
  }*/

  public function get_error_password(){
    return $this -> error_password;
  }

  /*public function mostrar_nombre(){
    if($this -> nombre !==""){

    }
  }*/

  public function registro_validado() {
        if ($this -> error_usuario === "" &&
                $this -> error_password === "" &&
                $this -> error_email === "") {
            return true;
        } else {
            return false;
        }
    }

}
