<?php
$error=''; //Variable to Store error message;
session_start();
if(isset($_POST['submit'])){

	  //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "demo");
 //Define $user and $pass
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password=mysqli_real_escape_string($conn, $_POST['password']);
 
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM manager WHERE username='$username' AND Pass='$password'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
	 $_SESSION['user'] = $username;
	header("Location: http://localhost/practiceshit/customer/customer.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username or Password is Invalid.Sign up if you are a new user!";
 }
 mysqli_close($conn); // Closing connection
 
 }

?>