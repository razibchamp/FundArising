<?php require_once "data/person_data_access.php"; ?>
<?php
    function addPerson($person){
        return addPersonToDb($person);
    }
    
    function editPerson($person){
        return editPersonToDb($person);
    }
	function changepassword($person){
		return changePasswordToDb($person);
	}
	
	function addBlog($blog){
        return addblogToDb($blog);
    }
	
	function addFund($fund){
        return addfundToDb($fund);
    }
	 function getFundByTitle($fundtitle){
        return getFundsByTitleFromDb($fundtitle);
    }
?>