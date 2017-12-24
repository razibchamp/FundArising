

function nameValidate(name)
{
	if(name.length > 0)
		return true;
	else
		return false;
}

// minimum correct email format is "abcxyz@gmail.com
function emailValidate(email)
{
	
	var arr;
	
	arr = email.split("@");
	console.log(arr.length);
	if(arr.length >= 2)
	{
		arr = arr[1].split(".");
		if(arr.length >= 2 )
			return true;
		else
			return false;
	}
	
}

function usernameValidate(username)
{
	if(username.length === 0)
	{
		return false;
	}
	return true;
}

function passwordValidate(password)
{
	if(password.length < 5 )
	{
		
		return false;
	}
	else 
	{
		if(containsNumber(password))
		{
			return true;
		}
		
		return false;
	}
		
	
}


function confirmPasswordValidate(password, confirmPassword)
{
	
	
}

function containsNumber(value)
{
	var len = value.length;
	
	for(var i = 0; i<len; i++)
	{
		if(Number.isInteger(value[i]))
			return true;
	}
	
	return false;
}