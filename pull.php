<?php
require_once "CONFIG.php";
require_once "includes/dbconnect.inc.php";
require_once "backend/fb/src/facebook.php";

$facebook = new Facebook(array(
  'appId'  => FB_APPID,
  'secret' => FB_SECRET,
));


// Get the current FB user. The login button on the frontend should
// set this
$fbuser = $facebook->getUser();
if($fbuser == 0)
{
	echo "Please log into Facebook";
	exit();
}

function array_push_assoc(&$array, $key, $value){
	$array[$key] = $value;
}

try
{
	$sql  = 'SELECT bracket_location, tpic_url '
		  . 'FROM team_user NATURAL JOIN team '
	      . 'WHERE team_user.uid = '
	      . '(SELECT uid FROM user WHERE fb_id = :fid);';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(':fid' => $fbuser));
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

?>