<?php

class ModelProducto {
    private $dbProductos;

    function __construct(){
        $this->dbProductos = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }
    //llamamos todos los productos
    function getAllProductos(){
        $query =$this->dbProductos->prepare('SELECT * FROM producto');
        $query->execute();
        $productos= $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    //llamamos un producto por id
    function getDetalleProducto($id){
        
        $query =$this->dbProductos->prepare('SELECT * FROM `producto` WHERE id_producto = ?');
        $query->execute([$id]);
        $producto= $query->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    //llamamos productos por categoria
    function getProductosByCategoria($tipoCategoria){   
           
        $query =$this->dbProductos->prepare('SELECT * FROM `producto` WHERE categoria = ?');
        $query->execute([$tipoCategoria]);
        $productos= $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

}