<?php require_once "data_access.php"; ?>
<?php
	
	///register 
	function addpersonToDb($person){
        $sql = "INSERT INTO persons(userid,name,email,username,password) VALUES(NULL,'$person[name]','$person[email]','$person[username]','$person[password]')";
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
	////serchblog
	function getBlogByTitleFromDb($blogtitle){
        $sql = "SELECT * FROM fund WHERE name LIKE '%$blogtitle%'";
        $result = executeSQL($sql);
        
        $funds = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $funds[$i] = $row;
        }
        
        return $blogtitle;
    }
	
	////add fund
	function addfundToDb($fund){
        $sql = "INSERT INTO fund(fundid,fundtitle,funddetails,raised,goal) VALUES(NULL,'$fund[fundtitle]','$fund[funddetails]','$fund[raised]','$fund[goal]')";
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
	
	////search by username
	function findPersonByUserName($username)
	{
		$sql = "SELECT * FROM persons WHERE username='$username'";
		
		$result = executeSQL($sql);
		$res = mysqli_fetch_assoc($result);
		
		return $res;
	}
	///// search person by Name
	function getPersonsByNameFromDb($personName){
        $sql = "SELECT * FROM person WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
	
	/// search by Email
	function getPersonsByEmailFromDb($personEmail){
        $sql = "SELECT * FROM person WHERE email LIKE '%$personEmail%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
	
?>