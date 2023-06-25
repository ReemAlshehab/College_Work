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
            margin:10% auto;
            height: 100vh;
          }
          main a{
            text-decoration: none;
            color:#000;
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
            <h1 class="page-title">Welcome <?php echo  $_SESSION["name"]; ?></h1>
          <p>Customer Dashboard</p>
          <table align="center">
              <tr>
                <td>
                  <div style="background-color:#DCDCDC;">
                    <img src="../images/orders.png" alt="Gold Package" width="300px" height="300px"><br>
                    <a href="myOrders.php"><b>Requested Occasions</b></a><br>
                    <!-- <span>my previ</span> -->
                  </div>
                </td>
                <td>
                  <div style="background-color:#DCDCDC;">
                    <img src="../images/payment.png" alt="Silver Package" width="300px" height="300px"><br>
                    <a href="payment.php"><b>Payments</b><br></a>

                  </div>
                </td>
                <td>
                  <div style="background-color:#DCDCDC;">
                    <img src="../images/Complete.png" alt="Silver Package" width="300px" height="300px"><br>
                    <a href="myCOrders.php"><b>Completed Occasions</b><br></a>
                  </div>
                </td>
              </tr>
          </table>
        </main>
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
