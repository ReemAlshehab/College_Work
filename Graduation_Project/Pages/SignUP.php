<!DOCTYPE html>
<?php
include "Dbcon.php";


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SignUp</title>
        <link rel="stylesheet" href="../style/style.css" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="header">

        <div class="navbar">

            <nav>
          <?php include 'header.php'; ?>
            </nav>

        </div>

        </section>
        <?php 
        



    if(isset($_POST['Signup'])){

	$c_name=$_POST['name'];
	$c_phone=$_POST['phone'];
	$c_em=$_POST['email'];
        $c_pass =$_POST['pass'];


	
	$sql = "INSERT INTO customer (Customer_Name, Customer_Phone, password,Customer_Email)
VALUES ('$c_name', '$c_phone' ,'$c_pass','$c_em')";

	$result=mysqli_query($con, $sql);
	

if ($result) {
 	echo "<p>"."<h3>"."created new account successfully"."</p>"."</h3>"."<br>";
        header("location: SignINCust.php");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}
?>
        <section class="signpage">
            <br><br><br>
            <div class="signform">
                <h1>SIGN   UP</h1>
                <form method="POST">
                    <label for="name">Name:</label><br>
                    <input type="text" name="name" id="cname" class="formtxtbx" required=""><br>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="cemail" class="formtxtbx" required><br>
                    <label for="phone">Phone:</label><br>
                    <input type="tel" id="cphone" class="formtxtbx" name="phone" pattern="[0-9]{9}}" placeholder="555555555" requiered><br>
                    <label for="pass">Password:</label><br>
                    <input type="password" id="pwd" name="pass" class="formtxtbx" required><br>
                    <br><br><br>
                    <input type="submit" value="Sign up" name="Signup" class="bttn">
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

