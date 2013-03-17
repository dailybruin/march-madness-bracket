<?php
require_once "includes/dbconnect.inc.php";

function array_push_assoc(&$array, $key, $value){
	$array[$key] = $value;
}

if (isset($_GET['f_id'])) {
	try
	{
		$sql  = 'SELECT bracket_location, tpic_url '
			  . 'FROM team_user NATURAL JOIN team '
		      . 'WHERE team_user.uid = '
		      . '(SELECT uid FROM user WHERE fb_id = :fid);';
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':fid' => $_GET['f_id']));
		$result = $stmt->fetchAll();
	}
	catch(PDOException $e)
	{
		if(DEBUG)
			$error = 'Error fetching data: ' . $e->getMessage();
		else
			$error = 'Error fetching data.';
		echo $error;
		exit(); 
	}
	$data = array();
	foreach($result as $row)			
	{
		array_push_assoc($data, $row['bracket_location'], $row['tpic_url']);
	}
	
	$json = json_encode($data);
	print $json;
}
else
	echo "Improper request format.";

?>