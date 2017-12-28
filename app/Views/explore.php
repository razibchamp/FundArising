<body>

	<table align="center" border="1" width="1000" height="550"  cellpadding="10" cellspacing="0" >
		
		<tr>
			<td height="30" align="center"><h2>EXPLORE</h2></td>
		</tr>
		<tr>
			<td height="20">
				
				<a href="../Views/index.html">Home</a>&nbsp &nbsp &nbsp  
				<a href="../Views/create.html">Create</a> &nbsp &nbsp &nbsp
				<a href="../Views/login.html">Login</a>
				
			</td>			
		</tr >	
		
		<tr>
			
			<td>
				<table border="0" cellpadding="5" cellspacing="10">
					<tr>
						<td width="300" height="300">
							<a href="fullpostexplore.html">
								<img src="../Views/img/<?php echo $funds[$i]["fund_image"]; ?>" align="center" width="300px" height="150"/>
							</a>
								<p> By: <?php echo $person["username"]; ?></p>
								<p>
									<small><i>
										<?php echo $funds[$i]["funddetails"]; ?>
									</i></small>
								</p>
								
								<div class="container" id=1>
								  <div class="skills html"  id=2>Raised</div>
								</div>


								<script>
									s=document.getElementById("1").style;
									s.backgroundColor="#ddd";
									s.fontSize="18px";
									
									
									j= document.getElementById("2").style;
									
									j.backgroundColor="#2196F3";
									j.width="<?php echo $funds[$i]["raised"]/$funds[$i]["goal"]*100 . '%'; ?>";
									
								</script>
								<p align="bottom"><b>Raised:</b> $<?php echo $funds[$i]["raised"]; ?> &nbsp &nbsp &nbsp &nbsp &nbsp <b>Goal:</b> $<?php echo $funds[$i]["goal"]; ?> </p>
						</td>
						
						
						<td width="300" height="300">
							<a href="fullpostexplore.html">
								<img src="../Views/img/<?php echo $funds[++$i]["fund_image"]; ?>" align="center" width="300px" height="150"/>
							</a>
								<p> By: <?php echo $person["username"]; ?></p>
								<p>
									<small><i>
										<?php echo $funds[$i]["funddetails"]; ?>
									</i></small>
								</p>
								
								<div class="container" id=3>
								  <div class="skills html"  id=4>Raised</div>
								</div>


								<script>
									s=document.getElementById("3").style;
									s.backgroundColor="#ddd";
									s.fontSize="18px";
									
									
									j= document.getElementById("4").style;
									
									j.backgroundColor="#2196F3";
									j.width="<?php echo $funds[$i]["raised"]/$funds[$i]["goal"]*100 . '%'; ?>";
									
								</script>
								<p align="bottom"><b>Raised:</b> $<?php echo $funds[$i]["raised"]; ?> &nbsp &nbsp &nbsp &nbsp &nbsp <b>Goal:</b> $<?php echo $funds[$i]["goal"]; ?> </p>
						</td>
						
						
						
						<td width="300" height="300">
							<a href="fullpostexplore.html">
								<img src="../Views/img/<?php echo $funds[++$i]["fund_image"]; ?>" align="center" width="300px" height="150"/>
							</a>
								<p> By: <?php echo $person["username"]; ?></p>
								<p>
									<small><i>
										<?php echo $funds[$i]["funddetails"]; ?>
									</i></small>
								</p>
								
								<div class="container" id=5>
								  <div class="skills html"  id=6>Raised</div>
								</div>


								<script>
									s=document.getElementById("5").style;
									s.backgroundColor="#ddd";
									s.fontSize="18px";
									
									
									j= document.getElementById("6").style;
									
									j.backgroundColor="#2196F3";
									j.width="<?php echo $funds[$i]["raised"]/$funds[$i]["goal"]*100 . '%'; ?>";
									
								</script>
								<p align="bottom"><b>Raised:</b> $<?php echo $funds[$i]["raised"]; ?> &nbsp &nbsp &nbsp &nbsp &nbsp <b>Goal:</b> $<?php echo $funds[$i]["goal"]; ?> </p>
						</td>
						
						
					</tr>
					
					
				 </table>
			 </td>
			
												
		</tr>
		
		<tr height="5">
			<td  valign="top" colspan="2"><center>Copyright 2017</center></td>
		</tr>	
	</table>
</body>