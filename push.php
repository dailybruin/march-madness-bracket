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

//Yo, I requirez json string through POST
if(!isset($_POST['json']))
	exit();

$json = $_POST['json'];
$json = stripslashes($json);
//Turn JSONz to associative array doe
$data = json_decode($json,true);

// Check if we already have a user with this facebook ID.
// If so let's get their UID
$newuser = false;
$sql = 'SELECT uid FROM user WHERE fb_id = :fbid';
$stmt = $pdo->prepare($sql);
$stmt->execute(array(':fbid' => $fbuser));
$usr = $stmt->fetchColumn();
if(!$usr)
{
	// We need to create a new user in the DB
	$newuser = true;
	$sql = 'INSERT INTO user (fb_id) VALUES (:fbid)';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(array(':fbid' => $fbuser));
	$usr = $pdo->lastInsertId();
}
if(!$newuser)
{
	// If it's an old user, delete their old bracket
	$sql = 'DELETE FROM team_user WHERE uid = :uid';
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
}


// Insert this JSON data into the database
foreach ($data as $bracket_id=>$team_id)
{
	try
	{
		$sql = 'INSERT INTO team_user (uid,bracket_location,tid) 
				VALUES (:uid,:bracket_location,:tid)';
		$s = $pdo->prepare($sql);
		$s->bindValue(':uid', $uid);
		$s->bindValue(':bracket_location', $bracket_id);
		$s->bindValue(':tid', $team_id);
		$s->execute();
	}
	catch (PDOException $e)
	{
		if(DEBUG)
			$error = 'Error inputting data: ' . $e->getMessage();
		else
			$error = 'Error inputting data.';
		echo $error;
		exit(); 
	}

}

?>