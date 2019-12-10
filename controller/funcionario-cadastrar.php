<?php
    if($_POST){
        if(isset($_POST['nome'])){
            require_once '../classes/Funcionario.class.php';
            $funcionario = new Funcionario(null, $_POST['nome']);
            $funcionario->setFuncionario();
        }
    }
    header('Location: ../view/index.php');
?>

