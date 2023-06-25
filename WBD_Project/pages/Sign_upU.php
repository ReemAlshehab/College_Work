<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 * 
 */
        // Define DataBase connection ...... 
$host = "localhost";
$user = "root";
$password = "";
$db = "wbd_project";

// Make the Connection ......
$con = mysqli_connect($host, $user, $password, $db);

//verfiy the Connection
if( mysqli_connect_errno()){
echo "Connection Error:". mysqli_connect_error();
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel="stylesheet" href="../style/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php



// insert CODE
    if(isset($_POST['Signup'])){

// store user inputs in variables 
	$u_fname=$_POST['fname'];
	$u_lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$u_em=$_POST['em'];
        $u_add=$_POST['address'];
        $u_pass =$_POST['password'];


	
// step 3# create an insert sql query 
	$sql = "INSERT INTO buyer (FirstName, LastName,UserName, Password, Address,email)
VALUES ('$u_fname', '$u_lname' ,'$uname','$u_pass','$u_add','$u_em')";

// step 4# preform the insert Query in the database by using mysqli_query() 
	$result=mysqli_query($con, $sql);
	
// verify the query (optional)
if ($result) {
 	echo "<p>"."<h3>"."New record created successfully"."</p>"."</h3>"."<br>";
         header("location: loginU.php");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}
?>
        <div class="header"> 

            <div class="container">
                <!-- nav -->
                <div class="navbar">
                    <div class="logo">
                        <img src="../images/cu.png" width="100px">

                    </div>
                    <nav>
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                        </ul>
                    </nav>

                </div>
            <div class="profile text-center">
                
                <form method="POST" class="profile-form text-center">
                    <label for="fname">First Name:</label>
                    <input type="text" name="fname" class="textb" id="fstname" required><br>
                    <label for="lstname">Last Name:</label>
                    <input type="text" name="lname" class="textb"  id="lstname" required><br>
                    <label for="user">Username:</label>
                    <input type="text" name="uname" class="textb" id="user" required><br>
                    <label for="email">Email:</label>
                    <input type="text" name="em" class="textb" id="email" required><br>
                    <label for="add">Address:</label>
                    <input type="text" name="address" class="textb" id="add" required ><br>                        
                    <label for="pass">Password: (8 characters minimum)</label>
                    <input type="password" name="password" class ="textb" id="pass" minlength="8" required>
 <br>
                    <input type="submit" name="Signup" class="btn text-right" class="btn"value="Sign up">
                </form>
            
        </div>

            </div>
        </div>



        <!-- Footer-->
        <div class="footer" id="contactus">
            <ul>
                <li><a href="https://www.facebook.com/"><img src="../images/facebook.png" alt="facebook"/>Facebook</a></li>
                <li><a href="https://twitter.com/"><img src="../images/twitter.png" alt="twitter"/>Twitter</a></li>
                <li><a href="https://www.instagram.com/"><img src="../images/instagram.png" alt="instagram"/>Instagram</a></li>
                <li><a href="https://www.youtube.com/"><img src="../images/youtube.png" alt="youtube"/>Youtube</a></li>
                <li><a href="cucumber@cu.com"><img src="../images/mail.png" alt="mail"/>Email</a></li>
                <li><a href="https://www.linkedin.com/"><img src="../images/linkedin.png" alt="linkedin"/>LinkedIn</a></li>
            </ul>
            <br>
            <br>
            <br>
            <p>All rights reserved. Designed by <a href="#">CS4</a></p>
        </div>
    </body>
</html>