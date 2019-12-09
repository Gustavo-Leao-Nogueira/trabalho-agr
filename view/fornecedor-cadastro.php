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
		<!-- Registro -->
			<input type="registre" id="defaultLoginFormRegistre" class="form-control mb-4" placeholder="Digite seu Registro">
	    </div>
		<div class="form-group">
		<!-- Nome -->
			<input type="name" id="defaultLoginFormname" class="form-control mb-4" placeholder="Digite seu Nome">
		</div>
	   	<div class="form-group">
			 <!-- E-mail -->
			<input type="email" id="defaultLoginFormemail" class="form-control mb-4" placeholder="Digite seu E-mail">
		</div>
		<div class="form-group">
		 <!-- Endereco -->
		    <input type="endereco" id="defaultLoginFormendereco" class="form-control mb-4" placeholder="Digite seu Endereço"> 
		</div>
	    <div class="form-group">		    
	    	<!-- Cidade -->
		    <input type="city" id="defaultLoginFormcity" class="form-control mb-4" placeholder="Digite sua Cidade">
		</div>
		 <div class="form-group">		    
		 <!-- Telefone -->		
		    <input type="Phone" id="defaultLoginFormPhone" class="form-control mb-4" placeholder="Digite seu Telefone">
		</div>

		<div class="row justify-content-left">
			<button class="btn btn-primary btn-sm" type="submit">Enviar</button>
		</div>	    
	</form>
</div>

    <?php require_once '../includes/Footer.inc.php'; ?>