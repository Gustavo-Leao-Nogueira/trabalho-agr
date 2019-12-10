<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Fornecedor - Cadastro de Fornecedor');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    

<div class="container">
	<form class="text-center border border-light p-5" action="../controller/fornecedor-cadastrar.php" method="post">
	 	<div class="row">
	 		 <h2 class="h4 mb-4">Cadastro Fornecedor</h2>
	 	</div>
 		<div class="form-group">
 			<input type="text" id="nome" name="nome" class="form-control mb-4" placeholder="Digite o nome do fornecedor">
 		</div>
	 	
		<div class="form-group">
		<!-- Registro -->
			<input type="text" name="endereco" id="endereco" class="form-control mb-4" placeholder="Digite o endereço">
	    </div>
		<div class="form-group">
		<!-- Nome -->
			<input type="text" id="cidade" name="cidade" class="form-control mb-4" placeholder="Digite a cidade">
		</div>
		 <div class="form-group">		    
		 <!-- Telefone -->		
		    <input type="tel" id="telefone" name="telefone" class="form-control mb-4" placeholder="Digite o telefone">
		</div> 
		<div class="form-group left">
			<button type="submit" class="btn btn-primary">Enviar</button>
			<button type="reset" class="btn btn-secondary">Apagar</button>	    
		</div>
	</form>
</div>

    <?php require_once '../includes/Footer.inc.php'; ?>