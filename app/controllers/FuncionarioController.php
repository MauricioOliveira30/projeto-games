<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Funcionario;

class FuncionarioController extends Controller{

    public function index(){
        $objGames = new Game();
        $dados["lista"] = $objGame -> lista();
        $dados["view"] = "Game/index";
        $this -> load("template", $dados);
    }

    public function create(){
        $dados["view"] = "Contato/Create";
        $this -> load("template", $dados);
    }

    public function salvar(){
        $objGames = new Games();
        $games = new \stdClass();
        $games ->  nome = $_POST["funcionario"];
        $games -> satisfacao = $_POST["salario"];
        $games -> conserta_bug = $_POST["conserta_bug"];
        
        $games->idfuncionario     =($_POST["idfuncionario"]) ? $_POST["idfuncionario"] : NULL;
        if(!$games -> idfuncionario){
            $objGames -> inserir($games);
        } else {
            $objGames -> editar($games);
        }

        header("location:".URL_BASE."funcionario");
    }

    public function excluir($id){
        $objGames = new Games();
        $objGames -> excluir($id);

        header("location:" .URL_BASE. "funcionario");
    }
}