<?php
 
 class ModelAdmin{

    private $dbAdministrador;

    function __construct(){
        $this->dbAdministrador = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }
    
    function getAdmin($nombre){
        $query = $this->dbAdministrador->prepare("SELECT * FROM `administrador` WHERE nombre_administrador = ?");
        $query->execute([$nombre]);
        $adminDB = $query->fetch(PDO::FETCH_OBJ);
        return $adminDB;
    }

    function getUser($nombre,$passEncrypt,$email){
        $query = $this->dbAdministrador->prepare('INSERT INTO administrador (nombre_administrador,password_administrador, email) VALUES (?,?,?)');
        $query->execute([$nombre,$passEncrypt,$email]);
    }

 }