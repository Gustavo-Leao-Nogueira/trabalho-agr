
<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Contato - cadastrar');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>

<div class="container">
	<!-- <h2>Contato</h2> -->
	<div class="row">
		<div class="col col-md-5 col-sm-12">
			<h3>Deixe seu recado:</h3>
			<hr>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
			</p>
			<address>
				<strong>Telefone</strong><br>
				(51) 3022-1044
			</address>
			<address>
				<strong>Endereço</strong><br>
				Rua Coronel Genuíno ,130 - Cidade Baixa - Porto Alegre RS
			</address>
			<address>
				<strong>Email:</strong><br>
				<text class="text text-info">senac@senacrs.com.br</text>
			</address>

		</div>
		<div class="col col-md-7 col-sm-12">
			<form class="border border-light p-5" action="#!">		
				<div class="form-group">
					<!-- Nome -->
					<label>Nome:</label>
					<input type="name" id="defaultLoginFormname" class="form-control mb-4" placeholder="Digite seu Nome">
				</div>
			   	<div class="form-group">
					<!-- E-mail -->
					<label>E-mail:</label>
					<input type="email" id="defaultLoginFormemail" class="form-control mb-4" placeholder="Digite seu E-mail">
				</div>
				<div class="form-group">
					<!-- Endereco -->
					<label>Mensagem:</label>
				    <textarea id="defaultLoginFormrecado" class="form-control mb-4" placeholder="Digite seu Recado"></textarea> 
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Enviar</button>
				</div>	    
			</form>
		</div>
	</div>
</div>

    <?php require_once '../includes/Footer.inc.php'; ?>