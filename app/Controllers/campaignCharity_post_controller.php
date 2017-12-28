<?php session_start(); ?>
<?php require_once "../../data/fund_data_access.php"; ?>

<?php

	$charityName = $_POST['charityName'];
	$title = $_SESSION['title'];
	$funddetails = $_SESSION['description'];
	$goal = $_SESSION['goalMoney'];
	
	
	
		
	$userid = 1;
	var_dump($_SESSION);
	
	if(isset($_SESSION))
	{
		$_FILES = $_SESSION['image'];
		var_dump($_FILES);
		$target ="../Views/img/".basename($_FILES['image']['name']);
		
		$image = $_FILES['image']['name'];
		$fund = array( "title" => $title, "funddetails" => $funddetails, "goal" => $goal, "userid" => $userid, "fund_image" => $image);
		
		addFundToDb($fund);
		var_dump($_FILES['image']['tmp_name']);
		
		 include "../Views/fullpostexplore.html";
	}
	
?>