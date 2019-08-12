<?php
session_start();
$added = $_SESSION['cust'];
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

$item=mysqli_real_escape_string($conn, $_POST['item']);
$quantity=mysqli_real_escape_string($conn, $_POST['quantity']);

$sql="SELECT id FROM customer where  username = '$added'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$cid = $row["id"];



	if(isset($_POST['del'])){
	$sql = "INSERT INTO `orders`(`cid`,`item`, `quantity`,`date`, `addedby`) VALUES('$cid','$item','$quantity',NOW(),'online')";
	}
	else{
	$sql = "INSERT INTO `orders`(`cid`, `item`, `quantity`,`date`,`delivery`,`addedby`) VALUES('$cid','$item','$quantity',NOW(),'NO','online')";
	}
	

	$sqlm="UPDATE `product` SET `stock`=`stock`-'$quantity',`bought`=`bought`+'$quantity' where name='$item'";
	
	
if(($conn->query($sql) === TRUE)AND($conn->query($sqlm) === TRUE)){
  header("Location: http://localhost/practiceshit/Custside/cust/custord.php");
	}
else
	{
  die("Error: " . mysqli_error($conn));
	}

$conn->close();
?>