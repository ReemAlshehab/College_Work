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
        <title>Profile</title>
        <link rel="stylesheet" href="../style/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    </head>
  <?php
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT * FROM buyer where b_id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
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
                            <li><a href="UserH.html">Home</a></li>
                            <li><a href="products.php">products</a></li>
                            <li><a href="profileU.php">Profile</a></li>
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    </nav>

                </div>
            <div class="profile text-center">
                
                <img src="../images/website_costumer_icon.png" width="100px">
                <form method="POST" class="profile-form text-center">

                    <label for="fname">First Name:</label>
                    <input type="text" name="fname" class="textb" id="firstname" value="<?php echo $row['FirstName'];?>" ><br>
                    <label for="fname">Last Name:</label>
                    <input type="text" name="lname" class="textb" id="lastname" value="<?php echo $row['LastName'];?>" ><br>
                    <label for="fname">Username:</label>
                    <input type="text" name="uname" class="textb" id="username" value="<?php echo $row['UserName'];?>" readonly><br>
                    <label for="fname">Email:</label>
                    <input type="text" name="em" class="textb" id="email" readonly value="<?php echo $row['email'];?>" ><br>
                    <label for="fname">Address:</label>
                    <input type="text" name="address" class="textb" id="baddress" value="<?php echo $row['Address'];?>" ><br>                        
                    <label for="fname">ID:</label>
                    <input type="text" name="id" class="textb" id="b_id" value="<?php echo $row['b_id'];?>" readonly><br>
                    <input type="submit" name="update" class="btn text-right" id="updatebtn" value="Update">
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
    <?php
      if(isset($_POST['update'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $address = $_POST['address'];
      $query = "UPDATE buyer SET FirstName = '$firstname',
                      LastName = '$lastname', address = '$address'
                      WHERE b_id = '$id'";
      $result = mysqli_query($con, $query) or die(mysqli_error($db));
      if ($result) {
 	echo "<p>"."<h3>"."Updated Successfully"."</p>"."</h3>"."<br>";
         header("location: UserH.html");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}