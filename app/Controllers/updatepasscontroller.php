<?php session_start(); ?>
<?php require_once "../../data/person_data_access.php"; ?>
<?php require_once "../../data/login_data_access.php"; ?>

<?php 
	
	
			
			 $userid=$_SESSION["userid"] ;
			$username=$_SESSION["username"] ;
			//var_dump($_SESSION["username"]);
			//findUserByUserName($username)
			/*
			$res = findUserByUserName($username);
			var_dump($res);
			$name= $res['Name'];
			$email= $res['Email'];
			*/
			//userid=$person[userid]
			//$name = $_POST['name'];
			//$email = $_POST['email'];
		///if(isset($_POST['name']) && isset($_POST['email']))
		//{
		//	$person = array( "name" => $_POST['name'],"email" => $_POST['email'],"userid"=>$userid);
			//editpersonToDb($person);
			
			$password = $_POST['newpassword'];
			$person = array( "password" =>$_POST['newpassword'],"userid"=>$userid);
			changePasswordToDb($person);
			
			//var_dump($password);
			
			//var_dump($name);
			//var_dump($email);
			require_once "../Views/userprofile.html";
		//}
?>