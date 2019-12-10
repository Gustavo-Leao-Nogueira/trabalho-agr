<?php
    if($_POST){
        if(isset($_POST['id_fornecedor']) and isset($_POST['titulo']) and isset($_POST['ano_publicacacao']) and isset($_POST['edicao']) and isset($_POST['editora'])){
            require_once '../classes/Livro.class.php';
            $livro = new Livro(null, $_POST['id_fornecedor'], $_POST['titulo'], $_POST['ano_publicacao'], $_POST['edicao'], $_POST['editora']);
            var_dump($livro->setLivro());
        }
    }
    //header('Location: ../view/index.php');
?>

