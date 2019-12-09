<?php
    if($_GET){
        if(isset($_GET['id'])){
            require_once '../classes/Estoque.class.php';
            $estoque = new Estoque();
            $estoque->deleteEstoque($_GET['id']);
        }
    }
    header('Location: ../view/index.php');
?>

