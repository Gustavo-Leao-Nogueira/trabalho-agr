<?php
    function listarTodos(){
        require_once '../classes/Fornecedor.class.php';
        $fornecedor = new Fornecedor();
        $resposta = $fornecedor->getFornecedor();
        return $resposta;
    }
    function listarUm($id){
        require_once '../classes/Fornecedor.class.php';
        $fornecedor = new Fornecedor();
        $resposta = $fornecedor->getFornecedor($id);
        return $resposta;
    }
?>

