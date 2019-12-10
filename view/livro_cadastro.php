<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Fornecedor - Cadastro de Fornecedor');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
<?php

if($_GET){
	if(isset($_GET['id'])){		
		require_once '../controller/livro-listar.php';
		$lista_de_livro = listarUm($_GET['id']);
		
		while($livro = $lista_de_livro->fetch(PDO::FETCH_ASSOC)){
				
	echo '<div class="container">';
		echo '<form class="text-center border border-light p-5" action="../controller/livro-alterar.php" method="post">';
			echo '<div class="row">';
				echo '<h2 class="h4 mb-4">Cadastro Livro</h2>';
			echo '</div>';
			
			require_once '../controller/livro-listar.php';
			$lista_de_fornecedor = listarTodosFornecedor();
			echo '<select name="id_fornecedor" id="id_fornecedor">';
			while($fornecedor = $lista_de_fornecedor->fetch(PDO::FETCH_ASSOC)){
				echo '<option value="'.$fornecedor['id'].'">'.$fornecedor['nome'].'</option>';
			}
			echo '</select>';
			
			echo '<div class="form-group">';
				echo '<input type="text" id="titulo" name="titulo" class="form-control mb-4" placeholder="Título do livro" value="'.$livro['titulo'].'">';
			echo '</div>';
			
			echo '<div class="form-group">';
				echo '<input type="number" name="ano_publicacao" id="ano_publicacao" class="form-control mb-4" placeholder="Ano de publicação" value="'.$livro['ano_publicacao'].'">';
			echo '</div>';
			echo '<div class="form-group">';
				echo '<input type="number" id="edicao" name="edicao" class="form-control mb-4" placeholder="Edição" value="'.$livro['edicao'].'">';
			echo '</div>';
			echo '<div class="form-group">';		    
				echo '<input type="text" id="editora" name="editora" class="form-control mb-4" placeholder="Editora" value="'.$livro['editora'].'">';
			echo '</div>'; 
			echo '<input type="hidden" name="id_livro" id="id_livro" value="'.$livro["id"].'">';
			echo '<div class="form-group left">';
				echo '<button type="submit" class="btn btn-primary">Enviar</button>';
				echo '<button type="reset" class="btn btn-secondary">Apagar</button>';	    
			echo '</div>';
		echo '</form>';
	echo '</div>';
		}
	}
}

else {
	echo '<div class="container">';
		echo '<form class="text-center border border-light p-5" action="../controller/livro-cadastrar.php" method="post">';
			echo '<div class="row">';
				echo '<h2 class="h4 mb-4">Cadastro Livro</h2>';
			echo '</div>';
			
			require_once '../controller/livro-listar.php';
			$lista_de_fornecedor = listarTodosFornecedor();
			echo '<select name="id_fornecedor" id="id_fornecedor">';
			while($fornecedor = $lista_de_fornecedor->fetch(PDO::FETCH_ASSOC)){
				echo '<option value="'.$fornecedor['id'].'">'.$fornecedor['nome'].'</option>';
			}
			echo '</select>';
			
			echo '<div class="form-group">';
				echo '<input type="text" id="titulo" name="titulo" class="form-control mb-4" placeholder="Título do livro" >';
			echo '</div>';
			
			echo '<div class="form-group">';
				echo '<input type="number" name="ano_publicacao" id="ano_publicacao" class="form-control mb-4" placeholder="Ano de publicação" >';
			echo '</div>';
			echo '<div class="form-group">';
				echo '<input type="number" id="edicao" name="edicao" class="form-control mb-4" placeholder="Edição" >';
			echo '</div>';
			echo '<div class="form-group">';		    
				echo '<input type="text" id="editora" name="editora" class="form-control mb-4" placeholder="Editora" >';
			echo '</div>';
		 
			echo '<div class="form-group left">';
				echo '<button type="submit" class="btn btn-primary">Enviar</button>';
				echo '<button type="reset" class="btn btn-secondary">Apagar</button>';	    
			echo '</div>';
		echo '</form>';
	echo '</div>';
	 } ?>
<?php require_once '../includes/Footer.inc.php'; ?>