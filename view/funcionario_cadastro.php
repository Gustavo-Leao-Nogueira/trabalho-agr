<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Funcionario - Cadastro de Funcionario');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    
   

<div class="container">

	<form class="text-center border border-light p-5" action="../controller/funcionario-cadastrar.php" method="post">
		
		<div class="row">
			<div class="col-8 ">
			 <div class="row">
				  <h2 class="h4 mb-4">Cadastro Funcionário</h2>
			 </div>
			<div class="form-group">
			<!-- Login -->
				<input type="text" name="nome" id="nome" class="form-control mb-4" placeholder="Nome ">
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