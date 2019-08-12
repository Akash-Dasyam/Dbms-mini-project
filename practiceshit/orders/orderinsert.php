<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";
$error = '';
//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);
session_start();
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
$fname=mysqli_real_escape_string($conn, $_POST['firstname']);
$lname=mysqli_real_escape_string($conn, $_POST['lastname']);
$item=mysqli_real_escape_string($conn, $_POST['item']);
$quantity=mysqli_real_escape_string($conn, $_POST['quantity']);
$added = $_SESSION['user'];

$sqli = mysqli_query($conn,"SELECT * from customer where fname='$fname' AND lname='$lname'");
$sqlir= mysqli_num_rows($sqli);
if($sqlir === 0)
{
header("Location: http://localhost/practiceshit/orders/orders.php?registered=true");	
}
else{
	$price = mysqli_query($conn,"SELECT id FROM customer WHERE fname = '$fname' AND lname='$lname' ");
	$cidi= mysqli_fetch_array($price);
	$cid = $cidi['id'];

	if(isset($_POST['del'])){
	$sql = "INSERT INTO `orders`(`cid`,`item`, `quantity`,`date`, `addedby`) VALUES('$cid','$item','$quantity',NOW(),'$added')";
	}
	else{
	$sql = "INSERT INTO `orders`(`cid`,`item`, `quantity`,`date`,`delivery`,`addedby`) VALUES('$cid','$item','$quantity',NOW(),'NO','$added')";
	}
	$sqlm="UPDATE `product` SET `stock`=`stock`-'$quantity',`bought`=`bought`+'$quantity' where name='$item'";
if(($conn->query($sql) === TRUE)AND($conn->query($sqlm) === TRUE)){
  header("Location: http://localhost/practiceshit/orders/orders.php");
	}
else
	{
 echo "Error" . $sql . "<br/>" . $conn->error;
	}
}
$conn->close();
?>