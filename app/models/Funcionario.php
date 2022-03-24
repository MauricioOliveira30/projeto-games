<?php

namespace app\models;
use app\core\Model;

class Cliente extends Model{



    public function lista(){
       //instrução sql
       $sql = "SELECT * FROM tblfuncionarios";
       $qry = $this->db->query($sql);
       return $qry->fetchALL(\PDO::FETCH_OBJ);
    }

    public function inserir($games){
        //$nome = $_POST["nome"];
        //INSERT INTO contato (nome,idade) values ('$nome','$idade');

        $sql = "INSERT INTO tblfuncionarios SET
     :funcionario,
     :salario,
     :conserta_bug
            ";
        $qry = $this->db->prepare($sql);

        $qry->bindValue(":funcionario", $games->funcionario);
        $qry->bindValue(":salario", $games->salario);
        $qry->bindValue(":conserta_bug", $games->conserta_bug);
        
        $qry->execute();

        return $this->db->lastInsertId();


    }
    public function getGames($id){
        $sql = "SELECT * FROM tblfuncionarios WHERE idfuncionario = $id";
        $qry = $this -> db -> query($sql);
        return $qry -> fetch(\PDO::FETCH_OBJ);
    }
    public function editar($games){
        $sql = "UPDATE tblfuncionarios SET
        funcionario = :funcionario,
       salario = :salario,
       conserta_bug = :conserta_bug
        WHERE idfuncionario = :id";

        $qry = $this -> db -> prepare($sql);

        $qry -> bindValue(":funcionario", $games -> funcionario);
        $qry -> bindValue(":salario", $games -> salario);
        $qry -> bindValue(":conserta_bug", $games ->conserta_bug);
        $qry -> bindValue(":id", $games -> idfuncionario);
        $qry -> execute();
        return $games -> idfuncionario;
    }

    public function excluir($id){
        $sql = "DELETE FROM tblfuncionarios WHERE idfuncionario = $id";
        $qry = $this -> db -> query($sql);
    }

}
