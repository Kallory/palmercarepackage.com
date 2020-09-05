<?php
$servername = "localhost";
$username = "root";
$password = "Heather23";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//debugging info
//echo "Connected successfully";
//echo nl2br("\n");

echo "<script type='text/javascript'>console.log('Connected successfully')</script>";

// select database
$select_db = mysqli_select_db($conn, 'heathercarepackage');
if (!$select_db){
    die("Database Selection Failed".mysqli_error($connection));
}
?>