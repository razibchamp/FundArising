<?php require_once "data_access.php"; ?>

<?php
	function addLastLoginToDb($user){
        $sql = "INSERT INTO login(userid,last_login) VALUES('$user[userid]','$user[last_login]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	function addLastLogoutToDb($user){
        $sql = "INSERT INTO login(userid,last_logout) VALUES('$user[userid]','$user[last_logout]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	
	function updateLastLoginToDb($user){
        $sql = "UPDATE login SET last_login='$user[last_login]' WHERE userid=$user[userid]";
        $result = executeSQL($sql);
        return $result;
    }
	
	function updateLastLogoutToDb($user){
        $sql = "UPDATE login SET last_logout='$user[last_logout]' WHERE userid=$user[userid]";
        $result = executeSQL($sql);
        return $result;
    }
?>