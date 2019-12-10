<?php

require_once '../model/Banco.inc.php';

class Estoque{
    private $id;
    private $id_livro;
    private $id_funcionario;
    private $quantidade_total;
    private $quantidade_recebida;
    private $data_atualizacao;
    private $banco;

    function __construct($id=null, $id_livro=0, $id_funcionario=0, $quantidade_total=0, $quantidade_recebida=0, $dada_atualizacao=null){ 
        $this->id = $id; 
        $this->id_livro = $id_livro;  
        $this->id_funcionario = $id_funcionario;  
        $this->quantidade_total = $quantidade_total;  
        $this->quantidade_recebida = $quantidade_recebida;  
        $this->data_atualizacao = $dada_atualizacao;
        $this->banco = new Banco('banco', 'root', '');
    }
    function __set($chave, $valor){ $this->$chave = $valor; }
    function __get($chave){ return $this->$chave; }

    
    function getEstoque($id=null){
        if($id == null){
            return array(
               ":id" => $this->id, 
               ":id_livro" => $this->id_livro,  
               ":id_funcionario" => $this->id_funcionario,  
               ":quantidade_total" => $this->quantidade_total,  
               ":quantidade_recebida" => $this->quantidade_recebida,  
               ":data_atualizacao" => $this->data_atualizacao
            );
        }
        else{
            $sql = "SELECT * FROM estoque e WHERE e.id = :id";
            $array_de_dados = array(":id" => $id);
            $resposta = $this->banco->executar($sql, $array_de_dados);
            return $resposta;
        }
    }
    function getEstoques(){
        $sql = "SELECT * FROM estoque";
        $resposta = $this->banco->executar_query($sql);
        return $resposta;
    }


    function setEstoque(){
        $sql = "INSERT INTO estoque(id, id_livro,id_funcionario,quantidade_total,quantidade_recebida,data_atualizacao ) VALUES(:id, :id_livro, :id_funcionario, :quantidade_total, :quantidade_recebida, :data_atualizacao);";
        $resposta = $this->banco->executar($sql, $this->getEstoque());
        return $resposta;
    }

    function updateEstoque(){
        $sql = "UPDATE estoque e SET  e.id_livro :id_livro, e.id_funcionario = :id_funcionario, e.quantidade_total :quantidade_total , e.quantidade_recebida = :quantidade_recebida, e.data_atualizacao = :data_atualizacao WHERE e.id = :id;";
        $resposta = $this->banco->executar($sql, $this->getEstoque());
        return $resposta;
    }

    function deleteEstoque($id=0){
        $sql = "DELETE FROM estoque WHERE id = :id;";
        $resposta = $this->banco->executar($sql, array(":id" => $id));
        return $resposta;
    }
}

?>