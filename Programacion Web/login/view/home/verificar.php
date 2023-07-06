<?php

require("c://xampp/htdocs/login/controller/homeController.php");

session_start();

$obj = new homeController();
$correo = $obj->limpiarCorreo($_POST["username"]) ;
$contraseña = $obj->limpiarCadena($_POST["password"]);
$bandera = $obj->verificarUsuario($correo,$contraseña);

if($bandera){

    $_SESSION["usuario"] = $correo;
    header("Location:panel_control.php");

}else{
    $error = "<li>Las claves son incorrectas</li>";
    header("Location:login.php?error=".$error);
}
?>