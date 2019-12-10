<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Fornecedor - Cadastro de Fornecedor');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    <?php
	if($_GET){
				if(isset($_GET['id'])){		
					require_once '../controller/fornecedor-listar.php';
					$lista_de_fornecedor = listarUm($_GET['id']);

					while($fornecedor = $lista_de_fornecedor->fetch(PDO::FETCH_ASSOC)){							
	echo '<div class="container">';
	echo '<form class="text-center border border-light p-5" action="../controller/fornecedor-alterar.php" method="post">';
			echo '<div class="row">';
				echo '<h2 class="h4 mb-4">Cadastro Fornecedor</h2>';
		echo '</div>';
			echo '<div class="form-group">';
				echo '<input type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Digite o nome do fornecedor" value="'.$fornecedor['nome'].'">';
		echo '</div>';
			
		echo '<div class="form-group">';
			echo '<input type="text" name="endereco" id="endereco" class="form-control mb-4" placeholder="Digite o endereço" value="'.$fornecedor['endereco'].'">';
		echo '</div>';
		echo '<div class="form-group">';
			echo '<input type="text" id="cidade" name="cidade" class="form-control mb-4" placeholder="Digite a cidade" value="'.$fornecedor['cidade'].'">';
			echo '</div>';
		echo '<div class="form-group">';		    
			echo '<input type="tel" id="telefone" name="telefone" class="form-control mb-4" placeholder="Digite o telefone" value="'.$fornecedor['telefone'].'">';
		echo '</div>';
		echo '<input type="hidden" name="id_fornecedor" id="id_fornecedor" value="'.$fornecedor['id'].'">';
		echo '<div class="form-group left">';
			echo '<button type="submit" class="btn btn-primary">Enviar</button>';
			echo '<button type="reset" class="btn btn-secondary">Apagar</button>';	    
		echo '</div>';
		echo '</div>';
					}
				}

			}
else {
	echo '<div class="container">';
	echo '<form class="text-center border border-light p-5" action="../controller/fornecedor-cadastrar.php" method="post">';
			echo '<div class="row">';
				echo '<h2 class="h4 mb-4">Cadastro Fornecedor</h2>';
		echo '</div>';
			echo '<div class="form-group">';
				echo '<input type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Digite o nome do fornecedor">';
		echo '</div>';
			
		echo '<div class="form-group">';
			echo '<input type="text" name="endereco" id="endereco" class="form-control mb-4" placeholder="Digite o endereço">';
		echo '</div>';
		echo '<div class="form-group">';
			echo '<input type="text" id="cidade" name="cidade" class="form-control mb-4" placeholder="Digite a cidade">';
			echo '</div>';
		echo '<div class="form-group">';		    
			echo '<input type="tel" id="telefone" name="telefone" class="form-control mb-4" placeholder="Digite o telefone">';
		echo '</div>';
		echo '<div class="form-group left">';
			echo '<button type="submit" class="btn btn-primary">Enviar</button>';
			echo '<button type="reset" class="btn btn-secondary">Apagar</button>';	    
		echo '</div>';
		echo '</div>';
}
?>
    <?php require_once '../includes/Footer.inc.php'; ?>