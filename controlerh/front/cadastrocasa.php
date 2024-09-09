<?php

	require_once("../back/banco1.php");
	require_once("../back/banco2.php");

	

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="description" content="HOME">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cadastro Casa</title>
	<!--jQuery-->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	
	<!-- meus script  -->
	
	<script language="JavaScript" type="text/javascript" src="../javascript/ajax/funcaoajax.js"></script>
	<!--buscador cep-->
	<script language="JavaScript" type="text/javascript" src="../back/api/buscacep.js"></script>

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
     
</head>
<body>
	<nav class="navbar bg-ligth navbar-expand-sm bg-dark navbar-dark">
		<div class="container-fluid">
			<a href="../index.php" class="navbar-brand d-flex aling items-center">
				<i class="bi-bootstrap-fill fs-1 me-2"></i>
					Controle RH	
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavBar"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="menuNavBar">
				<div class="navbar-nav">
					<a href="../index.php" class="nav-link">Principal</a>
					<a href="cadastrocasa.php" class="nav-link active">Cadastrar Casa</a>
					<a href="cadastromorador.php" class="nav-link">Cadastrar Morador</a>
					<a href="listacasas.php" class="nav-link">Menu Casa</a>
					<a href="listamorador.php" class="nav-link">Menu Morador</a>
				</div>
			</div>
		</div>
	</nav>
	
		
	

	<!-- inicio container-->
	<div class="container"> 
		<h1 class="text-center">Cadastrar Casa</h1>
			<form  class="row g-3" method="POST" id="formCasa">
					<div class="col-md-4">
						<label for="nome" class="form-label"><h5>nome da casa:</h5></label>
						<input type="text" name="nome" id="nome" class="form-control">
					</div>
					<div class=" col-md-4">
						<label for="cep" class="form-label"><h5>Cep:</h5></label>
						<input type="text" name="cep" id="cep" class="form-control" onblur="pesquisacep(this.value);">
					</div>
					<div class=" col-md-4">
						<label for="rua" class="form-label"><h5>Nome da rua:</h5></label>
						<input type="text" name="rua" id="rua" class="form-control">
					</div>
					<div class=" col-md-4 ">
						<label for="numero" class="form-label"><h5>Número:</h5></label>
						<input type="number" name="numero" id="numero" class="form-control">
					</div>
					<div class=" col-md-4">
						<label for="bairro" class="form-label"><h5>Bairro:</h5></label>
						<input type="text" name="bairro" id="bairro" class="form-control">
					</div>
					<div class=" col-md-4">
						<label for="cidade" class="form-label"><h5>Cidade:</h5></label>
						<input type="text" name="cidade" id="cidade" class="form-control">
					</div>

					<div class=" col-md-6">
						<label for="uf" class="form-label"><h5>Estado:</h5></label>
						<input type="text" name="uf" id="uf" class="form-control">
					</div>
					<div class=" col-md-6">
						<label for="qQuarto" class="form-label"><h5>Quantidade de Quartos:</h5></label>
						<input type="number" name="qQuarto" id="qQuarto" class="form-control">
					</div>
				
				<div class="continue-button col-12">
					<button   class="btn btn-success" id="cadastrarCasa">Cadastrar</button>
					<button   class="btn btn-danger" id="VoltarCasa">Voltar</button>
				</div>
			</form>
		
	</div><!-- fim container-->

	
</body>

</html>