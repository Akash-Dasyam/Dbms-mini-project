<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";
$error = '';
//Creating connection for mysqli
if(isset($_POST['submit'])){
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection

if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
 
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pswd = mysqli_real_escape_string($conn, $_POST['password']);
$username = mysqli_real_escape_string($conn, $_POST['username']);

$queryi = mysqli_query($conn, "SELECT * FROM manager WHERE username='$username'");
$rows = mysqli_num_rows($queryi);
 if($rows == 1){
$error = "username not available";
 }
 else{
$sql = "INSERT INTO manager VALUES ('$email', '$pswd','$username')";
 
if($conn->query($sql) === TRUE){
 header("Location: http://localhost/practiceshit/signup/signup.php?registered=true"); // Redirecting to other page
 }
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
 }
 mysqli_close($conn);
}
?>