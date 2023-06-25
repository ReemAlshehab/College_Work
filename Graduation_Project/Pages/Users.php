<!DOCTYPE html>
<?php
include "Dbcon.php";
if (isset($_GET['Del']) && $_GET['Del'] != "") {

  $result = mysqli_query($con,"DELETE from customer where Customer_ID=".$_GET['Del']) or die( mysqli_error($con));
   echo "<script>
                alert('User has been deleted');
                window.location.href='allOrders.php';
                </script>";

}
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
            $result = $con->query("SELECT * FROM customer");
            if ($result->num_rows > 0)
            {
            echo '<h4 style="text-align: center;">Users</h4>';
            echo "<table class='tb' align='center'>
                  <tr style='background-color:#163e3a;color:#fff;'>
                  <td>Customer_ID</td><td>Customer_name</td><td>Customer_Phone</td>
                  <td>Customer_Email</td><td>Delete</td></tr>";
                  while($row = $result->fetch_assoc()) {
                    echo '<tr><td>'.$row["Customer_ID"].'</td>
                    <td>'.$row["Customer_Name"].'</td>
                    <td>'.$row["Customer_Phone"].'</td>
                    <td>'.$row["Customer_Email"].'</td>
                    <td><a href="?Del='.$row["Customer_ID"].'" class="btn btn-primary" onclick="return confirm(\'Are you sure?\')">Delete</a></td>
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
