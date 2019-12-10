<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Funcionario - Cadastro de Funcionario');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    
   

<div class="container">
	<!--
	<form class="text-center border border-light p-5" action="../controller/funcionario-cadastrar.php" method="post">
		
		<div class="row">
			<div class="col-8 ">
			 <div class="row">
				  <h2 class="h4 mb-4">Cadastro Funcionário</h2>
			 </div>
			<div class="form-group">
		<input type="text" name="nome" id="nome" class="form-control mb-4" placeholder="Nome ">
			</div>
			
		   
			<div class="form-group left">
				<button type="submit" class="btn btn-primary">Enviar</button>
				<button type="reset" class="btn btn-secondary">Apagar</button>	    
			</div>

			</div>

			 <div class="col-3 ">
				<img src="../imgs/imagem.png"  class="img-fluid imagem-media"  />
			</div>
		</div>
	</form>
-->
	<?php	
			if($_GET){
				if(isset($_GET['id'])){		
					require_once '../controller/funcionario-listar.php';
					$lista_de_funcionario = listarUm($_GET['id']);
					
					
					
					echo '<form class="text-center border border-light p-5" action="../controller/funcionario-alterar.php" method="post">';
						echo '<div class="row">';
							echo '<div class="col-8 ">';
							echo '<div class="row">';
								echo '<h2 class="h4 mb-4">Cadastro Funcionário</h2>';
							echo '</div>';
							echo '<div class="form-group">';
							while($funcionario = $lista_de_funcionario->fetch(PDO::FETCH_ASSOC)){
								echo '<input type="text" name="nome" id="nome" class="form-control mb-4" placeholder="Nome " value="'.$funcionario['nome'].'">';				
								echo '<input type="hidden" name="id_cliente" id="id_cliente" value="'.$funcionario['id'].'">';
							}
							echo '</div>';				
										
							echo '<div class="form-group left">';
								echo '<button type="submit" class="btn btn-primary">Enviar</button>';
								echo '<button type="reset" class="btn btn-secondary">Apagar</button>';	    
							echo '</div>';
							echo '</div>';				
							echo '<div class="col-3 ">';
								echo '<img src="../imgs/imagem.png"  class="img-fluid imagem-media"  />';
							echo '</div>';
						echo '</div>';
					echo '</form>';
				}
			}
			else{
						
					
					echo '<form class="text-center border border-light p-5" action="../controller/funcionario-cadastrar.php" method="post">';
						echo '<div class="row">';
							echo '<div class="col-8 ">';
							echo '<div class="row">';
								echo '<h2 class="h4 mb-4">Cadastro Funcionário</h2>';
							echo '</div>';
							echo '<div class="form-group">';
								echo '<input type="text" name="nome" id="nome" class="form-control mb-4" placeholder="Nome " >';				
							echo '</div>';				
										
							echo '<div class="form-group left">';
								echo '<button type="submit" class="btn btn-primary">Enviar</button>';
								echo '<button type="reset" class="btn btn-secondary">Apagar</button>';	    
							echo '</div>';
							echo '</div>';				
							echo '<div class="col-3 ">';
								echo '<img src="../imgs/imagem.png"  class="img-fluid imagem-media"  />';
							echo '</div>';
						echo '</div>';
					echo '</form>';
			}
	?>

</div>

    <?php require_once '../includes/Footer.inc.php'; ?>