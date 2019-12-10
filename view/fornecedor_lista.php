<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Fornecedor - Cadastro de Fornecedor');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>

<div class="container">
	<div class="row">
       <h2 class="h4 mb-4">Fornecedores</h2>
    </div>
	<?php
		require_once '../controller/fornecedor-listar.php';
		$lista_de_fornecedor = listarTodos();
		
		echo '<table class="table table-striped">';
		echo '<thead>';
			echo '<tr>';
				echo 'echo <th scope="col">Id</th>';
				echo '<th scope="col">Nomes</th>';
				echo '<th scope="col"></th>';
				echo '<th scope="col"></th>';
			echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while($fornecedor = $lista_de_fornecedor->fetch(PDO::FETCH_ASSOC)){
				echo '<tr>';
					echo '<th scope="row">'.$fornecedor['id'].'</th>';
					echo '<td>'.$fornecedor['nome'].'</td>';
					echo '<td><a href="../view/funcionario_cadastro.php?id='.$fornecedor['id'].'">'.'Alterar'.'</a></td>';
					echo '<td><a href=../controller/funcionario-apagar.php?id='.$fornecedor['id'].'>'.'Excluir'.'</a></td>';
				echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
		?>
</div>

<?php require_once '../includes/Footer.inc.php'; ?>