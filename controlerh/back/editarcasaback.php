<?php
	if(!isset($_SESSION)){
 	session_start();
 	}  
	require_once("banco1.php");
	require_once("banco2.php");

	 $json=array();
	$idCasa= $_SESSION['idCasa'];
	
	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome= $_POST['nome'];
		$cep= $_POST['cep'];
		$rua= $_POST['rua'];
		$numero= $_POST['numero'];
		$bairro= $_POST['bairro'];
		$cidade= $_POST['cidade'];
		$estado= $_POST['uf'];
		$qQuarto = $_POST['qQuarto'];	
	}
	

	$sql=$db->query("SELECT * FROM `casas` WHERE id_casa ='$idCasa'");

	try {
	 	if($sql->rowCount()>0){
	 		$db->query("UPDATE casas SET nomeCasa = '$nome', cep = '$cep', 
	 			rua ='$rua', numero = '$numero', 
	 			bairro = '$bairro', cidade = '$cidade', 
	 			estado = '$estado', quantidade_quarto = '$qQuarto' where id_casa ='$idCasa'");

	 		$json[]=array(
            		'valor'=> 'success',
            		'mensagem'=> 'Casa editada com sucesso',
                			 
         		);

       	 		$jsonString =json_encode($json);
       	 		echo $jsonString;
	 	}else{
	 		$json[]=array(
            		'valor'=> 'notFound',
            		'mensagem'=> 'Não achamos Casa cadastrada',
                			 
         		);

       	 		$jsonString =json_encode($json);
       	 		echo $jsonString;
	 	}
	 } catch (Exception $e) {
	 	
	 } 
?>