<?php
    if($_GET){
        if(isset($_GET['id'])){
            require_once '../classes/Funcionario.class.php';
            $funcionario = new Funcionario();
            $funcionario->deleteFuncionario($_GET['id']);
        }
    }
    header('Location: ../view/index.php');
?>

