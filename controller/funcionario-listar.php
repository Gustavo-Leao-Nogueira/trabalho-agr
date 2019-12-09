<?php
    function listarTodos(){
        require_once '../classes/Funcionario.class.php';
        $funcionario = new Funcionario();
        $resposta = $funcionario->getFuncionario();
        return $resposta;
    }
    function listarUm($id){
        require_once '../classes/Funcionario.class.php';
        $funcionario = new Funcionario();
        $resposta = $funcionario->getFuncionario($id);
        return $resposta;
    }
?>

