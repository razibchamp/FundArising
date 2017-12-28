
function postFirstValidate()
{
	var form1 = document.getElementById("charityPostFirst");
	
	var title = form1.title.value;
	var description = form1.description.value;
	var goalMoney = form1.goalMoney.value;
	
	var deserr = document.getElementById("deserr");
	var titleerr = document.getElementById("titleerr");
	var goalMoneyerr = document.getElementById("goalMoneyerr");
	
	deserr.innerHTML = "";
	titleerr.innerHTML = "";
	goalMoneyerr.innerHTML = "";
	
	var flag = 0;
	console.log("hello");
	
	if(title.length == 0)
	{
		
		titleerr.innerHTML += "***description cannot be empty"
		flag++;
	}
	
	if(description.length == 0)
	{
		deserr.innerHTML += "***title cannot be empty"
		flag++;
	}
	
	if(goalMoney.length == 0)
	{
		goalMoneyerr.innerHTML += "***Goal Money cannot be empty"
		flag++;
	}
	
	
	if(flag > 0)
	{
		return false;
		
	}
	else
		return true;
	
}


function postSecondValidate()
{
	if(this.files && this.files[0])
	{
		var obj = new FileReader();
		obj.onload = function(data){
			var image = document.getElementById("target");
			image.src = data.target.result;
			
		}
		
		obj.readAsDataURL(this.files[0]);
	}
}