<?php session_start(); ?>

<?php require_once "../../data/login_data_access.php"; ?>
<?php
	
	date_default_timezone_set("Asia/Dhaka");
	$date = date('m/d/Y h:i:s a', time()); // to be checked into database
	updateLastLogoutToDb(array( "userid" => $_SESSION["userid"], "last_logout" => $date));
	
	
	session_unset();
	
	session_destroy();
	
?>

<script>
	window.location.replace("https://localhost/fundArising/app/Views/index.html");
</script>