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
	<title>Editor Casa</title>
	<!--jQuery-->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	
	<!-- meus script  -->
	
	<script language="JavaScript" type="text/javascript" src="../javascript/ajax/funcaoajax.js"></script>
	<!--buscador cep-->
	<script language="JavaScript" type="text/javascript" src="../back/api/buscacep.js"></script>

	<!-- Sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
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
	<!-- inicio container-->
	<div class="container">
		<h1 class="text-center">Editar Casa</h1>
			<form  class="row g-3" method="POST" id="formCasaEditar">
					<div class="col-md-4">
						<label for="nome" class="form-label"><h5>Nome da casa:</h5></label>
						<?php 
                      
              require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      if(!isset($_SESSION)){
 												session_start();
 											}
 	
                      		$idCasa = $_GET['id'];
                      		$_SESSION['idCasa'] = $_GET['id'];
                      
                          
                          $sql=$db->query("SELECT nomeCasa FROM casas WHERE id_casa='$idCasa'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='text'  id='nome' name='nome' class='form-control' value='".$y['nomeCasa']."'>";
                          

                          }
                      ?>
                   
					</div>
					<div class="col-md-4">
						<label for="cep" class="form-label"><h5>cep:</h5></label>
						
						<?php 
                      
              require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      
                      		$idCasa= $_GET['id'];
                      
                      
                          
                          $sql=$db->query("SELECT cep FROM casas WHERE id_casa='$idCasa'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='text' name='cep' id='cep' class='form-control' onblur='pesquisacep(this.value);' value='".$y['cep']."'>";
                          

                          }
                      ?>
					</div>
					<div class="col-md-4">
						<label for="rua" class="form-label"><h5>Nome da rua:</h5></label>
						<?php 
                      
                      		require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      
                      		$idCasa= $_GET['id'];
                      
                      
                          
                          $sql=$db->query("SELECT rua FROM casas WHERE id_casa='$idCasa'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='text'  id='rua' name='rua' class='form-control' value='".$y['rua']."'>";
                          

                          }
                      ?>
					</div>
					<div class="col-md-4">
						<label for="numero" class="form-label"><h5>Número:</h5></label>
						
						<?php 
                      
                      		require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      
                      		$idCasa= $_GET['id'];
                      
                      
                          
                          $sql=$db->query("SELECT numero FROM casas WHERE id_casa='$idCasa'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='number' name='numero' id='numero' class='form-control' value='".$y['numero']."'>";
                          

                          }
                      ?>
					</div>
					<div class="col-md-4">
						<label for="bairro" class="form-label"><h5>Bairro:</h5></label>
						
						<?php 
                      
                      		require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      
                      		$idCasa= $_GET['id'];
                      
                      
                          
                          $sql=$db->query("SELECT bairro FROM casas WHERE id_casa='$idCasa'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='text'  id='bairro' name='bairro' class='form-control' value='".$y['bairro']."'>";
                          

                          }
                      ?>
					</div>
					<div class="col-md-4">
						<label for="cidade" class="form-label"><h5>Cidade:</h5></label>
						
						<?php 
                      
             require_once("../back/banco1.php");
							require_once("../back/banco2.php");
							if(!isset($_SESSION)){
 									session_start();
 							}  
                      
                      		$idCasa= $_GET['id'];
                      		$_SESSION['idCasa'] =$_GET['id'];
                      
                          
                          $sql=$db->query("SELECT cidade FROM casas WHERE id_casa='$idCasa'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='text'  id='cidade' name='cidade' class='form-control' value='".$y['cidade']."'>";
                          

                          }
                      ?>
					</div>

					<div class="col-md-6">
						<label for="uf" class="form-label"><h5>Estado:</h5></label>
						<?php 
                      
                      		require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      
                      		$idCasa= $_GET['id'];
                      
                      
                          
                          $sql=$db->query("SELECT estado FROM casas WHERE id_casa='$idCasa'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='text'  id='uf' name='uf'  class='form-control' value='".$y['estado']."'>";
                          

                          }
                      ?>
					</div>
					<div class="col-md-6">
						<label for="qQuarto" class="form-label"><h5>Quantidade de Quartos:</h5></label>
						<?php 
                      
                      		require_once("../back/banco1.php");
							require_once("../back/banco2.php");
                      
                      		$idCasa= $_GET['id'];
                      
                      
                          
                          $sql=$db->query("SELECT quantidade_quarto FROM casas WHERE id_casa='$idCasa'");
                          if($sql->rowCount()>0){
                            $y=$sql->fetch();
                              echo "<input type='number'  id='qQuarto' name='qQuarto' class='form-control' value='".$y['quantidade_quarto']."'>";
                          

                          }
                      ?>
					</div>
				
				<div class="continue-button">
					<button  id="editarCasa" class="btn btn-success">Editar</button>
					<button  id="VoltarECasa" class="btn btn-danger">Voltar</button>
				</div>
			</form>
		
	</div><!-- fim container-->
</body>

</html>