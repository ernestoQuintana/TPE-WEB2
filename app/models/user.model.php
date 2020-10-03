<?php
 
 class ModelUsuario{

    private $dbUsuarios;

    function __construct(){
        $this->dbUsuarios = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }
    
    function getUsuario($nombre){
        $query = $this->dbUsuarios->prepare("SELECT * FROM `usuario` WHERE nombre_usuario = ?");
        $query->execute([$nombre]);
        $usuarioDB = $query->fetch(PDO::FETCH_OBJ);
        return $usuarioDB;
    }


 }