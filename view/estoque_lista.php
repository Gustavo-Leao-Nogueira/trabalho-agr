<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Fornecedor - Cadastro de Fornecedor');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    
<div class="container">
	<div class="row">
		<h2 class="h4 mb-4">Quantidade em Estoque</h2>
	</div>

	<table class="table table-striped">
		<thead>
		    <tr>
		    	<th scope="col">#</th>
		    	<th scope="col">Total</th>
		    	<th scope="col">Recebido</th>
		    	<th scope="col"></th>
		    	<th scope="col"></th>
		    </tr>
	   </thead>
	   <tbody>
	    <tr>
	    	<th scope="row">1</th>
	    	<td>Mark</td>
	    	<td>Otto</td>
	    	<td><a href="../view/estoque_cadastro.php?id=0">Alterar</a></td>
	    	<td><a href="#">Excluir</a></td>
	     </tr>
	   </tbody>
</table>
</div>

<?php require_once '../includes/Footer.inc.php'; ?>