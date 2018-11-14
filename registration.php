<?php
        
         $name =$mail = $password = $confirmPassword = $mblno=$dob=$errpassconfirm="";
		 $errname=$errmail=$errpassword=$errconfirmpassword=$errmblno=$errdob="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $errname="* Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
			
			
            
            if (empty($_POST["email"])) {
                $errmail="* Email is required";
            }else {
               $mail = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                  $errmail = "Invalid email format"; 
               }
            }
            
            
            if (empty($_POST["password"])) {
                $errpassword="* password is required";
            }else {
               $password = test_input($_POST["password"]);
            }
			
			if (empty($_POST["confirmPassword"])) {
                $errconfirmpassword="* confirmPassword is required";
            }else {
               $confirmPassword = test_input($_POST["confirmPassword"]);
            }
			
			if($password!=$confirmPassword){
				$errpassconfirm="Your password and Confirm password not match";
			}
			
			if (empty($_POST["mblno"])) {
                $errmblno="* mblno is required";
            }else {
               $mblno = test_input($_POST["mblno"]);
            }
			if (empty($_POST["dob"])) {
                $errdob="* dob is required";
            }else {
               $dob = test_input($_POST["dob"]);
            }
         }
		 
		    
         $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
         $txt = "$name \n";
         fwrite($myfile, $txt);
         $txt = "$mail \n";
         fwrite($myfile, $txt);
		 $txt = "$password \n";
         fwrite($myfile, $txt);
		 $txt = "$mblno \n";
         fwrite($myfile, $txt);
		 $txt = "$dob \n";
         fwrite($myfile, $txt);
         fclose($myfile);
         
		 
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
		 
		 
      ?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
	<style>
   p {
    color: red;
}
</style>
</head>

<body>
    <form method="post" action="registration.php">
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
                    <legend><b>Registration</b></legend>
                        <table width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="130"></td>
                                <td width="10"></td>
                                <td width="230"></td>
                                <td></td>
                            </tr>
                            <tr>
							<form method="post" action="">
                                <td>Name</td>
                                <td>:</td>
                                <td><input name="name" type="text"></td>
                                <td><p><?php echo $errname;?></p></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input name="email" type="email" placeholder="sample@example.com"></td>
                                <td><p><?php echo $errmail;?></p></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><input name="password" type="password"></td>
                                <td><p><?php echo $errpassword;?></p></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:</td>
                                <td><input name="confirmPassword" type="password"></td>
                                <td><p><?php echo $errconfirmpassword;?><?php echo $errpassconfirm;?></p></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>:</td>
                                <td><input name="mblno" type="text" placeholder="01XXXXXXXXX"></td>
                                <td><p><?php echo $errmblno;?></p></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td valign="top">Date of Birth</td>
                                <td valign="top">:</td>
                                <td><input name="dob" type="text" placeholder="dd/mm/yyyy"></td>
                                <td><p><?php echo $errdob;?></p></td>
                            </tr>
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
        					<tr>
                                <td valign="top">Type</td>
                                <td valign="top">:</td>
                                <td>customer</td>
                                <td></td>
                            </tr>
                        </table>
                        <hr/>
                        <input type="submit" value="submit" name="submit">
                        <input  name="cancle" type="button" value="Cancle"/>
						
						</form>
                    </fieldset>
                </td>
				
            </tr>   
            <tr>
                 <th background="hotel.jpg"><h3>www.bluebird.com</h3></th>
            </tr>
        </table>
    </form>
</body>
</html>