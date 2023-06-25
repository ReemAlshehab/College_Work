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
session_start();
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
        <title>Login</title>
        <link rel="stylesheet" href="../style/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
       <?php
// insert CODE
        if (isset($_POST['Signin'])) {

// store user inputs in variables 
            $uname = $_POST['uname'];
            $u_pass = $_POST['password'];
            $_SESSION["id"] = $row['b_id'];

// step 3# create an insert sql query 
            $sql = "SELECT * FROM buyer WHERE UserName = '$uname' and Password = '$u_pass'" or die("Failed to query database" . mysqli_errno());

// step 4# preform the insert Query in the database by using mysqli_query() 
            $result = mysqli_query($con, $sql);

// verify the query (optional)
            $num_rows = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            $_SESSION["id"] = $row['b_id'];
            if ($num_rows > 0) {
                header("location: UserH.html");
            } else {
                echo "Error" . $sql . "<br>" . mysqli_error($con);
            }
        }
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

                    <label for="user"> Username:</label>
                    <input type="text" name="uname" class="textb" id="user" required><br>                      
                    <label for="pass">Password: </label>
                    <input type="password" name="password" class ="textb" id="pass" required>
 <br>
                    <input type="submit" name="Signin" class="btn text-right" class="btn"value="Sign in">
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
                <li><a href="mailto:cucumber@cu.com"><img src="../images/mail.png" alt="mail"/>Email</a></li>
                <li><a href="https://www.linkedin.com/"><img src="../images/linkedin.png" alt="linkedin"/>LinkedIn</a></li>
            </ul>
            <br>
            <br>
            <br>
            <p>All rights reserved. Designed by <a href="#">CS4</a></p>
        </div>
    </body>
</html>