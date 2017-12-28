<?php require_once "data_access.php"; ?>

<?php
	
	function addFundToDb($fund){
        $sql = "INSERT INTO fund(title,funddetails,goal,userid,fund_image) VALUES('$fund[title]','$fund[funddetails]','$fund[goal]','$fund[userid]', '$fund[fund_image]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	

?>