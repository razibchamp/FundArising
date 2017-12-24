
function regValidate()
{
	var regForm = document.getElementById("registration");
	
	var email = regForm.email.value;
	var name = regForm.name.value;
	var regErrMsg = document.getElementById("regErrMsg");
	regErrMsg.innerHTML = ""; 
	
	var flag = 0;
	console.log(name.length);
	
	
	
	if(!emailValidate(email))
	{
		
		regErrMsg.innerHTML += "email must be valid<br/>";
		flag++;
	}
	
	
	if(!nameValidate(name))
	{
		regErrMsg.innerHTML += "name must be filled<br/>";
		flag++;
	}
	
	if(flag > 0 )
	{
		return false;
	}
	return true;
	
	
}