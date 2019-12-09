<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Cliente - Alterar Cliente');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>

    
    <div class="container"> 
	<div class="row">
		<div class="col col-md-4">
			<h3>Use a cabeça! Python</h3>
			<img class="livro-capa" src="../imgs/livro-python.jpg">
		</div>
		<div class="col paddingTop">
			
				<p>
			<strong>Ano</strong><br>2001
		</p>
		<p>
			<strong>Autor</strong><br>Paul Barry
		</p>
		<p>
			<strong>Editora</strong><br>Alta Books
		</p>	
		<p>
			<strong>Id Funcionário</strong><br>38129309289302
		</p>
		<p>
			<strong>Descrição</strong><br>
	    <p>
	    	Python utiliza um formato visualmente rico, projetado para o modo como seu cérebro funciona e não uma abordagem com muito texto, que lhe dá sono. "Onde outros livros começam com a teoria e passam para os exemplos, o Use a Cabeça! Python salta diretamente para o código e explica a teoria à medida em que você lê.
	    </p>

		</div>
	</div>	

	<form action="#" method="post">
		<div class="form-group">
			<label>Status do Livro</label><br>
			<select class="form-control">
				<option >Selecione uma das opções</option>
				<option value="Disponível">Disponível</option>
				<option value="Reservado">Reservado</option>
				<option value="Extraviado">Extraviado</option>
			</select>
		</div>	
		<div class="form-group">
			<label>Quantidade Total</label><br>
			<input type="number" class="form-control" name="qtdTotal">
		</div>
		<div class="form-group">
			<label>Quantidade Recebida</label><br>
			<input type="number" class="form-control" name="qtdRecebida">
		</div>
		<div class="form-group">
			<label>Data Atualização</label><br>
			<input type="text" class="form-control datepicker" data-date-format="mm/dd/yyyy" name="qtdRecebida">
		</div>
		<div class="form-group">
			<button class="btn btn-primary"><i class="fa fa-bookmark"></i> Reservar</button>
			<button class="btn btn-info"><i class="fa fa-edit"></i> Editar</button>
			<button class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button>
		</div>
		
	</form>
</div>

<?php require_once '../includes/Footer.inc.php'; ?>