<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Cliente - Alterar Cliente');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    
<div class="container"> 
    <div class="row">
    	<h2 class="h4 mb-4">Fornecedores</h2>
    </div>
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
				<strong>Editora</strong><br>Alta Books
			</p>	
			<p>
				<strong>Id Funcionário</strong><br>2
			</p>
			<p>
				<strong>Edição</strong><br>2
			</p>
			<p>
				<strong>Descrição</strong><br>
		    <p>
		    	Python utiliza um formato visualmente rico, projetado para o modo como seu cérebro funciona e não uma abordagem com muito texto, que lhe dá sono. "Onde outros livros começam com a teoria e passam para os exemplos, o Use a Cabeça! Python salta diretamente para o código e explica a teoria à medida em que você lê.
		    </p>
		</div>
	</div>
	<div class="row">
		<div class="form-group left">
			<a href="../view/livro_cadastro.php" class="btn btn-primary">Editar</a>
			<a href="#" class="btn btn-secondary">Apagar</a>	    
		</div>
	</div>
</div>

<?php require_once '../includes/Footer.inc.php'; ?>