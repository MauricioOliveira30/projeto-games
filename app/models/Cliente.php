<?php

namespace app\models;
use app\core\Model;

class Cliente extends Model{



    public function lista(){
       //instrução sql
       $sql = "SELECT * FROM tblclientes";
       $qry = $this->db->query($sql);
       return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function inserir($games){
        //$nome = $_POST["nome"];
        //INSERT INTO contato (nome,idade) values ('$nome','$idade');

        $sql = "INSERT INTO tblclientes SET
     :nome,
    :satisfacao,
    :compra
            ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":nome", $games->nome);
        $qry->bindValue(":satisfacao", $games->satisfacao);
        $qry->bindValue(":compra", $games->compra);
        
        $qry->execute();

        return $this->db->lastInsertId();


    }
    public function getGames($id){
        $sql = "SELECT * FROM tblclientes WHERE idcliente = $id";
        $qry = $this -> db -> query($sql);
        return $qry -> fetch(\PDO::FETCH_OBJ);
    }
    public function editar($games){
        $sql = "UPDATE tblclientes SET
        nome = :nome,
       satisfacao = :satisfacao,
       compra = :compra
        WHERE idcliente = :id";

        $qry = $this -> db -> prepare($sql);

        $qry -> bindValue(":nome", $games -> nome);
        $qry -> bindValue(":satisfacao", $games -> satisfacao);
        $qry -> bindValue(":compra", $games ->compra);
        $qry -> bindValue(":id", $games -> idcliente);
        $qry -> execute();
        return $games -> idcliente;
    }

    public function excluir($id){
        $sql = "DELETE FROM tblclientes WHERE idcliente = $id";
        $qry = $this -> db -> query($sql);
    }

}
