<!DOCTYPE html>
<?php
include "Dbcon.php";
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign in</title>
        <link rel="stylesheet" href="../style/style.css" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="header">

        <div class="navbar">

          <?php include 'header.php'; ?>

        </div>

        </section>
        <br><br><br>
        <h1 class="page-title"> SIGN IN</h1>
        <section class="btnsec">
            <br>
            <br>
            <div class="bigcontainer">
                <div class="polaroid">
                    <img src="../images/Admin_icon.png" alt="test"  class="image">
    <div class="middle">
        <a href="SignINAdmin.php"><div class="text">Sign in</div></a>
  </div>
    <div class="container">
     <p>Admin</p>
     </div>
    </div>
                         <div class="polaroid">
                    <img src="../images/customer_icon.png" alt="test"  class="image">
    <div class="middle">
    <a href="SignINCust.php"><div class="text">Sign in</div></a>
  </div>
    <div class="container">
     <p>Customer</p>
     </div>
    </div>
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
