
function regValidate()
{
	var regForm = document.getElementById("registration");
	
	var email = regForm.email.value;
	var name = regForm.name.value;
	var password = regForm.password.value;
	var confirmPasswordSpan = regForm.confirmPassword.value;
	var username = regForm.username.value;
		
	console.log(password);
	
	var nameSpan = document.getElementById("nameSpan");
	var emailSpan = document.getElementById("emailSpan");
	var usernameSpan = document.getElementById("usernameSpan");
	var passwordSpan = document.getElementById("passwordSpan");
	var confirmPasswordSpan = document.getElementById("confirmPasswordSpan");
	
	nameSpan.innerHTML = ""; 
	emailSpan.innerHTML = ""; 
	usernameSpan.innerHTML = ""; 
	passwordSpan.innerHTML = ""; 
	confirmPasswordSpan.innerHTML = ""; 

	var flag = 0;
	if(!emailValidate(email))
	{
		
		emailSpan.innerHTML += "email must be valid<br/>";
		flag++;
	}
	
	
	if(!nameValidate(name))
	{
		nameSpan.innerHTML += "name must be filled<br/>";
		flag++;
	}
	
	
	if(!passwordValidate(password))
	{
		passwordSpan.innerHTML += "password should contain more than 5 characters<br/>it should contain some digit";
		flag++;
	}
	
	
	if(flag > 0)
	{
		return false;
		
	}
	
	return true;
	
	
}