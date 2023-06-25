<!DOCTYPE html>
<?php
include "Dbcon.php";

$min = 1;
$max = 1;
$price = 0;
$total = 0;
if (!isset($_POST["otype"])) {
    header("location:Occasion.php");
} else {
    $total = $_POST["price"];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout</title>
        <link rel="stylesheet" href="../style/style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
        <style>
            main{
                padding: 5%;
            }
            body{
                background-image: url('../images/bg2.jpg');
                background-size: cover;
                background-position: center;
                /* padding: 5%; */
            }
            .footer{
                bottom: 0px;
            }
            .signform{
                margin-bottom: 15%;
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
        if (isset($_POST['btnOrder'])) {
            //ROccasion_ID,Occasion_Type,Seats_No,Cake_flavor,Clown,Theme_color,Occasion_Date,Occasion_price,Occasion_Location,Customer_ID,
            $clown = 0;
            if ($_POST['clown'] > 0) {
                $clown = 1;
            }
            $sql = "INSERT INTO requestedoccasion(Occasion_Type,Seats_No,Cake_flavor,Clown,Theme_color,Occasion_Date,Occasion_price,Occasion_Location,Customer_ID)
        VALUES ('" . $_POST['otype'] . "'," . $_POST['sno'] . ",'" . $_POST['cake'] . "'," . $clown . ",'" . $_POST['theme'] . "','" . $_POST['odate'] . "'," . $_POST['price'] . ",'" . $_POST['location'] . "'," . $_SESSION['id'] . ")";

            $result = mysqli_query($con, $sql);

            if ($result) {
                $c_id =$_SESSION['id'];
                $ptotal=$_POST['total'];
                $paymentType = $_POST['ptype'];
                $info = "Card holder name:" . $_POST['cname'] . "</br>Card Number:" . $_POST['cno'] . "<br>Card Expiration Date:" . $_POST['cdate'];
                $sql = "INSERT INTO payment(payment_type,payment_information,payment_amount,customer_ID)
          VALUES (' $paymentType ',' $info ','$ptotal','$c_id')";
                mysqli_query($con, $sql);

                echo "<p>" . "<h3>" . "checkout successfully" . "</p>" . "</h3>" . "<br>";
                header("location: CustomerHome.php");
            } else {
                echo "Error: " . mysqli_error($con);
            }
        }
        ?>
        <main>
            <div class="signform">
                <h1 class="page-title">Occasion Summary</h1>
                <form method="POST" method="checkout.php">
                    <label for="otype">Occasion Type:</label><br>
                    <input type="text" name="otype" id="otype" class="formtxtbx" value="<?php echo $_POST["otype"]; ?>" readonly><br>
                    <label for="sno">Seat No:</label><br>
                    <input type="number" name="sno" id="sno" class="formtxtbx" value="<?php echo $_POST["sno"]; ?>" readonly><br>
                    <label for="cake">Cake Flavor:</label><br>
                    <input type="text" name="cake"  class="formtxtbx" value="<?php echo $_POST["cake"]; ?>" readonly><br>
                    <label for="theme">Theme Color:</label><br>
                    <input type="color" name="theme"  class="formtxtbx"value="<?php echo $_POST["theme"]; ?>" readonly><br>
                    <label for="cake">Occasion Date:</label><br>
                    <input type="text" class="formtxtbx" name="odate" value="<?php echo $_POST["odate"]; ?>" readonly><br>
                    <label for="location">Occasion location:</label><br>
                    <input type="text" name="location"  class="formtxtbx" value="<?php echo $_POST["location"]; ?>" readonly><br>
                    <label for="price">Occasion price:</label><br>
                    <input type="text" name="price" value="<?php echo $_POST["price"]; ?>" readonly  class="formtxtbx"><br>

                    <label for="clown">Clown Price:</label><br>
                    <input type="text" name="clown" value="<?php if (isset($_POST["clown"])) {
            echo "2000";
            $total = $_POST["price"] + 2000;
        } else {
            echo "0";
        } ?>" class="formtxtbx" readonly><br>
                    <br>
                    <hr>
                    <label for="Total">Total:</label><br>
                    <input type="text" name="total" value="<?php echo $total; ?>" class="formtxtbx" readonly><br>

                    <p style="color:#41baae;"><b><?php //echo "Total: ".$total." S.R";  ?><b></p>

                                <div class="Payment">
                                    <h2>Payment</h2>
                                    <div class="pradio">
                                    <input type="radio" id="mastercard" name="ptype" value="MasterCard" >
                                    <label for="mastercard"><img src="../images/mastercard_icon.png" width="100px"></label><br>
                                    <input type="radio" id="mada" name="ptype" value="Mada">
                                    <label for="mada"><img src="../images/mada_icon.png" width="100px" ></label><br>
                                    <input type="radio" id="visa" name="ptype" value="VISA">
                                    <label for="visa"><img src="../images/visa_icon.png" width="100px" ></label>
                                    </div>
                                                          <!--<img src="../images/payments-cards.png" width="300px">--><br>
                                    <label >Card holder name:</label><br>
                                    <input type="text" name="cname" class="formtxtbx" required>
                                    <br>
                                    <label >Card Number:</label><br>
                                    <input type="tel" inputmode="numeric" name="cno" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" class="formtxtbx" required>
                                    <br>
                                    <label >Expiration Date:</label><br>
                                    <input type="month" name="cdate" id="cdate" maxlength="5" min="<?= date('Y-m'); ?>" class="formtxtbx" placeholder="yaer/month" required>
                                    <br>
                                    <label >CVC Code:</label><br>
                                    <input type="password" name="cv" class="formtxtbx" required placeholder="123"><br><br>
                                    <br>
                                </div>

                                <input type="submit" value="Checkout" name="btnOrder" class="bttn">
                                </form>
                                </div>
                                <br><br><br>
                                </main>

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
