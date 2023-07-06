<?php

class homeModel{
    private $PDO;
    public function __construct(){
        require("c://xampp/htdocs/login/config/db.php");
        $pdo = new db();

        $this->PDO = $pdo->conexion();
    }
    public function agregarNuevoUsuario($ci,$correo, $name, $surname, $password){
        $statement = $this->PDO->prepare("INSERT INTO `usuarios` VALUES (:ci, :correo, :name, :surname, :password,null,null)");
        $statement->bindParam(":ci", $ci);
        $statement->bindParam(":correo", $correo);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":surname", $surname);
        $statement->bindParam(":password", $password);

        try{
            $statement->execute();
            return true;
        }catch(PDOException $e){
            return false;
        }

        // return ($statement->execute()) ? true : false;
    }

    public function obtenerClave($correo){
        $statement = $this->PDO->prepare("SELECT contrasenia FROM usuarios WHERE correo = :correo");

        $statement->bindParam(":correo", $correo);
        return ($statement->execute()) ? $statement->fetch()['contrasenia'] : false;
    }
}

?>