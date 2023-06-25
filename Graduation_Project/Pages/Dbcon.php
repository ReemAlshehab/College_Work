<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "party_planning";
session_start();
// Make the Connection ......
$con = mysqli_connect($host, $user, $password, $db);

//verfiy the Connection
if (mysqli_connect_errno()) {
    echo "Connection Error:" . mysqli_connect_error();
}


 ?>
