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


 }