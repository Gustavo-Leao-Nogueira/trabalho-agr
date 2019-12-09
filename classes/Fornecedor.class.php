<?php

require_once '../model/Banco.inc.php';

class Fornecedor{
    private $id;
    private $nome;
    private $endereco;
    private $cidade;
    private $telefone;
    private $banco;

    function __construct($id=null, $nome='', $endereco='', $cidade='', $telefone=''){ 
        $this->id = $id; 
        $this->nome = $nome;  
        $this->endereco = $endereco;  
        $this->cidade = $cidade;  
        $this->telefone = $telefone;
        $this->banco = new Banco('banco', 'root', '');
    }
    function __set($chave, $valor){ $this->$chave = $valor; }
    function __get($chave){ return $this->$chave; }

    
    function getFornecedor($id=null){
        if($id == null){
            return array(
                ":id" => $this->id,
                ":nome" => $this->nome
            );
        }
        else{
            $sql = "SELECT * FROM fornecedor f WHERE f.id = :id";
            $array_de_dados = array(":id" => $id);
            $resposta = $this->banco->executar($sql, $array_de_dados);
            return $resposta;
        }
    }
    function getFornecedores(){
        $sql = "SELECT * FROM fornecedor";
        $resposta = $this->banco->executar_query($sql);
        return $resposta;
    }


    function setFornecedor(){
        $sql = "INSERT INTO fornecedor(id, nome, endereco, cidade, telefone) VALUES(:id, :nome, :endereco, :cidade, :telefone);";
        $resposta = $this->banco->executar($sql, $this->getFornecedor());
        return $resposta;
    }

    function updateFornecedor(){
        $sql = "UPDATE funcionario f SET f.nome = :nome, f.endereco = :endereco, f.cidade = :cidade, f.telefone = :telefone WHERE c.id = :id;";
        $resposta = $this->banco->executar($sql, $this->getFornecedor());
        return $resposta;
    }

    function deleteFornecedor($id=0){
        $sql = "DELETE FROM fornecedor WHERE id = :id;";
        $resposta = $this->banco->executar($sql, array(":id" => $id));
        return $resposta;
    }
}

?>