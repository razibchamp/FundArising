
function regValidate()
{
	var regForm = document.getElementById("registration");
	
	var email = regForm.email.value;
	var name = regForm.name.value;
	var password = regForm.password.value;
	var confirmPassword = regForm.confirmPassword.value;
	var username = regForm.username.value;
		
	
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
	
	if(!nameValidate(name))
	{
		nameSpan.innerHTML += "name must be filled<br/>";
		flag++;
	}
	
	if(!emailValidate(email))
	{
		
		emailSpan.innerHTML += "email must be valid<br/>";
		flag++;
	}
	
	if(username.length > 0)
	{
		var xhttp = new XMLHttpRequest();
		
		//console.log(xhttp);
		
		xhttp.onreadystatechange = function ()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				console.log(this.responseText);
				if(this.responseText == 1)
				{
					console.log("found");
					usernameSpan.innerHTML += "username exists";
					flag++;
				}
					
			}
			
		};
		
		xhttp.open("GET", "https://localhost/fundArising/app/Controllers/registration_controller.php?username=" + username, false);
		xhttp.send();		
	}
	
	
	if(!passwordValidate(password))
	{
		passwordSpan.innerHTML += "password should contain more than 5 characters<br/>it should contain some digit";
		flag++;
	}
	
	if(!confirmPasswordValidate(password, confirmPassword))
	{
		confirmPasswordSpan.innerHTML += "password doesn't match";
		flag++;
	}
	
	
	if(flag > 0)
	{
		return false;
		
	}
	else
		return true;
	
	
}