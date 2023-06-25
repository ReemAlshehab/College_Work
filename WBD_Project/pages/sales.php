
<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 * 
 */
// Define DataBase connection ...... 
$host = "localhost";
$user = "root";
$password = "";
$db = "wbd_project";
session_start();
// Make the Connection ......
$con = mysqli_connect($host, $user, $password, $db);

//verfiy the Connection
if (mysqli_connect_errno()) {
    echo "Connection Error:" . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sales</title>
        <link rel="stylesheet" href="../style/style.css" />
        <link href="https://fonts.googleapis.com/css2?family=poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
         <?php
$id=$_SESSION['id'];
  ?>
        <div class="header"> 
            
        <div class="container">
       <!-- nav -->
        <div class="navbar">
            <div class="logo">
                <img src="../images/cu.png" width="100px">
                
            </div>
            <nav>
                <ul>
                    <li><a href="FarmerH.html">Home</a></li>
                   
                   <li><a href="addproduct.php">products</a></li>
                   <li><a href="profileF.php">Profile</a></li>
                   <li><a href="logout.php">Log out</a></li>
                </ul>
            </nav>

        </div>
       <div class="profile">
       <table border="1">
<caption> Orders Information</caption>
<br><br>
		<tr>
			<th> ID </th>
			<th> Product name </th> 
			<th> Inventory </th>
                        <th>price</th>
			<th> Delete </th>
		</tr>
<?php
        
    //to delete 
	if(isset($_POST['Delete'])){
		$sql="DELETE FROM products WHERE p_id='$_POST[pid]'";
		$result = mysqli_query($con,$sql)or die(mysqli_error($con));
	}	 
// to retrieve the orders
	$sql ="SELECT * FROM products WHERE f_id = '$id'";
	$result=mysqli_query($con,$sql);
	while($rows=mysqli_fetch_array($result)) { 
		echo "<form method='POST'>"; ?>
		<tr >
                    <td name="pid"> <input type="text" name="pid" value="<?php echo $rows['p_id'];?>" readonly> </td>
                        <td>  <?php echo $rows['productname'];?></td>
			<td>  <?php echo $rows['Inventory'];?> </td>
                        <td>  <?php echo $rows['Price'];?> </td>
			<td> <input type="submit" name="Delete" value="Delete" class="btn"> </td>
		</tr>
		</form>
 <?php }
	mysqli_close($con);
?>
	
 </table>
        </div>
            
        </div>
        </div>
                <div class="footer" id="contactus">
        <div class="footer" id="contactus">
            <ul>
                <li><a href="https://www.facebook.com/"><img src="../images/facebook.png" alt="facebook"/>Facebook</a></li>
                <li><a href="https://twitter.com/"><img src="../images/twitter.png" alt="twitter"/>Twitter</a></li>
                <li><a href="https://www.instagram.com/"><img src="../images/instagram.png" alt="instagram"/>Instagram</a></li>
                <li><a href="https://www.youtube.com/"><img src="../images/youtube.png" alt="youtube"/>Youtube</a></li>
                <li><a href="mailto:cucumber@cu.com"><img src="../images/mail.png" alt="mail"/>Email</a></li>
                <li><a href="https://www.linkedin.com/"><img src="../images/linkedin.png" alt="linkedin"/>LinkedIn</a></li>
            </ul>
            <br>
            <br>
            <br>
            <p>All rights reserved. Designed by <a href="#">CS4</a></p>
        </div>
    </body>
</html>

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

