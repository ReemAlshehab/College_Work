<!DOCTYPE html>
<?php
include "Dbcon.php";

$min = 1;
$max = 1;
$price=0;
if (isset($_GET["Package"]) && $_GET["Package"] !="") {
  if ($_GET["Package"] == "Gold") {
    $min = 80;
    $max = 100;
    $price = 14000;
  }else if ($_GET["Package"] == "Silver") {
     $min = 50;
     $max = 70;
    $price = 10000;
   }else if ($_GET["Package"] == "Bronze") {
      $min = 20;
      $max = 49;
      $price = 7500;
    }else if ($_GET["Package"] == "Service") {
       $min = 1;
       $max = 20;
       $price = 5000;
     }
}
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order</title>
        <link rel="stylesheet" href="../style/style.css" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
  <style>
    main{
      background-image: url('../images/bg2.jpg');
      background-size: cover;
      padding: 5%;
    }
  </style>
    </head>
    <body>
        <section class="header">

          <div class="navbar">

              <?php include 'header.php'; ?>
          </div>


        </section>
        <?php

?>
        <main>
            <br><br><br>
            <div class="signform">
                <h1 class="page-title">Occasion Details</h1>
                <form method="POST" action="checkout.php">
                    <label for="otype">Occasion Type:</label><br>
                    <input type="text" name="otype" id="otype" class="formtxtbx" value="<?php echo $_GET["Package"]; ?>" readonly><br>
                    <label for="sno">Seat No:</label><br>
                    <input type="number" name="sno" id="sno" class="formtxtbx" min="<?php echo $min; ?>" max="<?php echo $max; ?>" required><br>
                    <label for="cake">Cake Flavor:</label><br>
                    <select  name="cake" class="formtxtbx" required>
                      <option value="Chocolate">Chocolate</option>
                      <option value="vanilla">vanilla</option>
                      <option value="Red velvet">Red velvet</option>
                      <option value="Strawberry">Strawberry</option>
                      <option value="White Chocolate">White Chocolate</option>
                       <option value="Oreo">Oreo</option> 
                    </select><br>
                    <label for="theme">Theme Color:</label><br>
                    <input type="color" name="theme"  class="formtxtbx"><br>
                    <label for="odate">Occasion Date:</label><br>
                    <input type="date" min="<?php echo date("Y-m-d") ?>" name="odate" class="formtxtbx" required><br>
                    <label for="location">Occasion location:</label><br>
                    <select  name="location" class="formtxtbx" required>
                      <option value="Nakhil">Nakhil</option>
                      <option value="Al Danah">Al Danah</option>
                      <option value="Ar Rayyan">Ar Rayyan</option>
                      <option value="Al Rawdah">Al Rawdah</option>
                      <option value="Al Nahdah">Al Nahdah</option>
                       <option value="Al Muraikabat">Al Muraikabat</option> 
                    </select><br><br>
                    <label for="price">Occasion price:</label><br>
                    <input type="text" name="price" value="<?php echo $price; ?>"  class="formtxtbx" readonly><br>

                    <label for="clown">Clown:</label><br>
                    <input type="checkbox" name="clown"><br>
                    <br><br><br>
                    <input type="submit" value="process for payment" name="btnNext" class="bttn">
                </form>
            </div>
        </main>
        <br><br>
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
