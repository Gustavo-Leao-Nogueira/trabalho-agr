<?php
    if($_POST){
        if(isset($_POST['id']) and isset($_POST['id_livro']) and isset($_POST['id_funcionario']) and isset($_POST['quantidade_total']) and isset($_POST['quantidade_recebida'])and isset($_POST['data_atualizacao'])){
            require_once '../classes/Estoque.class.php';
            $estoque = new Estoque($_POST['id'], $_POST['id_livro'], $_POST['id_funcionario'], $_POST['quantidade_total'], $_POST['quantidade_recebida'], $_POST['data_atualizacao']);
            $estoque->updateEstoque();
        }
    }
    header('Location: ../view/index.php');
?>