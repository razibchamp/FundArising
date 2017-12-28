<?php session_start(); ?>
<?php require_once "../../data/person_data_access.php"; ?>
<?php require_once "../../data/login_data_access.php"; ?>

<?php 
	
	
			
			 $userid=$_SESSION["userid"] ;
			$username=$_SESSION["username"] ;
			//var_dump($_SESSION["username"]);
			//findUserByUserName($username)
			
			$res = findUserInfoByUserName($username);
			//var_dump($res);
			$name= $res['Name'];
			$email= $res['Email'];
			
			require_once "../Views/editprofile.html";

?>