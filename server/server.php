<?php
// initializing variables
$name = "";
$username = "";
$usn = "";
$email    = "";
// $errors = array();
// $success = "";
// $reg_date = date("Y/m/d");


// REGISTER USER
// if (isset($_POST['login_admin'])) {
//   // receive all input values from the form
//   $username = mysqli_real_escape_string($db, $_POST['admin_name']);
//   $email = mysqli_real_escape_string($db, $_POST['admin_email']);
//   $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
//   $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//   // form validation: ensure that the form is correctly filled ...
//   // by adding (array_push()) corresponding error unto $errors array
//   if (empty($username)) { array_push($errors, "Username is required"); }
//   if (empty($email)) { array_push($errors, "Email is required"); }
//   if (empty($password_1)) { array_push($errors, "Password is required"); }
//   if ($password_1 != $password_2) {
//   array_push($errors, "The passwords do not match");
//   }

//   // first check the database to make sure
//   // a user does not already exist with the same username and/or email
//   $user_check_query = "SELECT * FROM admin_info WHERE admin_name='$username' OR admin_email='$email' LIMIT 1";
//   $result = mysqli_query($db, $user_check_query);
//   $user = mysqli_fetch_assoc($result);

//   if ($user) { // if user exists
//     if ($user['admin_name'] === $username) {
//       array_push($errors, "Username already exists");
//     }

//     if ($user['admin_email'] === $email) {
//       array_push($errors, "email already exists");
//     }
//   }

//   // Finally, register user if there are no errors in the form
//   if (count($errors) == 0) {
//     $password = md5($password_1);//encrypt the password before saving in the database

//     $query = "INSERT INTO admin_info (admin_name, admin_email, admin_password)
//           VALUES('$username', '$email', '$password')";
//     mysqli_query($db, $query);
//     $_SESSION['admin_name'] = $username;
//     $_SESSION['admin_email'] = $email;

//     $_SESSION['success'] = "You are now logged in";
//     header('location: ./admin/');
//   }
// }


// email validation 
// if(isset($_Post['add_user'])){
//     $admin_username = $_POST['admin_username'];
//     $query = "SELECT * FROM admin_login WHERE admin_username='$admin_username'";
//     $result = mysqli_query($conn, $query);
//     // $user = mysqli_fetch_assoc($result);
//     if(mysqli_num_rows($result) > 0){
//         echo "Email already exists. Please try another.";
//     }else{
//         echo "It's Available.";
//     }
// }


// NANCY PANDEY
if (isset($_POST['ordertiffin'])) {
  // Sanitize and retrieve form inputs
  $customer_name = mysqli_real_escape_string($conn, $_POST['name']);
  $cust_email = mysqli_real_escape_string($conn, $_POST['email']);
  $cust_mobile = mysqli_real_escape_string($conn, $_POST['phone']);
  $cust_date = mysqli_real_escape_string($conn, $_POST['date']);
  $cust_time = mysqli_real_escape_string($conn, $_POST['time']);
  $count_customer = mysqli_real_escape_string($conn, $_POST['people']);
  $cust_message = mysqli_real_escape_string($conn, $_POST['message']);

  // Insert data into the database
  $query = "INSERT INTO order_tiffin (customer_name, cust_email, cust_mobile, cust_date, cust_time, count_customer, cust_message)
              VALUES ('$customer_name', '$cust_email', '$cust_mobile', '$cust_date', '$cust_time', '$count_customer', '$cust_message')";

  if (mysqli_query($conn, $query)) {
    echo "<script>alert('Tiffin order placed successfully!');</script>";
  } else {
    echo "<script>alert('Error placing tiffin order: " . mysqli_error($conn) . "');</script>";
  }
}
