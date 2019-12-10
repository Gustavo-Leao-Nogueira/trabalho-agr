<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Estoque - Estoque');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>

<div class="container">
  <form class="text-center border border-light p-5" action="#!">
    <div class="row">
       <h2 class="h4 mb-4">Cadastro Estoque</h2>
    </div>
    <?php 

        require_once '../controller/livro-listar.php';
        $lista_de_livros = listarTodos();
        echo '<selec name="livro" id="livro">';
        while($livro = $lista_de_livros->fetch(PDO::FETCH_ASSOC)){
            echo '<option value="'.$livro['id'].'">'.$livro['titulo'].'</option>';
        }
        echo '</select>';

        
        $lista_de_funcionario = listarTodosFuncionario();
        echo '<select name="funcionario" id="funcionario">';
        while($funcionario = $lista_de_funcionario->fetch(PDO::FETCH_ASSOC)){
            echo '<option value="'.$funcionario['id'].'">'.$funcionario['nome'].'</option>';
        }
        echo '</select>';
    
    
    ?>
    <div class="form-group">
      <input type="number" name="quantidadeTotal" id="quantidadeTotal" class="form-control mb-4" placeholder="Quantidade total">
    </div>

    <div class="form-group">
      <input type="number" id="quantidadeRecebida" name="quantidadeRecebida" class="form-control mb-4" placeholder="Quantidade recebida">
    </div>

    <div class="form-group left">
      <button type="submit" class="btn btn-primary">Enviar</button>
      <button type="reset" class="btn btn-secondary">Apagar</button>      
    </div>

  </form>
</div>

<?php require_once '../includes/Footer.inc.php'; ?>