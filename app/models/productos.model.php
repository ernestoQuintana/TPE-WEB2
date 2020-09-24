<?php

class ModelProducto {
    private $dbProductos;

    function __construct(){
        $this->dbProductos = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }
    //llamamos todos los productos
    function getAllProductos(){
        $query =$this->dbProductos->prepare('SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria');
        $query->execute();
        $productos= $query->fetchAll(PDO::FETCH_OBJ);
        var_dump($productos);
        return $productos;
    }

    //llamamos un producto por id
    function getDetalleProducto($id){
    
        $query =$this->dbProductos->prepare('SELECT * FROM `producto` WHERE id = ?');
        $query->execute([$id]);
        $producto= $query->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    //llamamos productos por categoria
    function getProductosByCategoria($tipoCategoria){   
    
        $query =$this->dbProductos->prepare('SELECT * FROM `producto` WHERE id_categoria = ?');
        $query->execute([$tipoCategoria]);
        $productos= $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function insertarProducto($nombre,$descripcion,$precio,$categoria){
        $query = $this->dbProductos->prepare("INSERT INTO producto(nombre, description, precio) VALUES(?,?,?)");
        $query->execute([$nombre,$descripcion,$precio,$categoria]);
    }

    function BorrarProductoID($id){
        $query = $this->dbProductos->prepare('DELETE FROM `producto` WHERE id = ?');
        $query->execute([$id]);
    }

}