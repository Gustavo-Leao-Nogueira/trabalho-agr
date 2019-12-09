<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Funcionario - Cadastro de Funcionario');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    
   

<div class="container">

<form class="text-center border border-light p-5" action="#!">
	
<div class="row">
   

	<div class="col-8 ">
	 <div class="row">
		  <h2 class="h4 mb-4">Cadastro Funcionário</h2>
	 </div>
	<div class="form-group">
	<!-- Login -->
		<input type="text" name="login" id="login" class="form-control mb-4" placeholder="Digite seu Login ">
	</div>
	<div class="form-group">
	<!-- Nome -->
		<input type="text" name="nome" id="nome" class="form-control mb-4" placeholder="Digite seu Nome">
	</div>
	<div class="form-group">
		 <!-- Cpf -->
		<input type="text" name="cpf" id="cpf" class="form-control mb-4" placeholder="Digite seu CPF">
	</div>
	   <div class="form-group">
		 <!-- E-mail -->
		<input type="email" name="email" id="email" class="form-control mb-4" placeholder="Digite seu E-mail">
	</div>
	<div class="form-group">
	 <!-- Endereco -->
		<input type="text" name="endereco" id="endereco" class="form-control mb-4" placeholder="Digite seu Endereço"> 
	</div>
	<div class="form-group">		    
		<!-- Cidade -->
		<input type="text" name="cidade" id="cidade" class="form-control mb-4" placeholder="Digite sua Cidade">
	</div>
	 <div class="form-group">		    
	 <!-- Telefone -->		
		<input type="tel" name="telefone" id="telefone" class="form-control mb-4" placeholder="Digite seu Telefone">
	</div>
	<!--<div class="form-group">		    
	 Data de contratação 		
	 <input class="form-control mb-4 datepicker" data-date-format="mm/dd/yyyy">
		 <input type="date" name="" id="" class="form-control mb-4" placeholder="Data de contratação"> 
	</div>-->
   
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

</div>

    <?php require_once '../includes/Footer.inc.php'; ?>