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
        $resposta = $fornecedor->getFornecedores();
        return $resposta;
    }
    function listarUmFornecedor($id){
        require_once '../classes/Fornecedor.class.php';
        $fornecedor = new Fornecedor();
        $resposta = $fornecedor->getFornecedor($id);
        return $resposta;
    }
    function listarTodosFuncionario(){
        require_once '../classes/Funcionario.class.php';
        $funcionario = new Funcionario();
        $resposta = $funcionario->getFuncionarios();
        return $resposta;
    }
    function listarUmFuncionario($id){
        require_once '../classes/Funcionario.class.php';
        $funcionario = new Funcionario();
        $resposta = $funcionario->getFuncionario($id);
        return $resposta;
    }
?>

