<?php
    if($_POST){
        if(isset($_POST['id']) and isset($_POST['nome'])){
            require_once '../classes/Funcionario.class.php';
            $funcionario = new Funcionario($_POST['id'], $_POST['nome']);
            $funcionario->updateFuncionario();
        }
    }
    header('Location: ../view/index.php');
?>