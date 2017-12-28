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
        $sql = "INSERT INTO blogs(blogid,title,blogdate,blogdetails,userid) VALUES(NULL,'$blog[title]','$blog[blogdate]','$blog[blogdetails]','$blog[userid]')";
        $result = executeSQL($sql);
        return $result;
    }
	////serchblog
	
	
	////search by username
	function findPersonByUserName($username)
	{
		$sql = "SELECT * FROM persons WHERE username='$username'";
		
		$result = executeSQL($sql);
		$res = mysqli_fetch_assoc($result);
		
		return $res;
	}
	
	
	function findUserIdByUserName($username)
	{
		$sql = "SELECT userid FROM persons WHERE username='$username'";
		
		$result = executeSQL($sql);
		$res = mysqli_fetch_assoc($result);
		
		return $res['userid'];
	}
	
	///// search person by Name
	function getPersonsByNameFromDb($personName){
        $sql = "SELECT * FROM persons WHERE name LIKE '%$personName%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
	
	function getPersonByIdFromDb($personId){
        $sql = "SELECT * FROM persons WHERE userid='$personId'";
        $result = executeSQL($sql);
        
        $person = array();
		$person = mysqli_fetch_assoc($result);
        
        return $person;
    }
	
	/// search by Email
	function getPersonsByEmailFromDb($personEmail){
        $sql = "SELECT * FROM persons WHERE email LIKE '%$personEmail%'";
        $result = executeSQL($sql);
        
        $persons = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $persons[$i] = $row;
        }
        
        return $persons;
    }
	
?>