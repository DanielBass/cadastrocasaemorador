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
		<title>Menu Casa</title>

		<!--jQuery-->
		<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
		
		
		</script>

	    

	    <!-- Bootstrap -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	    <!--font awesome-->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	

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
					<a href="cadastromorador.php" class="nav-link">Cadastrar Morador</a>
					<a href="listacasas.php" class="nav-link active">Menu Casa</a>
					<a href="listamorador.php" class="nav-link">Menu Morador</a>				
			</div>
		</div>
	</nav>
		<div class="container">
			<h2>Lista Casa</h2>
			<form method="get" id="form-buscar">
				<div class="input-group mt-3 w-50">
					<span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
					<div class="form-floating">
						<input type="text" name="busca" class="form-control" id="floatingInput" placeholder="Buscar..." value="<?= $busca ?? '' ?>">
                    	<label for="floatingInput">Buscar...</label>
					</div>
				</div>
			</form>

			<div class="table-responsive mt-3">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Casa</th>
							<th>Cep</th>
							<th>Cidade</th>
							<th>UF</th>
							<th>Bairro</th>
							<th>Rua</th>
							<th>Número</th>
							<th>Quantidade de quartos</th>
							<th colspan="2">Ações</th>
						</tr>
					</thead>
					<tbody id="bodyTableBuscaCasa">
						
					</tbody>
				</table>
			</div>
		</div>



		<!-- Bootstrap -->
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	    <script src="../javascript/listacasas.js"></script>
	</body>

</html>