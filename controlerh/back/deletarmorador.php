<?php

	require_once("banco2.php");
    require_once("banco1.php");

    $idMorador = $_GET['id'];

    $sql= $db->query("DELETE FROM nomes WHERE id_morador = '$idMorador'");

    if ($sql){
    	header("location: ../front/listamorador.php");
    }

?>