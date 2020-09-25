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

    function insertarCategoria($nombre,$descripcion,$origen){
        echo $nombre . $descripcion . $origen;
        $query = $this->dbCategorias->prepare("INSERT INTO categoria (nombre, descripcion, origen) VALUES(?,?,?)");
        $query->execute([$nombre,$descripcion,$origen]);
    }

    function editarCategoriaID($nombre,$descripcion,$origen,$id){// no deberia haber un values??
        $query = $this->dbCategorias->prepare("UPDATE `categoria` SET nombre=$nombre, descripcion =$descripcion, precio=$origen WHERE id =$id");
        $query->execute([$nombre,$descripcion,$origen,$id]);
    }

    function eliminarCategoriaID($id){
        $query = $this->dbCategorias->prepare('DELETE FROM `categoria` WHERE id_categoria = ?');
        $query->execute([$id]);
    }

 }