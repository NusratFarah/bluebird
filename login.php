<?php
	session_start();

	//redirect to welcome page if logged in.
	if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == "true") {
		header('location: customerPage.php');
		exit();
	}

   	$userName="";
   	$password="";
   	
   	if(isset($_POST['submit']))
   	{
   		if (isset($_POST['user']) && isset($_POST['password'])) {
	   		$userName = $_POST['user'];
	   		$password = $_POST['password'];
	   		if(isValidUser($userName, $password)) {
				header("location: customerPage.php");
			}
			else {
				echo '<div style="width: 100%; text-align: center; color: #FF4000;">
						<h2>wrong username/password.</h2>
					</div>';
			}
	   	}
	   	else {
	   		echo '<div style="width: 100%; text-align: center; color: #FF4000;">
					<h2>One or More Field Empty.</h2>
				</div>';
	   	}
	}
	function isValidUser($name, $password)
	{
		$XMLname = "";
		$XMLpassword = "";
		$userLogin = simplexml_load_file("xml/userInfo.xml");
		foreach($userLogin->user as $user)
		{
			$XMLname = $user->username->__toString();
			$XMLpassword = $user->password->__toString();
			
			if($name==$XMLname && md5($password)==$XMLpassword)
			{
				$fn = $XMLfullname;
				$_SESSION['userName'] = $name;
				$_SESSION['loggedIn'] = "true";
				return TRUE;
			}
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
				<a href="services.php">Services</a></li>
				<span> || </span>
				<a href="About.php">About The Hotel</a>
				<span> || </span>				
			</td>
		</tr>
		
		<tr background="white.jpg">
			<td>
				<fieldset>
					<legend><b>LOGIN</b></legend>
					<form method="post" action="login.php">
						<table>
							<tr>
								<td>User Name</td>
								<td>:</td>
								<td><input type="text" name="user" ></td>
							</tr>

							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input type="password" name="password"></td>
							</tr>
						</table>

						<hr />
						<input name="remember" type="checkbox">Remember Me
						<br/><br/>
						<input name="submit" type="submit" value="Login">
						<span>&nbsp;&nbsp;</span>
						<a href="registration.php">not a user?</a>
					</form>
					
				</fieldset>
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


