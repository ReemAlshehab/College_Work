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
session_start();
//verfiy the Connection
if( mysqli_connect_errno()){
echo "Connection Error:". mysqli_connect_error();
}
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> proudct </title>
        <link rel="stylesheet" href="../style/style.css" />

    </head>
    <body>

                 
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
                            <li><a href="">products</a></li>
                            <li><a href="profileU.php">Profile</a></li>
                            <li><a href="logout.php">Log out</a></li>
                        </ul>
                    </nav>
                </div>

            </div>


        </div>

        <div class="products text-center">
            <div class="searchp">
                <form method="post">
                    <input type="search" name="search" placeholder="Search here.." class="searchtxt">
                    <input type="submit" name="submits" value="Search" class="btn">
                    <br>
                    <br>
                    <br>

                    </div>

                    <section class="product-menu">
                        <div class="p_container">
                            <h2 class="text-center">Products</h2>
                            <br>
                            <br>
                            <br>

                            <div class="product-box">
                                <div >
                                    <img src="../images/apple.jpg" alt="apple" class="product-menu-img">
                                </div>

                                <div class="product-menu-desc">
                                    <h4>Apple</h4>
                                    <p class="Product-price">$3.3</p>
                                    <br>
                                    
                                      <input type="submit" name="addApple" value="Order Now" class="bttn">
                                </div>
                            
                            </div>

                            <div class="product-box">
                                <div >
                                    <img src="../images/mango.jpg" alt="mango"class="product-menu-img">
                                </div>

                                <div class="product-menu-desc">
                                    <h4>Mango</h4>
                                    <p class="Product-price">$2.3</p>
                                    <br>

                                    <input type="submit" name="addMango" value="Order Now" class="bttn">
                                </div>
                            </div>

                            <div class="product-box">
                                <div >
                                    <img src="../images/orange.jpg" alt="orange" class="product-menu-img">
                                </div>

                                <div class="product-menu-desc">
                                    <h4>Orange</h4>
                                    <p class="Product-price">$4.3</p>
                                    <br>

                                    <input type="submit" name="addOrange" value="Order Now" class="bttn">
                                </div>
                            </div>

                            <div class="product-box">
                                <div >
                                    <img src="../images/carrot.jpg" alt="carrot" class="product-menu-img">
                                </div>

                                <div class="product-menu-desc">
                                    <h4>Carrot</h4>
                                    <p class="Product-price">$1.3</p>
                                    <br>

                                    <input type="submit" name="addCarrot" value="Order Now" class="bttn">
                                </div>
                            </div>

                                                     <div class="product-box">
                                <div >
                                    <img src="../images/onion.jpg" alt="onion" class="product-menu-img">
                                </div>

                                <div class="product-menu-desc">
                                    <h4>Onion</h4>
                                    <p class="Product-price">$0.75</p>
                                    <br>

                                    <input type="submit" name="addOnion" value="Order Now" class="bttn">
                                </div>
                            </div>

                            <div class="product-box">
                                <div >
                                    <img src="../images/tomato.jpg" alt="tomato" class="product-menu-img">
                                </div>

                                <div class="product-menu-desc">
                                    <h4>Tomato</h4>
                                    <p class="Product-price">$2.3</p>
                                    <br>

                                    <input type="submit" name="addTomato" value="Order Now" class="bttn">
                                </div>
                            </div>


                            <div class="clearfix"></div>



                        </div>

                    </section>   







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
if(isset($_POST['addApple'])){

	
// step 3# create an insert sql query 
	$sql = "INSERT INTO orders_t (productname, image, Price,b_id)
VALUES ('Apple', '../images/apple.jpg','3.3','$id')";

// step 4# preform the insert Query in the database by using mysqli_query() 
	$result=mysqli_query($con, $sql);
	
// verify the query (optional)
if ($result) {
    header("location: addOrder.php");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}
if(isset($_POST['addMango'])){

	
// step 3# create an insert sql query 
	$sql = "INSERT INTO orders_t (productname, image, Price,b_id)
VALUES ('Mango', '../images/mango.jpg','2.3','$id')";

// step 4# preform the insert Query in the database by using mysqli_query() 
	$result=mysqli_query($con, $sql);
	
// verify the query (optional)
if ($result) {
    header("location: addOrder.php");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}
if(isset($_POST['addOrange'])){

	
// step 3# create an insert sql query 
	$sql = "INSERT INTO orders_t (productname, image, Price,b_id)
VALUES ('Orange', '../images/orange.jpg','4.3','$id')";

// step 4# preform the insert Query in the database by using mysqli_query() 
	$result=mysqli_query($con, $sql);
	
// verify the query (optional)
if ($result) {
    header("location: addOrder.php");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}
if(isset($_POST['addCarrot'])){

	
// step 3# create an insert sql query 
	$sql = "INSERT INTO orders_t (productname, image, Price,b_id)
VALUES ('Carrot', '../images/Carrot.jpg','1.3','$id')";

// step 4# preform the insert Query in the database by using mysqli_query() 
	$result=mysqli_query($con, $sql);
	
// verify the query (optional)
if ($result) {
    header("location: addOrder.php");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}
if(isset($_POST['addOnion'])){

	
// step 3# create an insert sql query 
	$sql = "INSERT INTO orders_t (productname, image, Price,b_id)
VALUES ('Onion', '../images/Onion.jpg','1.3','$id')";

// step 4# preform the insert Query in the database by using mysqli_query() 
	$result=mysqli_query($con, $sql);
	
// verify the query (optional)
if ($result) {
    header("location: addOrder.php");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}
if(isset($_POST['addTomato'])){

	
// step 3# create an insert sql query 
	$sql = "INSERT INTO orders_t (productname, image, Price,b_id)
VALUES ('Tomato', '../images/Tomato.jpg','2.3','$id')";

// step 4# preform the insert Query in the database by using mysqli_query() 
	$result=mysqli_query($con, $sql);
	
// verify the query (optional)
if ($result) {
    header("location: addOrder.php");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}
