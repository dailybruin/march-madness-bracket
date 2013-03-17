<?php
require_once "includes/dbconnect.inc.php";

//STILL NEED TO WRITE CODE TO RETRIEVE USER ID AND PUT IT INTO THE VARIABLE $UID.
//ACCESS USER TABLE AND SEARCH FOR MATCHING FACEBOOK ID

//IF USER DOES NOT EXIST IN TABLE, CREATE NEW USER... 


if (isset($_POST['json']))
{
	//Yo, I requirez json string through POST
	$json = $_POST['json'];
	$json = stripslashes($json);
	//Turn JSONz to associative array doe
	$data = json_decode($json,true);

	foreach ($data as $bracket_id=>$team_id)
	{
		if (isset($_POST['newuser'])) {
			try
			{
				$sql = 'INSERT INTO team_user (uid,bracket_location,tid) 
						VALUES (:uid,:bracket_location,:tid)';
				$s = $pdo->prepare($sql);
				//Still need to write the code to obtain UID... 
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

		else if (isset($_POST['updateuser'])) {
			try
			{
				$sql = 'UPDATE team_user SET
						bracket_location = :bracket_location, 
						tid = :tid, 
						WHERE id = :id';
				$s = $pdo->prepare($sql);
				//Still need to write the code to obtain UID... 
				$s->bindValue(':id', $uid);
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
	}


}

?>