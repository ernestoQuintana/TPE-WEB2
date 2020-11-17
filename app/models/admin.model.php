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

    function insertUser($nombre,$passEncrypt,$email){
        $query = $this->dbAdministrador->prepare('INSERT INTO administrador (nombre_administrador,password_administrador, email) VALUES (?,?,?)');
        $query->execute([$nombre,$passEncrypt,$email]);
    }


    /************ PERMISOS DE USUARIO *************/

    function getAllUsers(){
        $query = $this->dbAdministrador->prepare('SELECT * FROM administrador');
        $query->execute([]);
        $adminDB = $query->fetchAll(PDO::FETCH_OBJ);
        return $adminDB;
    }
    function eliminarUsuarioID($id){
        $query = $this->dbAdministrador->prepare('DELETE FROM administrador WHERE id = ?');
        $query->execute([$id]);
    }
/*
    function permisoUsuarioID($id){
        $query = $this->dbAdministrador->prepare('INSERT INTO administrador.permisos FROM administrador WHERE id = ?');
        $query->execute([$id]);
        $adminDB = $query->fetch(PDO::FETCH_OBJ);
        return $adminDB;
    }*/
 }