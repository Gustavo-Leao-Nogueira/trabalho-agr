<?php
    function listarTodos(){
        require_once '../classes/Livro.class.php';
        $livro = new Livro();
        $resposta = $livro->getLivros();
        return $resposta;
    }
    function listarUm($id){
        require_once '../classes/Livro.class.php';
        $livro = new Livro();
        $resposta = $livro->getLivro($id);
        return $resposta;
    }
    function listarTodosFornecedor(){
        require_once '../classes/Fornecedor.class.php';
        $fornecedor = new Fornecedor();
        $resposta = $fornecedor->getFornecedor();
        return $resposta;
    }
    function listarUmFornecedor($id){
        require_once '../classes/Fornecedor.class.php';
        $fornecedor = new Fornecedor();
        $resposta = $fornecedor->getFornecedor($id);
        return $resposta;
    }
?>

