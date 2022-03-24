<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Cliente;

class ClienteController extends Controller{

    public function index(){
        $objCliente = new Cliente();
        $dados["lista"] = $objcliente -> lista();
        $dados["view"] = "Cliente/index";
        $this -> load("template", $dados);
    }
    public function edit($id){
        $objcliente = new Cliente();
        $dados["cliente"] = $objcliente->getCliente($id);
        $dados["view"] = "Cliente/createc";
        //echo "<pre>";
        //print_r($dados);
        //exit;
  
        $this->load("template",$dados);
  

        public function create(){
            $dados["view"] = "Cliente/createc";
            $this->load("template",$dados);
        }      

    public function salvar(){
        $objGames = new Games();
        $games = new \stdClass();
        $games ->  nome = $_POST["nome"];
        $games -> satisfacao = $_POST["satisfacao"];
        $games -> compra = $_POST["compra"];
        $games->idcliente    =($_POST["idcliente"]) ? $_POST["idcliente"] : NULL;

        if(!$games -> idcliente){
            $objGames -> inserir($games);
        } else {
            $objGames -> editar($games);
        }

        header("location:".URL_BASE."cliente");
    }

    public function excluir($id){
        $objGames = new Games();
        $objGames -> excluir($id);

        header("location:" .URL_BASE. "cliente");
    }
}