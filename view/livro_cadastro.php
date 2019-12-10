<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Fornecedor - Cadastro de Fornecedor');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>

<div class="container">
	<form class="text-center border border-light p-5" action="../controller/livro-cadastrar.php" method="post">

	

	 	<div class="row">
	 		 <h2 class="h4 mb-4">Cadastro Livro</h2>
	 	</div>
 		<?php

		require_once '../controller/livro-listar.php';
		$lista_de_fornecedor = listarTodosFornecedor();
        echo '<select name="id_fornecedor" id="id_fornecedor">';
        while($fornecedor = $lista_de_fornecedor->fetch(PDO::FETCH_ASSOC)){
            echo '<option value="'.$fornecedor['id'].'">'.$fornecedor['nome'].'</option>';
        }
        echo '</select>';
		?>


	 	<div class="form-group">
 			<input type="text" id="titulo" name="titulo" class="form-control mb-4" placeholder="Título do livro">
 		</div>
	 	
		<div class="form-group">
			<input type="number" name="ano_publicacao" id="ano_publicacao" class="form-control mb-4" placeholder="Ano de publicação">
	    </div>
		<div class="form-group">
			<input type="number" id="edicao" name="edicao" class="form-control mb-4" placeholder="Edição">
		</div>
		 <div class="form-group">		    
		    <input type="text" id="editora" name="editora" class="form-control mb-4" placeholder="Editora">
		</div> 
		<div class="form-group left">
			<button type="submit" class="btn btn-primary">Enviar</button>
			<button type="reset" class="btn btn-secondary">Apagar</button>	    
		</div>
	</form>
</div>

<?php require_once '../includes/Footer.inc.php'; ?>