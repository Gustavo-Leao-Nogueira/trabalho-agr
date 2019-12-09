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
	<table class="table table-striped">
	  <thead>
	    <tr>
	     	<th scope="col">Id</th>
	     	<th scope="col">Nome</th>
	     	<th scope="col">Endereço</th>
	     	<th scope="col">Cidade</th>
	     	<th scope="col">Telefone</th>
	     	<th scope="col"></th>
	     	<th scope="col"></th>

	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	     	<th scope="row">(id)</th>
	    	<td>(nome)</td>
	    	<td>(endereço)</td>
	    	<td>(cidade)</td>
	    	<td>(telefone)</td>
	    	<td><a href="../view/fornecedor_cadastro.php?id=0">Alterar</a></td>
	    	<td><a href="#">Excluir</a></td>
	    </tr>
	  </tbody>
	</table>
</div>

<?php require_once '../includes/Footer.inc.php'; ?>