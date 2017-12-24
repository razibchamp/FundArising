

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