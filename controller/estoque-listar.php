<?php
    function listarTodos(){
        require_once '../classes/Estoque.class.php';
        $estoque = new Estoque();
        $resposta = $estoque->getEstoque();
        return $resposta;
    }
    function listarUm($id){
        require_once '../classes/Estoque.class.php';
        $estoque = new Estoque();
        $resposta = $estoque->getEstoque($id);
        return $resposta;
    }
    function listarTodosLivro(){
        require_once '../classes/Livro.class.php';
        $livro = new Livro();
        $resposta = $livro->getLivro();
        return $resposta;
    }
    function listarUmLivro($id){
        require_once '../classes/Livro.class.php';
        $livro = new Livro();
        $resposta = $livro->getLivro($id);
        return $resposta;
    }
    function listarTodosFuncionario(){
        require_once '../classes/Funcionario.class.php';
        $funcionario = new Funcionario();
        $resposta = $funcionario->getFuncionario();
        return $resposta;
    }
    function listarUmFuncionario($id){
        require_once '../classes/Funcionario.class.php';
        $funcionario = new Funcionario();
        $resposta = $funcionario->getFuncionario($id);
        return $resposta;
    }
?>

