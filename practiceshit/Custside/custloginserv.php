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
 $query = mysqli_query($conn, "SELECT * FROM oc WHERE username='$username' AND password='$password'");
 
 
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
	 $_SESSION['cust'] = $username;
	 $added=$_SESSION['cust'];
	 
	 $sql="SELECT * FROM customer where  username = '$added'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$id=$row["id"];
	$_SESSION['cid'] = $id;
	
	 $sqli="SELECT * FROM oc where  username = '$added'";
	$resulti=mysqli_query($conn,$sqli);
	$rowi=mysqli_fetch_array($resulti);
	$id2=$rowi["id"];
	$_SESSION['id1'] = $id2;
	
	header("Location: http://localhost/practiceshit/Custside/cust/custord.php"); // Redirecting to other page
 }
 else
 {
 $error = "Email or Password is Invalid.Sign up if you are a new user!";
 }
 mysqli_close($conn); // Closing connection
 
 }

 
?>