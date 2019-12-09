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
?>

