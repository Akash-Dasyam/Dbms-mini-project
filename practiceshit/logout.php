<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";
 
//Creating connection for mysqli
$conn = new mysqli($server, $user, $pass, $dbname);
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
session_start();
$added = $_SESSION['user'];
if ($added = 'admin'){
$sqli = mysqli_query($conn,"delete from console_log");
}
else{
$sqli = mysqli_query($conn,"delete from console_log where action !='New online customer registered!' OR action !='New order added'");
}
	
session_destroy();
header('Location: http://localhost/practiceshit/intro.php');
exit;
?>