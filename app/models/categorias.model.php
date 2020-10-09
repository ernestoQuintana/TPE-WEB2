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
    
    function getNombreCategoria($idCategoria){
        $query = $this->dbCategorias->prepare('SELECT categoria.nombre_categoria ,categoria.descripcion_categoria 
        ,categoria.origen , categoria.id_categoria FROM categoria WHERE id_categoria =?');//para que traiga el nombre de la categoria
        $query->execute([$idCategoria]);
        $nombreCategoriaId = $query->fetch(PDO::FETCH_OBJ);
        return $nombreCategoriaId;
    }
    

    function insertarCategoria($nombre,$descripcion,$origen){
        $query = $this->dbCategorias->prepare("INSERT INTO categoria (nombre_categoria, descripcion_categoria, origen) VALUES(?,?,?)");
        $query->execute([$nombre,$descripcion,$origen]);
    }

    function editarCategoriaID($nombre,$descripcion,$origen,$id){
        
        $query = $this->dbCategorias->prepare("UPDATE `categoria` SET `nombre_categoria`=?,
         `descripcion_categoria` = ?,`origen` = ? WHERE `id_categoria` =?");
        $query->execute([$nombre,$descripcion,$origen,$id]);
    }

    function eliminarCategoriaID($id){
        $query = $this->dbCategorias->prepare('DELETE FROM `categoria` WHERE id_categoria = ?');
        $query->execute([$id]);
    }

 }