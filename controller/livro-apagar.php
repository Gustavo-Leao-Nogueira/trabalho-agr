<?php
    if($_GET){
        if(isset($_GET['id'])){
            require_once '../classes/Livro.class.php';
            $livro = new Livro();
            $livro->deleteLivro($_GET['id']);
        }
    }
    header('Location: ../view/index.php');
?>

