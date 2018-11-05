<?php
    session_start();

    //redirect to welcome page if logged in.
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == "true") {
        header('location: welcome.php');
        exit();
    }

$name = $email = $password = $dob = $mblno = $type = "";

if(isset($_POST["submit"])) {
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["dob"]) && isset($_POST["mblno"]) && isset($_POST["confirmPassword"])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];
        $dob=$_POST['dob'];
		$mblno=$_POST['mblno'];
		
        if (empty($name) || empty($email) || empty($password) || empty($confirmPassword) ||
            empty($dob) || empty($mblno)) {
                echo '<div style="width: 100%; text-align: center; color: #FF4000;">
                        <h2>one/more field empty.</h2>
                    </div>';
        }
        else {
            if ($password==$confirmPassword) {
                $xml = new SimpleXMLElement("xml/userInfo.xml",null, true);

                $user = $xml->addChild("user", null);
                $user->addChild("username",$name);
                $user->addChild("password",md5($password));
                $user->addChild("email",$email);
                $user->addChild("dob",$dob);
                $user->addChild("mobile",$mblno);
                $user->addChild("type","customer");
                $xml->asXml("xml/userInfo.xml");
                
                echo("done");

                //header("location: login.php");
            }
            else{
                echo '<div style="width: 100%; text-align: center; color: #FF4000;">
                        <h2>password didn\'t match.</h2>
                    </div>';
            }
        }
    }        
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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
                                <td>Name</td>
                                <td>:</td>
                                <td><input name="name" type="text"></td>
                                <td></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><input name="email" type="email" placeholder="sample@example.com"></td>
                                <td></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td><input name="password" type="password"></td>
                                <td></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:</td>
                                <td><input name="confirmPassword" type="password"></td>
                                <td></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>:</td>
                                <td><input name="mblno" type="text" placeholder="01XXXXXXXXX"></td>
                                <td></td>
                            </tr>       
                            <tr>
                                <td colspan="4"><hr/></td>
                            </tr>
                            <tr>
                                <td valign="top">Date of Birth</td>
                                <td valign="top">:</td>
                                <td><input name="dob" type="text" placeholder="dd/mm/yyyy"></td>
                                <td></td>
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