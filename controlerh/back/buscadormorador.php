<?php

	require_once("banco1.php");
	require_once("banco2.php");

	

	$where = "";
  	$busca = filter_input(INPUT_GET,"busca",FILTER_DEFAULT);
  	if($busca){
  		$where ="WHERE  nomeMorador LIKE :nome";	
  	} 
  		

  		$sql = $db->prepare ("SELECT * FROM nomes $where");
  		if($busca){
  			$sql->bindValue(":nome","%".$busca."%");
  		}
  		$sql->execute();
  		$data = $sql->fetchAll(PDO::FETCH_ASSOC);	
  		

  		ECHO json_encode($data);
?>