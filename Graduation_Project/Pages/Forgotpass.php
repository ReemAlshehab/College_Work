<!DOCTYPE html>
<?php
include "Dbcon.php";


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>reset</title>
        <link rel="stylesheet" href="../style/style.css" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="header">

        <div class="navbar">

            <nav>


                    <ul class="menu">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="AboutUs.html">About</a>
                    </li>
                    <li>
                        <a href="#contactus">Contact Us</a>
                    </li>
                </ul>
                <ul class="buttons">
                    <li>
                        <a href="SignUp.php"" class="btn">Sign up</a>
                    </li>
                    <li>
                        <a href="signinbtn.html" class="btn">Sign in</a>
                    </li>
                </ul>
            </nav>

        </div>

        </section>
        <?php 
        
        $msg="";
        $msg2="";

    if(isset($_POST['reset'])){
	$c_em=$_POST['email'];
        $c_pass =$_POST['pass'];
        $c_conpass =$_POST['pass2'];

        if($c_pass == $c_conpass){
	
	$sql = "UPDATE customer SET password = '$c_pass'
                      WHERE Customer_Email = '$c_em'";

	$result=mysqli_query($con, $sql) or die(mysqli_error($db));
	

           if ($result) {
         header("location: SignINCust.php");
	}
        else {
        echo "Error" . $sql . "<br>" . mysqli_error($con);}}
        else{
            $msg="Your password do not match!";
        }
    }
?>
        <section class="signpage">
            <br><br><br>
            <div class="signform">
                <h1>Password Reset</h1>
                <form method="POST">
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" class="formtxtbx" required><br>
                    <label for="pass">New Password:</label><br>
                    <input type="password" id="pwd" name="pass" class="formtxtbx" required><br>
                    <label for="pass">Confirm new Password:</label><br>
                    <input type="password" id="pwd" name="pass2" class="formtxtbx" required><br>
                    <p style="color:red;"><?php echo $msg; ?></p>
                    <br><br><br>
                    <input type="submit" value="Reset" name="reset" class="bttn" >
                </form>
            </div> 



            
        </section>
        
        <div class="footer" id="contactus">
            <ul>
                <li><a href="#"><img src="../images/Facebook.png" width="35px"  alt="facebook"/></a></li>
                <li><a href="#"><img src="../images/Twitter.png" width="35px"  alt="twitter"/></a></li>
                <li><a href="#"><img src="../images/Instagram.png" width="35px" alt="instagram"/></a></li>
                <li><a href="#"><img src="../images/Youtube.png" width="35px"  alt="youtube"/></a></li>
                <li><a href="#"><img src="../images/Email.png" width="35px" alt="mail"/></a></li>
                <li><a href="#"><img src="../images/Linkedin.png" width="35px"  alt="linkedin"/></a></li>
            </ul>
            <br>
            <br>

            <p>All rights reserved. Designed by <a href="#">Group 4</a></p>
        </div>
            
    </body>
</html>

