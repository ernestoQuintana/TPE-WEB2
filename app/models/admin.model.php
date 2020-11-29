<?php
 
 class ModelAdmin{

    private $dbAdministrador;

    function __construct(){
        $this->dbAdministrador = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }
    
    function getAdmin($nombre = 'admin'){
        $query = $this->dbAdministrador->prepare("SELECT * FROM `administrador` WHERE nombre_administrador = ?");
        $query->execute([$nombre]);
        $adminDB = $query->fetch(PDO::FETCH_OBJ);
        return $adminDB;
    }

    function insertUser($nombre,$passEncrypt,$email,$imagen = null){
        $img = null;
        if($imagen != null){
            $img = $this->uploadImagen($imagen);
            $query = $this->dbAdministrador->prepare('INSERT INTO administrador (nombre_administrador,password_administrador,email,imagen) VALUES (?,?,?,?)');   
        }else{
            $query = $this->dbAdministrador->prepare('INSERT INTO administrador (nombre_administrador,password_administrador,email,imagen) VALUES (?,?,?,?)');
        }
        $query->execute([$nombre,$passEncrypt,$email,$img]);
        return $this->dbAdministrador->lastInsertId();
    }

    function uploadImagen($imagen){
        $target = 'img/' . uniqid() . '.jpg';
        move_uploaded_file($imagen, $target);
        return $target;
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
    function getAdminID($id){
        $query = $this->dbAdministrador->prepare('SELECT * FROM administrador WHERE id = ?');
        $query->execute([$id]);
        $adminDB = $query->fetch(PDO::FETCH_OBJ);
        return $adminDB;
    }
    function modificarPermiso($permiso ,$id){
        $query = $this->dbAdministrador->prepare('UPDATE `administrador` SET `permiso`= ? WHERE `id`= ?');
        $query->execute([$permiso ,$id]);
    }
 }