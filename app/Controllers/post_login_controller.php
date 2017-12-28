<?php session_start(); ?>
<?php require_once "../../data/person_data_access.php"; ?>
<?php require_once "../../data/login_data_access.php"; ?>

<?php 
	
	if(isset($_SESSION["username"]))
	{
		echo $_SESSION["userid"];
	}
	else if(isset($_POST["username"]) && isset($_POST["password"]))
	{
		$res = findPersonByUserName($_POST["username"]);
		
		if($res["password"] == $_POST["password"])
		{
			
			
			$userid = findUserIdByUserName($_POST['username']);
			date_default_timezone_set("Asia/Dhaka");
			$date = date('m/d/Y h:i:s a', time()); // to be checked into database
			addLastLoginToDb(array( "userid" => $userid, "last_login" => $date));
			
			
			$_SESSION["userid"] = $userid;
			$_SESSION["username"] = $_POST["username"];
			
			echo $_SESSION["userid"];
		}
	}
?>