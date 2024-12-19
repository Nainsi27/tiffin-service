<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "tiffin_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
// if ($con) {
//     echo "success";
// } else {
//     die("Error: " . mysqli_connect_error());
// }
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// if($conn){
//     echo "success";
// }else{
//     die("Error:" . mysqli_connect_error());
// }
$emailid = "nainsi.pandey@jaipuria.ac.in";
$emailpass = "Lucent@12345";
