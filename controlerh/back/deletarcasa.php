<?php

	require_once("banco2.php");
    require_once("banco1.php");

    $idCasa = $_GET['id'];

    $sql= $db->query("DELETE FROM casas WHERE id_casa = '$idCasa'");

    if ($sql){
    	header("location: ../front/listacasas.php");
    }

?>