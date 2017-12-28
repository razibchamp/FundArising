<?php require_once "data_access.php"; ?>

<?php
	
	function addFundToDb($fund){
        $sql = "INSERT INTO fund(title,funddetails,goal,userid,fund_image) VALUES('$fund[title]','$fund[funddetails]','$fund[goal]','$fund[userid]', '$fund[fund_image]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	
	//// search charity
	function getAllFundsFromDb(){
        $sql = "SELECT * FROM fund";
        $result = executeSQL($sql);
        
        $funds = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $funds[$i] = $row;
        }
        
        return $funds;
    }
	

?>