<?php require_once "data/data_access.php"; ?>
<?php
	
	///register 
	function addpersonToDb($person){
        $sql = "INSERT INTO persons(userid,name,email,username,password,confirmpassword) VALUES(NULL,'$person[name]','$person[email]','$person[username]','$person[password]','$person[confirmpassword]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	///editprofile
	function editpersonToDb($person){
        $sql = "UPDATE persons SET name='$person[name]',email='$person[email]' WHERE userid=$person[userid]";
        $result = executeSQL($sql);
        return $result;
    }
	
	///changepassword
	function changePasswordToDb($person){
        $sql = "UPDATE persons SET password='$person[name]',email='$person[email]' WHERE userid=$person[userid]";
        $result = executeSQL($sql);
        return $result;
    }
	////createblog
	function addblogToDb($blog){
        $sql = "INSERT INTO blogs(blogid,title,blogdate,details) VALUES(NULL,'$blog[title]','$blog[blogdate]','$blog[details]')";
        $result = executeSQL($sql);
        return $result;
    }
	////add fund
	function addfundToDb($fund){
        $sql = "INSERT INTO fund(fundid,title,funddetails,raised,goal) VALUES(NULL,'$fund[title]','$fund[funddetails]','$fund[raised]','$fund[goal]')";
        $result = executeSQL($sql);
        return $result;
    }
	//// search charity
	function getFundsByTitleFromDb($fundtitle){
        $sql = "SELECT * FROM fund WHERE name LIKE '%$fundtitle%'";
        $result = executeSQL($sql);
        
        $funds = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $funds[$i] = $row;
        }
        
        return $funds;
    }
?>