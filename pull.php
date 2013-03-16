<?php
require_once "includes/dbconnect.inc.php";

$jsonarray=array();
try
	{
		$sql = 'SELECT * FROM main';
		$result = $pdo->query($sql);												
	}
catch(PDOException $e)
	{
		$error = 'Error fetching data: ' . $e->getMessage();
		include 'error.tpl';
		exit(); 
	}

foreach($result as $row)			
	{
		$object = array("id"=>$row['id'],"name"=>$row['teamname'],"pic_url"=>$row['pic_url']);
		$json = json_encode($object);
		print $json;
		print "\n";
	}
?>