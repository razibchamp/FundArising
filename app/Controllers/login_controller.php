<?php session_start(); ?>
<?php require_once "../../data/person_data_access.php"; ?>
<?php require_once "../../data/login_data_access.php"; ?>

<?php 
	
	if(empty($_POST["username"]) && empty($_POST["password"]))
	{	
		echo '<script>
		window.location.replace("https://localhost/fundArising/app/Views/login.html");
		</script>';
		
	}
	if(isset($_SESSION["username"]))
	{
		require_once "../Views/userprofile.html";
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
			
			require_once "../Views/userprofile.html";
		}
	}
?>

