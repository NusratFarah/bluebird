<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>

<body>
	<table border="1"align="center" width="60%" >
		<tr background="hotel.jpg">
			<th colspan="3" align="right" width="60%">
				<h1 style="font-family: Algerian; text-align: center;">Blue Bird</h1>
			</th>
		</tr>

		<tr background="white.jpg">
			<td align="center"> 
				<span> || </span>
				<a href="welcome.php">Home</a> 
				<span> || </span>
				<?php 
					if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == "true") {
						echo '<a href="promotional.php">Promotional Offers</a>
							<span> || </span>';
					}
				?>
				
				<a href="services.php">Services</a></li>
				<span> || </span>
				<a href="About.php">About The Hotel</a>
				<span> || </span>
				<?php  
					if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == "true") {
						echo '<a href="logout.php">Logout</a>';
					}
					else{
						echo '<a href="login.php">Login</a>';
					}
				?>
				<span>||</span>
				
			</td>
		</tr>

		<tr>
			<td colspan="3">
				<img src= "hotel.jpg" width="100%">
			</td>
		</tr>
			
		<tr>
			<th background="hotel.jpg">
				<h3>www.bluebird.com</h3>
			</th>
		</tr>
	</table>

</body>
</html>