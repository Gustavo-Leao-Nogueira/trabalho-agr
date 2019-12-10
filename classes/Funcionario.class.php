<?php

require_once '../model/Banco.inc.php';

class Funcionario{
    private $id;
    private $nome;
    private $banco;

    function __construct($id=null, $nome=''){ 
        $this->id = $id; 
        $this->nome = $nome;  
        $this->banco = new Banco('banco', 'root', '');
    }
    function __set($chave, $valor){ $this->$chave = $valor; }
    function __get($chave){ return $this->$chave; }

    
    function getFuncionario($id=null){
        if($id == null){
            return array(
                ":id" => $this->id,
                ":nome" => $this->nome
            );
        }
        else{
            $sql = "SELECT * FROM funcionario f WHERE f.id = :id";
            $array_de_dados = array(":id" => $id);
            $resposta = $this->banco->executar($sql, $array_de_dados);
            return $resposta;
        }
    }
    function getFuncionarios(){
        $sql = "SELECT * FROM funcionario";
        $resposta = $this->banco->executar_query($sql);
        return $resposta;
    }


    function setFuncionario(){
        $sql = "INSERT INTO funcionario(id, nome) VALUES(:id, :nome);";
        $resposta = $this->banco->executar($sql, $this->getFuncionario());
        return $resposta;
    }

    function updateFuncionario(){
        $sql = "UPDATE funcionario f SET f.nome = :nome WHERE f.id = :id;";
        $resposta = $this->banco->executar($sql, $this->getFuncionario());
        return $resposta;
    }

    function deleteFuncionario($id=0){
        $sql = "DELETE FROM funcionario WHERE id = :id;";
        $resposta = $this->banco->executar($sql, array(":id" => $id));
        return $resposta;
    }
}

?>