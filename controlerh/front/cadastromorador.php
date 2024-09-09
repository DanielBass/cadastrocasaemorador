<?php

	require_once("../back/banco1.php");
	require_once("../back/banco2.php");	
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Cadastrar morador">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cadastro Morador</title>

	
	<!--jQuery-->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<!-- meus script  -->
	<script language="JavaScript" type="text/javascript" src="../javascript/ajax/funcaoajax.js"></script>
	
	
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
					<a href="cadastrocasa.php" class="nav-link">Cadastrar Casa</a>
					<a href="cadastromorador.php" class="nav-link  active">Cadastrar Morador</a>
					<a href="listacasas.php" class="nav-link">Menu Casa</a>
					<a href="listamorador.php" class="nav-link">Menu Morador</a>				
			</div>
		</div>
	</nav>
	
	<div class="text-center">
		<h1 class="text-center">Cadastro morador</h1>
	</div>
		<div class="container">
			<form class="row g-3" method="POST"  id="formMorador">
				<div class="col-12">
    				<label for="nomeMorador" class="form-label"><h5>Nome:</h5></label>
    				<input type="text" class="form-control" name="nomeMorador"id="nomeMorador" placeholder="digite o nome do morador">
  				</div>
  				<div class="col-md-6">
    				<label for="cpfMorador" class="form-label"><h5>CPF:</h5></label>
    				<input type="text" class="form-control" name="cpfMorador" id="cpfMorador" placeholder="informe o cpf">
  				</div>
  				<div class="col-md-6">
    				<label for="cpfMorador" class="form-label"><h5>Matricula:</h5></label>
    				<input type="text" class="form-control" name="matriculaMorador" id="cpfMorador" placeholder="informe matricula">
  				</div>

  				<div class="col-12">
    				<button  class="btn btn-success" name="cadastrarMorador" id="cadastrarMorador">Cadastrar</button>
    				<button id="VoltarMorador"class="btn btn-danger"name="VoltarMorador" >Voltar</button>
  				</div>
			</form>
		</div>

	<!-- Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>