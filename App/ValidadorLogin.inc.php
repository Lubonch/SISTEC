<?php
include_once 'app/Repositorio_Usuario.inc.php';

class ValidadorLogin {

    private $usuario;
    private $error;

    public function __construct($email, $password, $conexion) {
        $this -> error = "";

        if (!$this -> variable_iniciada($email) || !$this -> variable_iniciada($password)) {
            $this -> usuario = null;
            $this -> error = "Debes introducir tu email y tu contraseña";
        } else {
            $this -> usuario = RepositorioUsuario::get_usuario_email($conexion, $email);

            if (is_null($this -> usuario) || !password_verify($password, $this -> usuario -> get_password())) {
                $this -> error = "Datos incorrectos";
            }
        }
    }

    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }

    public function get_usuario() {
        return $this -> usuario;
    }

    public function get_error() {
        return $this -> error;
    }

    public function mostrar_error() {
        if ($this -> error !== '') {
            echo "<br><div class='alert alert-danger' role='alert'>";
            echo $this -> error;
            echo "</div><br>";
        }
    }
}
