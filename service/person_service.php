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
	 function getBlogByTitle($blogtitle){
        return getBlogByTitleFromDb($blogtitle);
    }
	
	 function getPersonsByName($personName){
        return getPersonsByNameFromDb($personName);
    }
	function getPersonsByEmail($personEmail){
        return getPersonsByEmailFromDb($personEmail);
    }
?>