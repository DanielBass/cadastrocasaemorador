<?php

	 require_once("banco1.php");
	 require_once("banco2.php");

	 $json=array();

	 if(isset($_POST['nomeMorador']) && !empty($_POST['nomeMorador'])){
	 	
	 	$nome = $_POST['nomeMorador'];
	 	$cpf = $_POST['cpfMorador'];
	 	$matricula = $_POST['matriculaMorador'];

	 	$sql=$db->query("SELECT * FROM `nomes` WHERE nomeMorador ='$nome' and nomeMorador ='$cpf'");

	 	try {
	 		if ($sql->rowCount() > 0){
	 			$json[] = array(
	 				'valor' => 'dualName',
	 				'mensagem' => 'já existe Morador com esse nome'
	 			);

	 			$jsonString =json_encode($json);
       	 		echo $jsonString;

	 		}else{
	 			$query ="INSERT INTO `nomes` (`id_morador`,`nomeMorador`,`cpf`,`matricula`) VALUES (NULL,:nomeMorador,:cpf,:matricula)";

	 			$stmt = $db->prepare($query);
	 			$stmt->bindValue(':nomeMorador',$nome);
	 			$stmt->bindValue(':cpf',$cpf);
	 			$stmt->bindValue(':matricula',$matricula);

	 			if($stmt->execute()){
					
					$json[]=array(
	           		'valor'=> 'success',
	           		'mensagem'=> 'Cadastro com sucesso',
	           		
	                			 
        			);

       				$jsonString =json_encode($json);
       				echo $jsonString;
				}else{
					$json[]=array(
		           		'valor'=> 'errorDataBase',
		           		'mensagem'=> 'erro no banco de dados',
		           		'alert'=> 'alert-danger'
	                			 
        			);

       				$jsonString =json_encode($json);
       				echo $jsonString;
				}
	 		}
	 	} catch (Exception $e) {
	 		
	 	}
	 }else{
		 $json[]=array(
            'valor'=> 'noName',
            'mensagem'=> 'campo vazio',
                			 
         	);

       	 $jsonString =json_encode($json);
       	 echo $jsonString;

	}

?>