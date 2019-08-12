<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
session_start();

$added = $_SESSION['user'];
$fname=mysqli_real_escape_string($conn, $_POST['firstname']);
$lname=mysqli_real_escape_string($conn, $_POST['lastname']);
$address=mysqli_real_escape_string($conn, $_POST['adress']);
$bdate=mysqli_real_escape_string($conn, $_POST['bday']);
$gender=mysqli_real_escape_string($conn, $_POST['gender']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$phoneno=mysqli_real_escape_string($conn, $_POST['phoneno']);


$sql = "INSERT INTO `customer`(`fname`, `lname`,`email`,`phoneno`,`gender`, `bdate`,`address`,`pdate`,`addedby`,`username`) VALUES('$fname','$lname','$email','$phoneno','$gender','$bdate','$address',NOW(),'$added','offline')";



if($conn->query($sql) === TRUE){
  header("Location: http://localhost/practiceshit/customer/pro.php");
 }
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
?>