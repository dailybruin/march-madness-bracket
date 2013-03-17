<?php

include_once dirname(__FILE__) . '/../CONFIG.php';

try 																			
	{
		//Change to match database settings.host,db,user,pw
		$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, 
			DB_USER, DB_PASSWORD);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
		$pdo->exec('SET NAMES "utf8"');	
	}
catch (PDOException $e)
	{
		$error = 'Unable to connect to the database server.'. $e->getMessage();
		include 'error.tpl';
		exit();
	}

?>
