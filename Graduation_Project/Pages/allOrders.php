<!DOCTYPE html>
<?php
include "Dbcon.php";

if (isset($_GET['Del']) && $_GET['Del'] != "") {

  $result = mysqli_query($con,"DELETE from requestedoccasion where ROccasion_ID=".$_GET['Del']) or die( mysqli_error($con));
   echo "<script>
                alert('Occasion request has been deleted');
                window.location.href='allOrders.php';
                </script>";

}
if (isset($_GET['Complete']) && $_GET['Complete'] != "") {
  //COccasion_ID	Occasion_Price	Occasion_Date	Occasion_Location	Customer_ID


  $result = mysqli_query($con, "SELECT * from requestedoccasion  where ROccasion_ID=".$_GET["Complete"]);
  $num_rows = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);

  if ($num_rows > 0) {
    mysqli_query($con,"INSERT INTO completedoccasion(Occasion_Price,Occasion_Date,Occasion_Location,Customer_ID)
                values(".$row['Occasion_price'].",'".$row['Occasion_Date']."','".$row['Occasion_Location']."',".$row['Customer_ID'].")");

  mysqli_query($con,"DELETE from requestedoccasion where ROccasion_ID=".$_GET['Complete']);

  }

     // echo "<script>
     //            alert('Occasion request has been deleted');
     //            window.location.href='allOrders.php';
     //            </script>";
}
 ?>
<html>
    <head>
      <!-- <meta http-equiv="refresh" content="3"> -->
        <meta charset="UTF-8">
        <title>Requested Occasion</title>
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
            $result = $con->query("select requestedoccasion.* , customer.Customer_name from requestedoccasion , customer where customer.Customer_ID = requestedoccasion.Customer_ID");
            if ($result->num_rows > 0)
            {
            echo '<h4 style="text-align: center;">All Customer Orders</h4>';
            echo "<table class='tb' align='center'>
                  <tr style='background-color:#163e3a;color:#fff;'>
                  <td>order #</td><td>Customer_name</td><td>Occasion_Type</td><td>Seats_No</td>
                  <td>Cake_flavor</td><td>Clown</td>
                  <td>Theme_color</td><td>Occasion_Date</td>
                  <td>Occasion_price</td><td>Occasion_Location</td><td>Reject</td><td>Complete</td></tr>";
                  while($row = $result->fetch_assoc()) {
                    echo '<tr><td>'.$row["ROccasion_ID"].'</td>
                    <td>'.$row["Customer_name"].'</td>
                    <td>'.$row["Occasion_Type"].'</td>
                    <td>'.$row["Seats_No"].'</td>
                    <td>'.$row["Cake_flavor"].'</td>
                    <td>'.$row["Clown"].'</td>
                    <td>'.$row["Theme_color"].'</td>
                    <td>'.$row["Occasion_Date"].'</td>
                    <td>'.$row["Occasion_price"].'</td>
                    <td>'.$row["Occasion_Location"].'</td>
                    <td>
                      <a href="?Del='.$row["ROccasion_ID"].'" class="btn btn-primary" onclick="return confirm(\'Are you sure?\')">Reject</a>
                    </td>
                    <td>
                      <a href="?Complete='.$row["ROccasion_ID"].'" class="btn btn-primary">Complete</a>
                    </td>
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
