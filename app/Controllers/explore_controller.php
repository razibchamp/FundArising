<?php require_once "../../data/fund_data_access.php"; ?>
<?php require_once "../../data/person_data_access.php"; ?>
<?php

	$funds = getAllFundsFromDb();
	
	//var_dump($funds);
	
	$ctr = count($funds);
	
	for($i = 0; $i < $ctr; $i++)
	{
		$person = getPersonByIdFromDb($funds[$i]["userid"]);
		
		//var_dump($person);
		require_once "../Views/explore.php";
	}

?>