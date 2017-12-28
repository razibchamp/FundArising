<?php
	session_start();
	
	$_SESSION['title'] = $_POST['title'];
	$_SESSION['description'] = $_POST['description'];
	$_SESSION['goalMoney'] = $_POST['goalMoney'];
	var_dump($_SESSION);
?>

<script src="../../Js/charity_post_validate.js" > </script>

<body>
	
	<table align="center" border="1" width="1000" height="550"  cellpadding="10" cellspacing="0" >
		
		<tr>
			<td height="30" align="center">
			<img src = "img/charity.jpg" align = "center" alt = "campaign.jpg" width = "200px" height = "100" align = "right" >
			</td>
		</tr>
		<tr>
			<td height="20">
				
				<a href="index.html">Home</a>&nbsp &nbsp &nbsp
				<a href="login.html">Login</a> &nbsp &nbsp &nbsp
				<a href="registration.html">Register</a>
				
			</td>			
		</tr >	
		
		<tr>
				
			<td>
				
				<!-- <h1> -->
					<!-- This page is to create new fund rising event -->
				<!-- </h1> -->
				<!-- <B> -->
					<!-- choose your causes -->
				<!-- </B> -->
				
				<h1>
					This page is to create new fund rising event for charity
				</h1>

				<form  action="campaignCharityOthers.php" method="post" enctype="multipart/form-data">
					<fieldset width="400">
					<table>
						
						<tr>
							<td align="center">
								<img src="img/researchFund.jpg" id="target" height="300"align="center" border="2" hspace="250px"/>
							</td>
						</tr>					
						<tr>
							<td align="center">
								<input type="file" id="fileChooser" name="image" onchange="postSecondValidate.call(this)"/>
							</td>
						</tr>
						
						<tr>
							<td align="center">
								<input type="submit" value="Next" valign="right"/> 
								Or 
								<a href="#"> Skip</a>
							</td>
						</tr>
					</table>
					</fieldset>
					
				</form>
		
			</td>
												
		</tr>
		
		<tr height="5">
			<td  valign="top" colspan="2"><center>Copyright 2017</center></td>
		</tr>	
	</table>
</body>
