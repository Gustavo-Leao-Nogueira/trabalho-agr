<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Fornecedor - Cadastro de Fornecedor');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
<div class="ml-5 mr-5 mt-5 mb-5">
<?php
  require_once '../controller/livro-listar.php';
  $lista_de_livro = listarTodos();

  echo '<div class="row">';
  while($livro = $lista_de_livro->fetch(PDO::FETCH_ASSOC)){
      echo '<div class="col-sm-3">';
        echo '<div class="card" style="width: 18rem;">';
        //echo '<img class="card-img-top" src="..." alt="Card image cap">';
        echo '<div class="card-body">';
          echo '<h5 class="card-title">'.$livro['titulo'].'</h5>';
          echo '<p class="card-text">'.$livro['editora'].'</p>';
          echo '<a href="../view/livro_interna.php?id='.$livro['id'].'" class="btn btn-primary">Listar</a>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  }
  echo '</div>';

  ?>
  </div>
<?php require_once '../includes/Footer.inc.php'; ?>