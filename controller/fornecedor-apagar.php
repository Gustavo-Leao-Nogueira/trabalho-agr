<?php
    if($_GET){
        if(isset($_GET['id'])){
            require_once '../classes/Fornecedor.class.php';
            $fornecedor = new Fornecedor();
            $fornecedor->deleteFornecedor($_GET['id']);
        }
    }
    header('Location: ../view/index.php');
?>

