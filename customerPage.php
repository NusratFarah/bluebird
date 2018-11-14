
<?php

	session_start();
	if(!isset($_SESSION['un'])){
		header("location:login.php");
	}
	else{
        $_SESSION['flag1']= 0;
		 if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(isset($_POST['submit'])){
				 header("location:logout.php");
			 }
		 }
	}
	
	?>


<!DOCTYPE html>
<html>
<head>
<title>customer page</title>
</head>
<body>
<table border="1"align="center" width="60%" >
	
			<tr background="hotel.jpg"><th colspan="3" align="right" width="60%">
			<label><center><h1>WELCOME FOR BEING A MEMBER OF OUR HOTEL<h1><center></label>
			</tr>
			<tr background="white.jpg">
				<td align="center"> 
				     <a href="welcome.php">Home</a> <label>||</label>
				     <a href="promotional.php">Promotional Offers</a> <label>||</label>
					 <a href="login.php">Log In</a></li> <label>||</label>
				   
					
					 
					 
					
					 
				</td>
				 
			</tr>
				
			<tr background="white.jpg">
				<td height="200" valign="center"  width="10%">
						<label><h2><center>Our Facilities</center></h2></label><hr>
							
						
						<center><a href="services.php">Services</a></center>
						
							<br/><hr/>
							
							<center><a href="room.php">Room Reservation</a></center>
							
							<br/></br><hr/>
							
							<center><form method="post" action="logout.php"><input  name="submit" type="submit" value="LogOut"/></form>
							<br/>
							</tr>
	</table>
</body>

</html>

					
							
							