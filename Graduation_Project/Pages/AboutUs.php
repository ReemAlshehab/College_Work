<!DOCTYPE html>
<?php
include "Dbcon.php";
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="../style/style.css"" type="text/css">
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
        <section class="aboutsec">
            <br><br><br><br>

            <div class="aboutus" id="aboutId">
                <h1 class="page-title">ABOUT US</h1>
            <img src="../images/aboutuspic.png" alt="eventPicture"/>
            </div>
            <div class="aboutuspara">
                <h1>OUR <br>SCOPE</h1>

                <div><p>This space is a great opportunity to plan any coming occasion from the event theme to the buffet,
                    cake, photographers, invitations. Whatever you need we are sure we can help you whether you are
                    planning a wedding, birthday party, small or big event.
                    Our main goal to make party planning a fun and easy job. If you are a designer and interested in out website you can easily sign up and upload your packages,
                    price them, manage them. So whether you are a designer or customer we sure have your back! </p></div><img src="../images/aboutuspic2.png" alt="cake"/>

            </div>
        </section>

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
