<?php require_once "../../data/person_data_access.php"; ?>

<?php
	session_start();
	   
	 $blogdetails= $_POST["textarea"];
	 $title = $_POST["blogtitle"];
	
	$blogdate= date("Y/m/d");
	$userid = $_SESSION['username'];//////////////////
	$blog = array("title"=>$title , "blogdate"=>$blogdate , "blogdetails"=>$_POST["textarea"],"userid"=>$userid);
	
//	var_dump($blog);
	addblogToDb($blog);
	
	
	
	
	require_once "../Views/userprofile.html";
	echo "<script>window.location = '../Views/userprofile.html'</script>";
	
?>