<?php
require_once "includes/dbconnect.inc.php";

function array_push_assoc(&$array, $key, $value){
$array[$key] = $value;
}

if (isset($_GET['f_id'])) {
	try
		{
			$sql = 'SELECT * FROM users INNER JOIN main ON team_id = main.id WHERE f_id ='.$_GET['f_id'];
			$result = $pdo->query($sql);												
		}
	catch(PDOException $e)
		{
			$error = 'Error fetching data: ' . $e->getMessage();
			include 'error.tpl';
			exit(); 
		}
	$data = array();
	foreach($result as $row)			
		{
			array_push_assoc($data, $row['bracket_id'], $row['pic_url']);
		}
	
	$json = json_encode($data);
	print $json;
	print "</br>";
}

else
	echo "set facebook id";

?>