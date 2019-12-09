<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Fornecedor - Cadastro de Fornecedor');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    

<div class="container">
	<form class="text-center border border-light p-5" action="#!">
	 	<div class="row">
	 		 <h2 class="h4 mb-4">Cadastro Fornecedor</h2>
	 	</div>
 		<div class="form-group">
 			<input type="text" id="nomeFornecedor" name="nomeFornecedor" class="form-control mb-4" placeholder="Digite o nome do fornecedor">
 		</div>
	 	
		<div class="form-group">
		<!-- Registro -->
			<input type="text" name="enderecoFornecedor" id="enderecoFornecedor" class="form-control mb-4" placeholder="Digite o endereço">
	    </div>
		<div class="form-group">
		<!-- Nome -->
			<input type="text" id="cidadeFornecedor" name="cidadeFornecedor" class="form-control mb-4" placeholder="Digite a cidade">
		</div>
		 <div class="form-group">		    
		 <!-- Telefone -->		
		    <input type="tel" id="defaultLoginFormPhone" class="form-control mb-4" placeholder="Digite o telefone">
		</div> 
		<div class="form-group left">
			<button type="submit" class="btn btn-primary">Enviar</button>
			<button type="reset" class="btn btn-secondary">Apagar</button>	    
		</div>
	</form>
</div>

    <?php require_once '../includes/Footer.inc.php'; ?>