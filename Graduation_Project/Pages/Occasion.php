<!DOCTYPE html>
<?php
include "Dbcon.php";
?>
<html>
    <head>
        <!-- <meta http-equiv="refresh" content="3"> -->
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="../style/style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@300;400;900&display=swap" rel="stylesheet">
        <style>
            main{
                margin: 5% auto;
                padding: 5%;
            }
            main a{
                text-decoration: none;
                color:#aa867a;
            }
        </style>
    </head>
    <body>
        <section class="header">

            <div class="navbar">

                <?php include 'header.php'; ?>
            </div>

        </section>
        <!-- <section class="home">

        </section> -->
        <main>
            <h1 class="page-title">Welcome <?php echo $_SESSION["name"]; ?></h1>
            <h3>Please choose your Package</h3>

 <div class="bigcontainer2">
                <div class="polaroid">
                    <img src="../images/gold.jpg" alt="Gold Package" class="image">
                    <div class="middle">
                        <a href="order.php?Package=Gold"><div class="text">Choose</div></a>
                    </div>
                    <div class="container">
                        <br><b class="package-title">Gold Package</b><br>
                        <span>80-100 Guests</span>
                    </div>
                </div>
                <div class="polaroid">
                    <img src="../images/silver.jpg" alt="Gold Package" class="image">
                    <div class="middle">
                        <a href="order.php?Package=Silver"><div class="text">Choose</div></a>
                    </div>
                    <div class="container">
                        <br><b class="package-title">Silver Package</b><br>
                        <span>50-79 Guests</span>
                    </div>
                </div>
            </div><!-- first row -->
            <div class="bigcontainer2">
                                <div class="polaroid">
                    <img src="../images/bronze.jpg" alt="Gold Package" class="image">
                    <div class="middle">
                        <a href="order.php?Package=Bronze"><div class="text">Choose</div></a>
                    </div>
                    <div class="container">
                        <br><b class="package-title">Bronze Package</b><br>
                        <span>20-49 Guests</span>
                    </div>
                </div>
                <div class="polaroid">
                    <img src="../images/service.jpg" alt="Gold Package" class="image">
                    <div class="middle">
                        <a href="order.php?Package=Service"><div class="text">Choose</div></a>
                    </div>
                    <div class="container">
                        <br><b class="package-title">Service Package</b><br>
                        <span>Under 20 Guests</span>
                    </div>
                </div>
            </div>


        </main>

        <?php
        // put your code here
        ?>

        <div class="footer" id="contactus">
            <ul>
                <li><a href="#"><img src="../images/Facebook.png"width="35px"  alt="facebook"/></a></li>
                <li><a href="#"><img src="../images/Twitter.png"width="35px"  alt="twitter"/></a></li>
                <li><a href="#"><img src="../images/Instagram.png" width="35px" alt="instagram"/></a></li>
                <li><a href="#"><img src="../images/Youtube.png"width="35px"  alt="youtube"/></a></li>
                <li><a href="#"><img src="../images/Email.png" width="35px" alt="mail"/></a></li>
                <li><a href="#"><img src="../images/Linkedin.png"width="35px"  alt="linkedin"/></a></li>
            </ul>
            <br>
            <br>
            <p>All rights reserved. Designed by <a href="#">Group 4</a></p>
        </div>

    </body>
</html>
