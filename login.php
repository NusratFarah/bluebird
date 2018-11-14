<?php
session_start();
?>
     

	 <?php
          $error="";
		  $logoutmess="";
$user = array(
	"nusrat"=>"123", 
	"palika"=>"456", 
	"anika"=>"789",  
	"Shovon"=>"147", 
	"Tisha"=>"123456");

$flag=0;
//$_SESSION['flag1']= 0;

foreach($user as $un=> $pass)
{
	if($_SERVER['REQUEST_METHOD']== "POST")
	{
		if($_POST['un']== $un && $_POST['pw']== $pass)
		{
			$_SESSION['un']= $un;
			header("location:customerPage.php");
			$flag=1;
			break;
		}
		else
		{
			$flag=2;
		}
	}
}

if($flag==2)
{
	$error="Wrong Username or Password";
	//$_SESSION['ErrorMsg']= "Wrong Username or Password";
	//header("location:login.php");
}

if(isset($_SESSION['flag1']))
{
	$logoutmess="You're Logged out";
    session_destroy();
}
else
{
	echo "";
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
								<td><input type="text" name="un" ></td>
							</tr>

							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input type="password" name="pw"></td>
							</tr>
						</table>

						<hr />
						<p color="red"><?php echo $error?></p>
						<p color="red"><?php echo $logoutmess?></p>
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


