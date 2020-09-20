<?php

class ModelProducto {
    private $dbProductos;

    function __construct(){
        $this->$dbProductos = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }

    function getAllProductos(){
        $query =$this->dbProductos->prepare('SELECT * FROM producto');
        $query->execute();
        $productos= $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function getProductosByCategoria($categoria){
        $query =$this->dbProductos->prepare('SELECT * FROM producto WHERE categoria = ?');
        $query->execute([$categoria]);
        $productosCategoria= $query->fetchAll(PDO::FETCH_OBJ);
        return $productosCategoria;
    }

    function getDetalleProducto($id){
        $query =$this->dbProductos->prepare('SELECT * FROM producto WHERE id=?');
        $query->execute([$id]);
        $detalleProducto= $query->fetchAll(PDO::FETCH_OBJ);
        return $detalleProducto;
    }

}