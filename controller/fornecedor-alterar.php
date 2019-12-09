<?php
    if($_POST){
        if(isset($_POST['id']) and isset($_POST['nome']) and isset($_POST['endereco']) and isset($_POST['cidade']) and isset($_POST['telefone'])){
            require_once '../classes/Fornecedor.class.php';
            $fornecedor = new Fornecedor($_POST['id'], $_POST['nome'], $_POST['endereco'], $_POST['cidade'], $_POST['telefone']);
            $fornecedor->updateFornecedor();
        }
    }
    header('Location: ../view/index.php');
?>