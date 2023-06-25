<!DOCTYPE html>
<?php
include "Dbcon.php";

 ?>
<html>
    <head>
      <!-- <meta http-equiv="refresh" content="3"> -->
        <meta charset="UTF-8">
        <title>Completed Occasion</title>
        <link rel="stylesheet" href="../style/style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@300;400;900&display=swap" rel="stylesheet">
        <style>
          main{
            background-image: url('../images/bg2.jpg');
            background-size: cover;
            padding: 5%;
            margin-top: 5%;
          }
          main a{
            text-decoration: none;
            color:#aa867a;
          }
          .tb{
            width: 100%;
            border: 1px solid #998;
            background-color: #fff;
          }
          .tb td{
            border: 1px solid #998;
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
          <!-- <h3>Please Previous Orders</h3> -->
          <?php
            $result = $con->query("select completedoccasion.*,customer.Customer_name from completedoccasion ,customer where customer.Customer_ID = completedoccasion.Customer_ID");
            if ($result->num_rows > 0)
            {
            echo '<h4 style="text-align: center;">All Completed Orders</h4>';
            echo "<table class='tb' align='center'>
                  <tr style='background-color:#163e3a;color:#fff;'>
                  <td>order #</td><td>Customer_name</td><td>Occasion_Date</td>
                  <td>Occasion_price</td><td>Occasion_Location</td></tr>";
                  while($row = $result->fetch_assoc()) {
                    echo '<tr><td>'.$row["COccasion_ID"].'</td>
                    <td>'.$row["Customer_name"].'</td>
                    <td>'.$row["Occasion_Date"].'</td>
                    <td>'.$row["Occasion_Price"].'</td>
                    <td>'.$row["Occasion_Location"].'</td>
                    </tr>';

                    }
                    echo '</table>';
            }
        ?>
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
