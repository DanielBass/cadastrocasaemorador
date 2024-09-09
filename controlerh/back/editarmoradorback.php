<?php
	if(!isset($_SESSION)){
 	session_start();
 	}  
	require_once("banco1.php");
	require_once("banco2.php");

	 $json=array();
	$idMorador= $_SESSION['idMorador'];
	
	if(isset($_POST['nome']) && !empty($_POST['nome'])){
		$nome= $_POST['nome'];
		$cpf= $_POST['cpf'];
		$matricula= $_POST['matricula'];

	}
	

	$sql=$db->query("SELECT * FROM `nomes` WHERE id_morador ='
	$idMorador'");

	try {
	 	if($sql->rowCount()>0){
	 		$db->query("UPDATE nomes SET nomeMorador = '$nome', cpf = '$cpf', 
	 			matricula = '$matricula' where id_morador ='$idMorador'");

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