<?php
 
 class ModelCategoria{

    private $dbCategorias;

    function __construct(){
        $this->$dbCategorias = $this->connect();
    }

    private function connect(){
        $this->$dbCategorias = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
        return $dbCategorias;
    }
    function getAllCategorias(){
        $query = $this->dbCategorias->prepare('SELECT * FROM categoria');
        $query->execute();
        $categoria = $query->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }
 }