<?php
	session_start();
   	$userName="";
   	$password="";
   	
   	if(isset($_POST['submit']))
   	{
   		if (isset($_POST['user']) && isset($_POST['password'])) {
	   		$userName = $_POST['user'];
	   		$password = $_POST['password'];
	   		if(isValidUser($userName, $password)) {
				header("location: welcome.php");
			}
			else {
				echo "username/password error";
			}
	   	}
	   	else {
	   		echo "error";
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
				$_SESSION['loggedIn'] = "TRUE";
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
	

			<tr background="hotel.jpg"><th colspan="3" align="right" width="60%">
			<h1 style="font-family: Algerian; text-align: center;">Blue Bird<h1>
			</tr>
			<tr background="white.jpg">
				<td align="center"> 
				     <a href="welcome.php">Home</a> <label>||</label>
				     <a href="promotional.php">Promotional Offers</a> <label>||</label>
					 <a href="login.php">Login</a> <label>||</label>
					 
					
					 
				</td>
				 
			</tr>
			<tr  background="white.jpg">
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
                </form>
                <a href="registration.php">Didn't Register yet?</a>
				<a href="registration.php">User?</a>
				
				</fieldset>
			</td>
			
			      <!--<a href="login.php">Login</a>
				  <a href="About.php">Registration</a>-->
			</tr>
			
			<tr>
			     <th background="hotel.jpg"><h3>www.bluebird.com</h3></th>
		    </tr>
	</table>

</body>
</html>


