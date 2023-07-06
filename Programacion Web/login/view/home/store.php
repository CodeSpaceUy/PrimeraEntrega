<?php

require("c://xampp/htdocs/login/controller/homeController.php");


$obj = new homeController();

 $name = $_POST["nombre"];
 $surname = $_POST["apellido"];
$ci = $_POST["cedula"];
$correo = $_POST["correo"];
$password = $_POST["contra"];
 $passwordTwo = $_POST["contraDos"];


 if(empty($correo) || empty($password) || empty($passwordTwo)){
    $error .= "<li>Completa los campos</li>";
    header("Location:singup.php?error=".$error."&&correo=".$correo."&&contraseña=".$password."&&confirmarContraseña=".$passwordTwo);
 }else if($correo && $password && $passwordTwo){
    if($password == $passwordTwo){
        if($obj->guardarUsuario($ci,$correo, $name, $surname, $password) == false){
            $error .= "<li>El correo o CI ya estan registrados </li>";
            header("Location:singup.php?error=".$error."&&correo=".$correo."&&contraseña=".$password."&&confirmarContraseña=".$passwordTwo);

        }else{
            header("Location:login.php");
        }
    }else{
        $error .= "<li>Las contraseñas no son iguales</li>";
        header("Location:singup.php?error=".$error."&&correo=".$correo."&&contraseña=".$password."&&confirmarContraseña=".$passwordTwo);

    }
 }
?>