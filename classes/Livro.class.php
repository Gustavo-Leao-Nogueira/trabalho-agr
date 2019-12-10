<?php

require_once '../model/Banco.inc.php';

class Livro{
    private $id;
    private $id_fornecedor;
    private $titulo;
    private $ano_publicacao;
    private $edicao;
    private $editora;
    private $banco;

    function __construct($id=null, $id_fornecedor=null, $titulo='', $ano_publicacao=0, $edicao=0, $editora=''){ 
        $this->id = $id; 
        $this->id_fornecedor = $id_fornecedor;  
        $this->titulo = $titulo;  
        $this->ano_publicacao = $ano_publicacao;  
        $this->edicao = $edicao;  
        $this->editora = $editora;
        $this->banco = new Banco('banco', 'root', '');
    }
    function __set($chave, $valor){ $this->$chave = $valor; }
    function __get($chave){ return $this->$chave; }

    
    function getLivro($id=null){
        if($id == null){
            return array(
                ":id" => intval($this->id), 
                ":id_fornecedor" => $this->id_fornecedor,  
                ":titulo" => $this->titulo,  
                ":ano_publicacao" => $this->ano_publicacao,  
                ":edicao" => $this->edicao,  
                ":editora" => $this->editora
            );
        }
        else{
            $sql = "SELECT * FROM livro l WHERE l.id = :id";
            $array_de_dados = array(":id" => $id);
            $resposta = $this->banco->executar($sql, $array_de_dados);
            return $resposta;
        }
    }
    function getLivros(){
        $sql = "SELECT * FROM livro";
        $resposta = $this->banco->executar_query($sql);
        return $resposta;
    }


    function setLivro(){
        $sql = "INSERT INTO livro(id, id_fornecedor, titulo, ano_publicacao, edicao, editora) VALUES(:id, :id_fornecedor, :titulo, :ano_publicacao, :edicao, :editora);";
        $resposta = $this->banco->executar($sql, $this->getLivro());
        return $resposta;
    }

    function updateLivro(){
var_dump($this->getLivro());

        $sql = "UPDATE livro l SET l.id_fornecedor = :id_fornecedor, l.titulo :titulo, l.ano_publicacao = :ano_publicacao, l.edicao = :edicao, l.editora = :editora  WHERE l.id = :id;";
        $resposta = $this->banco->executar($sql, $this->getLivro());
        return $resposta;
    }

    function deleteLivro($id=0){
        $sql = "DELETE FROM livro WHERE id = :id;";
        $resposta = $this->banco->executar($sql, array(":id" => $id));
        return $resposta;
    }
}

?>