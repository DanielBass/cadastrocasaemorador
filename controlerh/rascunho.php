
 <?php  

 	
	 require_once("../../back/banco1.php");
	 require_once("../../back/banco2.php");

	 $json=array();

	 if(isset($_POST['nome']) && !empty($_POST['nome'])){
		
		$nome= $_POST['nome'];
		$cep= $_POST['cep'];
		$rua= $_POST['rua'];
		$numero= $_POST['numero'];
		$bairro= $_POST['bairro'];
		$cidade= $_POST['cidade'];
		$estado= $_POST['estado'];
		$qQuarto = $_POST['qQuarto'];

	 	$sql=$db->query("SELECT * FROM `casas` WHERE nomeCasa ='$nome'");
	 	try {	
	 		if($sql->rowCount()>0){ 
				 		
		 		$json[]=array(
            		'status'=> 'erro',
            		'mensagem'=> 'já existe casa com esse nome',
            		'alert'=> 'alert-danger'
                			 
         		);

       	 		$jsonString =json_encode($json);
       	 		echo $jsonString;

		  	}else{
				$query="INSERT INTO `casas` (`id_casa`, `nomeCasa`, `cep`, `rua`, `numero`,`bairro`,`cidade`,`estado`, `quantidade_quarto`) 
				VALUES (NULL, :nomeCasa, :cep, :rua, :numero, :bairro, :cidade, :estado, :quantidadeQuarto)";

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
	           		'status'=> 'sucesso',
	           		'mensagem'=> 'Cadastro com sucesso',
	           		'alert'=> 'alert-danger'
	                			 
        			);

       				$jsonString =json_encode($json);
       				echo $jsonString;
				}else{
					$json[]=array(
		           		'status'=> 'sucesso',
		           		'mensagem'=> 'erro Ao Cadastra',
		           		'alert'=> 'alert-danger'
	                			 
        			);

       				$jsonString =json_encode($json);
       				echo $jsonString;
				}
		  	}
 		}catch (Exception $e) {
 			
		 }
	 	
	
	}else{
		 
	}
		
	
 ?> 	
