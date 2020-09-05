<?php
require('db_connect.php');


// get username
$username = $_POST['uname'];

// get password
$pw = $_POST['psw'];

// debugging info
//echo "username: ".$name;
//echo nl2br("\n");
//echo "password: ".$pw;

$query = "SELECT * FROM user_login WHERE username='$username' and Password='$pw'";

$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);

if ($count != 1){
    echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
    //echo "Invalid Login Credentials";
}


?>