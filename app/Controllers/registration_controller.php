<?php require_once "../../data/person_data_access.php"; ?>

<?php
	
	if(count($_GET) == 1)
	{
		$res = findPersonByUserName($_GET['username']);
		
		if(count($res) >= 1)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	else
	{
		$person = array( "name" => $_POST['name'],"email" => $_POST['email'],"username" => $_POST['username'],"password" => $_POST['password']);
		
		addPersonToDb($person);
		
		require_once "../Views/userprofile.html";
	}
?>