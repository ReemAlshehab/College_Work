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
        <title>Add Product</title>
        <link rel="stylesheet" href="../style/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
          <?php
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT * FROM farmer where f_id='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
                <?php


// insert CODE
if(isset($_POST['insert'])){

// store user inputs in variables 
	$p_name=$_POST['p_name'];
	$p_image=$_POST['image'];
	$p_inv=$_POST['inventory'];
	$p_cat=$_POST['category'];
        $p_price=$_POST['price'];

	
// step 3# create an insert sql query 
	$sql = "INSERT INTO products (productname, image,Inventory, category, Price,f_id)
VALUES ('$p_name', '$p_image' ,'$p_inv','$p_cat','$p_price','$id')";

// step 4# preform the insert Query in the database by using mysqli_query() 
	$result=mysqli_query($con, $sql);
	
// verify the query (optional)
if ($result) {
 	echo "<p>"."<h3>"."New record created successfully"."</p>"."</h3>"."<br>";
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
                            <li><a href="FarmerH.html">Home</a></li>

                            <li><a href="addproduct.php">products</a></li>
                            <li><a href="profileF.php">Profile</a></li>
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    </nav>

                </div>
                <div class="profile text-center">

                    <h1> Add Product</h1>
                    <br>
                    <br>
                    <form method="POST" class="profile-form text-center">
                        <table class="addt">
                            <tr>
                                <td>Product Name:</td>
                                <td><input type="text" name="p_name">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="file-upload"> Image:</label>
                                </td>
                                <td>
                                    <input type="file" name="image" id="file-upload"></td>
                            </tr>
                            <tr>
                                <td>
                                    Inventory:
                                </td>
                                <td>
                                    <input type="number" name="inventory" class="textb">
                                </td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td>
                                    <select name="category" class="textb">
                                        <option value="1">Vegetables</option>
                                        <option value="1">Fruits</option>

                                    </select></td>
                            </tr>
                            <tr>
                                <td>Price:</td>
                                <td><input type="number" name="price" class="textb"></td>
                            </tr>

                        </table>
                        <input type="submit" name="insert" value="Add Product" class="btn">
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