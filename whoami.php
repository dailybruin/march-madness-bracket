<?php
require_once "CONFIG.php";
require_once "includes/dbconnect.inc.php";
require_once "backend/fb/src/facebook.php";

$facebook = new Facebook(array(
  'appId'  => FB_APPID,
  'secret' => FB_SECRET,
));

$fbuser = $facebook->getUser();
if($fbuser == 0)
{
	echo "Please log into Facebook";
	exit();
}


$data = array();

$sql  = 'SELECT uid '
	  . 'FROM user '
      . 'WHERE fb_id = :fid;';
$stmt = $pdo->prepare($sql);
$stmt->execute(array(':fid' => $fbuser));
$result = $stmt->fetchColumn();


$data['permalink'] = "index.php?b=" . $result;


$json = json_encode($data);
print $json;

?>