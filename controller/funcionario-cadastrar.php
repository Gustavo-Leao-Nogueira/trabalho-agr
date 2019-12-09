<?php
    if($_POST){
        if(isset($_POST['nome'])){
            require_once '../classes/Livro.class.php';
            $livro = new Livro(null, $_POST['nome']);
            $livro->setLivro();
        }
    }
    header('Location: ../view/index.php');
?>

