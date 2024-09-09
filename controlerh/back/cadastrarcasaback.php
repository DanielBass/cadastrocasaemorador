
 <?php  

 	
	 require_once("banco1.php");
	 require_once("banco2.php");

	 $json=array();

	 if(isset($_POST['nome']) && !empty($_POST['nome'])){
		
		
		$nome= $_POST['nome'];
		$cep= $_POST['cep'];
		$rua= $_POST['rua'];
		$numero= $_POST['numero'];
		$bairro= $_POST['bairro'];
		$cidade= $_POST['cidade'];
		$estado= $_POST['uf'];
		$qQuarto = $_POST['qQuarto'];

	 	$sql=$db->query("SELECT * FROM `casas` WHERE nomeCasa ='$nome'");
	 	try {	
	 		if($sql->rowCount()>0){ 
				 		
		 		$json[]=array(
            		'valor'=> 'dualName',
            		'mensagem'=> 'já existe casa com esse nome',
                			 
         		);

       	 		$jsonString =json_encode($json);
       	 		echo $jsonString;

		  	}else{
				$query="INSERT INTO `casas` (`id_casa`,`nomeCasa`, `cep`,`rua`,`numero`,`bairro`,`cidade`,`estado`,`quantidade_quarto`) 
				VALUES (NULL,:nomeCasa,:cep,:rua,:numero,:bairro,:cidade,:estado,:quantidadeQuarto)";

				$stmt = $db->prepare($query);
				$stmt->bindValue(':nomeCasa', $nome);
				$stmt->bindValue(':cep', $cep);
				$stmt->bindValue(':rua', $rua);
				$stmt->bindValue(':numero', $numero);
				$stmt->bindValue(':bairro', $bairro);
				$stmt->bindValue(':cidade', $cidade);
				$stmt->bindValue(':estado', $estado);
				$stmt->bindValue(':quantidadeQuarto', $qQuarto);
	

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
 		}catch (Exception $e) {
 			
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
