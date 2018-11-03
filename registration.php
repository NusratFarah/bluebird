<?php

$name = $email = $password = $dob = $mblno = $type = "";

if(isset($_POST["submit"])){
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["dob"]) && isset($_POST["mblno"]) && isset($_POST["type"])) {
        echo "working";
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $dob=$_POST['dob'];
		$mblno=$_POST['mblno'];
		$type=$_POST['type'];
		

        admininfo($name, $email, $password, $dob, $mblno, $type );
		if(admininfo($name, $email, $password, $dob, $mblno, $type)==true){
            echo "<script>
                    alert('Record Added');
                    document.location='login.php';
                 </script>";
        }
    }
        
}

?>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <form method="post">
        <table border="1"align="center" width="60%" >
            
            <tr background="hotel.jpg"><th colspan="3" align="right" width="60%">
                <label style="font-family:Algerian" ><center><h1>Blue Bird<h1><center></label>
            </tr>

            <tr background="white.jpg">
                <td align="center"> 
                    <a href="login.php">Home</a> <label>||</label>
                    <a href="promotional.php">Promotional Offers</a> <label>||</label>
                    <a href="About.php">About The Hotel</a>  <label>||</label>
                    <a href="login.php">Login</a> <label>||</label>
                                       
                </td>
            </tr>

            <tr  background="white.jpg">
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
                        <td>Name</td>
                        <td>:</td>
                        <td>
                            <input name="name" type="text">
                        </td>
                        <td></td>
                    </tr>       
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                            <input name="email" type="text">
                            <abbr title="hint: sample@example.com"></abbr>
                        </td>
                        <td></td>
                    </tr>       
                    <tr><td colspan="4"><hr/></td></tr>
                    <!--<tr>
                        <td>User Name</td>
                        <td>:</td>
                        <td>
                            <input name="userName" type="text">
                        </td>
                        <td></td>
                    </tr>      
                    <tr><td colspan="4"><hr/></td></tr--> 
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input name="password" type="password">
                        </td>
                        <td></td>
                    </tr>       
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>:</td>
                        <td>
                            <input name="confirmPassword" type="password">
                        </td>
                        <td></td>
                    </tr>       
                    <tr><td colspan="4"><hr/></td></tr>
					
					 <tr>
                        <td>Mobile</td>
                        <td>:</td>
                        <td>
                            <input name="mblno" type="text">
                        </td>
                        <td></td>
                    </tr>       
                    <tr><td colspan="4"><hr/></td></tr>
                    <tr>
                   <!-- <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>   
                            <input name="gender" type="radio">Male
                            <input name="gender" type="radio">Female
                            <input name="gender" type="radio">Other
                        </td>
                        <td></td>
                    </tr>    
                    <tr><td colspan="4"><hr/></td></tr>--> 
                    <tr>
                        <td valign="top">Date of Birth</td>
                        <td valign="top">:</td>
                        <td>
                            <input name="dob" type="text">  
                            <font size="2"><i>(dd/mm/yyyy)</i></font>
                        </td>
                        <td></td>
                    </tr>
					<tr><td colspan="4"><hr/></td></tr>
					<tr>
                        <td valign="top">Type</td>
                        <td valign="top">:</td>
                        <td>customer
                            <input  Type="Hidden" name="type" value="admin">  
                            
                        </td>
                        <td></td>
                    </tr>
					
					
                </table>
			       <hr/>
                <button type="submit" value="submit" name="submit">Submit</button>
                <a  href="http://localhost/nusrat/adminRegistration.php"><input  name="cancle" type="button" value="Cancle"/>
                </fieldset>
                </td>
            </tr>
                    
            <tr>
                 <th background="hotel.jpg"><h3>www.bluebird.com</h3>
            </tr>
        </table>
    </form>
</body>
</html>

