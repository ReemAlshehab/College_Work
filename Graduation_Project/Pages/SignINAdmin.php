<!DOCTYPE html>
<?php
include "Dbcon.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SignIn</title>
        <link rel="stylesheet" href="../style/style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    </head>
    <?php
    if (isset($_POST['Signin'])) {


        $a_em = $_POST['email'];
        $a_pass = $_POST['pass'];

        $sql = "SELECT * FROM admin WHERE Admin_Email = '$a_em' and Password = '$a_pass'" or die("Failed to query database" . mysqli_errno());

        $result = mysqli_query($con, $sql);

        $num_rows = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        
        if ($num_rows > 0) {
              $_SESSION["utype"] = "Admin";
              $_SESSION["id"] = $row['Admin_ID'];
              $_SESSION["name"] = $row['Admin_Name'];
            header("location: AdminHome.php");
        } else {
            echo "Error" . $sql . "<br>" . mysqli_error($con);
        }
    }
    ?>
    <body>
        <section class="header">

            <div class="navbar">

                <nav>
          <?php include 'header.php'; ?>
                </nav>

            </div>

        </section>
        <section class="signpage">
            <br><br><br>
            <div class="signform">
                <h1>SIGN   IN</h1>
                <form method="POST">
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="cemail" class="formtxtbx" required><br>
                    <label for="pass">Password:</label><br>
                    <input type="password" id="pwd" name="pass" class="formtxtbx" required><br>
                    <br><br><br>
                    <input type="submit" value="Sign in" name="Signin" class="bttn">
                </form>
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

