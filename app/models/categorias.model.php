<?php
 
 class ModelCategoria{
    private $dbCategorias;

    function __construct(){
        $this->dbCategorias = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    function getAllCategorias(){ 
        $query = $this->dbCategorias->prepare('SELECT * FROM categoria');
        $query->execute();
        $categoria = $query->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }
    /*
    function getCategoria($tipoCategoria){
        $query = $this->dbCategorias->prepare('SELECT * FROM categoria WHERE nombre LIKE id_categoria =?');//para que traiga el nombre de la categoria
        $query->execute($tipoCategoria);
        $categoria = $query->fetch(PDO::FETCH_OBJ);
        return $categoria;
    }
    */

    function insertarCategoria($nombre,$descripcion,$origen){
        echo $nombre . $descripcion . $origen;
        $query = $this->dbCategorias->prepare("INSERT INTO categoria (nombre, descripcion, origen) VALUES(?,?,?)");
        $query->execute([$nombre,$descripcion,$origen]);
    }

    function editarCategoriaID($nombre,$descripcion,$origen,$id){
        var_dump($nombre);
        $query = $this->dbCategorias->prepare(" UPDATE `categoria` SET `nombre`=$nombre,
         `descripcion` = $descripcion, `origen` =$origen WHERE id =`$id`");
        $query->execute([$nombre,$descripcion,$origen]);
    }

    function eliminarCategoriaID($id){
        $query = $this->dbCategorias->prepare('DELETE FROM `categoria` WHERE id_categoria = ?');
        $query->execute([$id]);
    }

 }