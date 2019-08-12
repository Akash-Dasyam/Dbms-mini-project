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
	
session_destroy();
header('Location: http://localhost/practiceshit/intro.php');
exit;
?>