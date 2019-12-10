<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Cliente - Alterar Cliente');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    
	<?php
if($_GET){
	require_once '../controller/livro-listar.php';
	$lista_de_livro = listarUm($_GET['id']);

	while($livro = $lista_de_livro->fetch(PDO::FETCH_ASSOC)){
		echo '<div class="container">'; 
			echo '<div class="row">';
				echo '<div class="col col-md-4">';
					echo '<h3>'.$livro['titulo'].'</h3>';
					echo '<img class="livro-capa" src="../imgs/livro-python.jpg">';
				echo '</div>';
				echo '<div class="col paddingTop">';
					echo '<p>';
						echo '<strong>Ano</strong><br> '.$livro['ano_publicacao'];
					echo '</p>';
					echo '<p>';
						echo '<strong>Editora</strong><br>'.$livro['editora'];
					echo '</p>';	
					echo '<p>';
						echo '<strong>Id Funcionário</strong><br>'.$livro['id_fornecedor'];
					echo '</p>';
					echo '<p>';
						echo '<strong>Edição</strong><br>'.$livro['edicao'];
					echo '</p>';
				echo '</div>';
			echo '</div>';
			echo '<div class="row">';
				echo '<div class="form-group left">';
					echo '<a href="../view/livro_cadastro.php?id='.$livro['id'].'" class="btn btn-primary">Editar</a>';
					echo '<a href="../controller/livro-apagar.php?id='.$livro['id'].'" class="btn btn-secondary">Apagar</a>';	    
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
}
  ?>
<?php require_once '../includes/Footer.inc.php'; ?>