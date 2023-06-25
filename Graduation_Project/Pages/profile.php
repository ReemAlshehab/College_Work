<!DOCTYPE html>
<?php
include "Dbcon.php";


if (isset($_SESSION["id"])) {
     $sql = "SELECT * from customer where Customer_ID=".$_SESSION["id"];
     $result = mysqli_query($con,$sql);
     $num_rows = mysqli_num_rows($result);
     $row = mysqli_fetch_array($result);

     if ($num_rows > 0) {
       $name =$row["Customer_Name"];
       $phone =$row["Customer_Phone"];
       $email=$row["Customer_Email"];
       $password=$row["password"];
     }
   }


$msg="";
if (isset($_POST["btnUpdate"])) {

      $result=  mysqli_query($con,"UPDATE customer set Customer_Name='".$_POST['cname']."',Customer_Email='".$_POST['cemail']."',
        Customer_Phone=".$_POST['cphone'].",password='".$_POST['pass']."' where Customer_ID=".$_SESSION["id"]);

     if ($result) {

     $msg="Your profile has been update!";
     } else {
       echo "Error: <br>" .  mysqli_error($con);
     }
    }



 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
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




    if(isset($_POST['Signup'])){

	$c_name=$_POST['name'];
	$c_phone=$_POST['phone'];
	$c_em=$_POST['email'];
        $c_pass =$_POST['pass'];



	$sql = "INSERT INTO customer (Customer_name, Customer_phone, Password,Customer_email)
VALUES ('$c_name', '$c_phone' ,'$c_pass','$c_em')";

	$result=mysqli_query($con, $sql);


if ($result) {
 	echo "<p>"."<h3>"."created new account successfully"."</p>"."</h3>"."<br>";
        header("location: SignINCust.php");
	}
        else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}}
?>
        <main>
            <br><br><br>
            <div class="signform">
                <h1 class="page-title">My Profile</h1>
                <form method="POST">
                    <label for="name">Name:</label><br>
                    <input type="text" name="cname" id="cname" value="<?=$name; ?>" class="formtxtbx" required><br>
                    <label for="email">Email:</label><br>
                    <input type="email" name="cemail" id="cemail" value="<?=$email; ?>" class="formtxtbx" required><br>
                    <label for="phone">Phone:</label><br>
                    <input type="tel" id="cphone" class="formtxtbx" value="<?=$phone; ?>" name="cphone" pattern="[0-9]{9}}" placeholder="555555555" required><br>
                    <label for="pass">Password:</label><br>
                    <input type="password" id="pwd" name="pass" class="formtxtbx" required><br>
                    <p style="color:green;"><?php echo $msg; ?></p>
                    <br><br><br>
                    <input type="submit" value="Update" name="btnUpdate" class="bttn">
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
