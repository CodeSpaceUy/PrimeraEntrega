<?php
class homeController{
    private $MODEL;
    public function __construct(){
        require("c://xampp/htdocs/login/model/homeModel.php");

        $this->MODEL = new homeModel();


    }

    public function guardarUsuario($ci,$correo, $name, $surname, $password){
    /*     echo $correo;
        echo $this->encriptar($password);
        die(); */

        $valor = $this->MODEL->agregarNuevoUsuario($ci,$this->limpiarCorreo($correo),$name,$surname ,$this->encriptar($this->limpiarCadena($password)));
        return $valor;
    }
    public function limpiarCadena($campo){
        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_UNSAFE_RAW);
        $campo = htmlspecialchars($campo);

        return($campo);
    }
    public function limpiarCorreo($campo){
        $campo = strip_tags($campo);
        $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
        $campo = htmlspecialchars($campo);

        return($campo);
    }

    public function encriptar($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function verificarUsuario($correo, $contraseña){
        $keydb = $this->MODEL->obtenerClave($correo); 
        return (password_verify($contraseña, $keydb)) ? true : false;
    }
}

?>