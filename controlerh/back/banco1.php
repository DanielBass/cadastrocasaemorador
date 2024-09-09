<?php

	$dsn = "mysql:dbname=controlerh;host=127.0.0.1";
	$dbuser="root";
	$dbpass="";
    $db = new PDO ($dsn,$dbuser,$dbpass,array (PDO:: MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
    
?>