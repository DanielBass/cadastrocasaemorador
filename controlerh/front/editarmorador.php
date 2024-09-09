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
	<title>Editar Morador</title>
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
			<a href="" class="navbar-brand d-flex aling items-center">
				<i class="bi-bootstrap-fill fs-1 me-2"></i>
					Controle RH	
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavBar"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="menuNavBar">
				<div class="navbar-nav">
					<a href="index.php" class="nav-link active">Principal</a>
					<a href="front/cadastrocasa.php" class="nav-link">Cadastrar Casa</a>
					<a href="front/listacasas.php" class="nav-link">Menu Casa</a>
				</div>
			</div>
		</div>
	</nav>

	<div class="text-center">
		<h1 class="text-center">Editar morador</h1>
	</div>
	<!-- inicio container-->
	<div class="container"> 
			<form  class="row g-3" method="POST" id="formMoradorEditar">
					<div class="col-md-12">
						<label for="nome" class="form-label"><h5>Nome do morador:</h5></label>
						<?php 
                      
              require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      if(!isset($_SESSION)){
 												session_start();
 											}
 	
                      		$idMorador = $_GET['id'];
                      		$_SESSION['idMorador'] = $_GET['id'];
                      
                          
                          $sql=$db->query("SELECT nomeMorador FROM nomes WHERE id_morador='$idMorador'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='text' class='form-control'  id='nome' name='nome' value='".$y['nomeMorador']."'>";
                          

                          }
                      ?>
                   
					</div>
					<div class="col-md-6">
						<label for="cep" class="form-label"><h5>Cpf:</h5></label>
						
						<?php 
                      
              require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      
                      		$idMorador= $_GET['id'];
                      
                      
                          
                          $sql=$db->query("SELECT cpf FROM nomes WHERE id_morador='$idMorador'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='text' class='form-control' name='cpf' id='cpf' value='".$y['cpf']."'>";
                          

                          }
                      ?>
					</div>
					<div class="col-md-6">
						<label for="rua" class="form-label"><h5>Matricula:</h5></label>
						<?php 
                      
              require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      
                      		$idMorador= $_GET['id'];
                      
                      
                          
                          $sql=$db->query("SELECT matricula FROM nomes WHERE id_morador='$idMorador'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='text' class='form-control' id='matricula' name='matricula' value='".$y['matricula']."'>";
                          

                          }
                      ?>
					</div>
						
				<div class="continue-button">
					<button class="btn btn-success" id="editarMorador">Editar</button>
					<button class="btn btn-danger" id="VoltarEMorador">Voltar</button>
				</div>
			</form>
	</div><!-- fim container-->
</body>

</html>