<?php

class ModelComentarios{

    private $dbComentarios;

    function __construct(){
        $this->dbComentarios = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }


    function getComentariosPorProducto($idProducto){
        $comentario =  $this->dbComentarios->prepare('SELECT comentario.texto, comentario.puntuacion FROM comentario INNER JOIN producto 
        ON producto.id = comentario.id_producto WHERE producto.id = ?');
        $comentario->execute([$idProducto]);
        return $comentario->fetchAll(PDO::FETCH_OBJ);
    }

    function DeleteComentarioDelModelo($id){
        $comentario = $this->dbComentarios->prepare('DELETE FROM comentario  WHERE id_comentario = ?');
        $comentario->execute([$id]);
        return $comentario->rowCount();// Trae un numero mayor a 0 si borro.
    }


    function insertarComentario($titulo,$texto ,$puntuacion){
        $comentario = $this->dbComentarios->prepare('INSERT INTO comentario (titulo,texto,puntuacion) VALUES(?,?,?)');
        $comentario->execute([$titulo,$texto,$puntuacion]);
        return $this->dbComentarios->lastInsertId();//Trae el ultimo id que toco.
    }




}