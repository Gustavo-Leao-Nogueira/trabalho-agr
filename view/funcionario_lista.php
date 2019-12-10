<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Fornecedor - Cadastro de Fornecedor');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>


<div class="container">
	<div class="row">
       <h2 class="h4 mb-4">Funcionários</h2>
    </div>
	<?php
		require_once '../controller/funcionario-listar.php';
		$lista_de_funcionario = listarTodos();
		
		echo '<table class="table table-striped">';
		echo '<thead>';
			echo '<tr>';
				echo '<th scope="col">Id</th>';
				echo '<th scope="col">Nomes</th>';
				echo '<th scope="col"></th>';
				echo '<th scope="col"></th>';
			echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while($funcionario = $lista_de_funcionario->fetch(PDO::FETCH_ASSOC)){
				echo '<tr>';
					echo '<th scope="row">'.$funcionario['id'].'</th>';
					echo '<td>'.$funcionario['nome'].'</td>';
					echo '<td><a href="../view/funcionario_cadastro.php?id='.$funcionario['id'].'">'.'Alterar'.'</a></td>';
					echo '<td><a href=../controller/funcionario-apagar.php?id='.$funcionario['id'].'>'.'Excluir'.'</a></td>';
				echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
		?>
</div>
<?php require_once '../includes/Footer.inc.php'; ?>