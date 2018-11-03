<?php
	session_start();
   	$userName="";
   	$password="";
   	$errors = array();
   	if(isset($_POST['submit']))
   	{
	   	$userName = $_POST['userName'];
	   	$password = $_POST['password'];
      
	   	if (empty($userName)) {
	   		array_push($errors, "Username required");
	   	}
	   	if (empty($password)) {
	   		array_push($errors, "Password required");
	   	}
	   	if (count($errors) == 0) {
	   		if(isValidUser($userName, $password)) {
				header("location: profile.php");
			}
			else {
				array_push($errors, "Wrong username/password");
			}
	   	}
	}
	function isValidUser($name, $password)
	{
		$XMLname = "";
		$XMLpassword = "";
		$XMLfullname = "";
		$userLogin = simplexml_load_file("xml/userInfo.xml");
		foreach($userLogin->user as $user)
		{
			$XMLname = $user->username->__toString();
			$XMLpassword = $user->password->__toString();
			$XMLfullname = $user->fullName->__toString();
			if($name==$XMLname && md5($password)==$XMLpassword)
			{
				$fn = $XMLfullname;
				$_SESSION['userName'] = $name;
				$_SESSION['fullName'] = $fn;
				$_SESSION['loggedIn'] = "TRUE";
				return TRUE;
			}
		}
	}

?>
<html>
<head><title>Login</title></head>
<form>
<table border="1"align="center" width="60%" >
	
			<tr background="hotel.jpg"><th colspan="3" align="right" width="60%">
			<label style="font-family:Algerian" ><center><h1>Blue Bird<h1><center></label>
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
				<table>
                         <tr>
                           <td>User Name</td>
                           <td>:</td>
                           <td><input type="text" name="user" ></td>
                        </tr>
						
                        <tr>
                          <td>Password</td>
                          <td>:</td>
                          <td><input type="password" name="Password"></td>
                        </tr>
                </table>
				<hr />
                <input name="remember" type="checkbox">Remember Me
                <br/><br/>
                <input type="submit" value="Login"> 
                <a href="registration.php">Didn't Register yet?</a>
				<a href="registration.php">User?</a>
				</fieldset>
			</td>
			
			      <!--<a href="login.php">Login</a>
				  <a href="About.php">Registration</a>-->
			</tr>
			
			<tr>
			     <th background="hotel.jpg"><h3>www.bluebird.com</h3>
		    </tr>
	</table>
</form>
</html>


