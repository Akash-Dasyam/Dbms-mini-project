<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";

session_start();
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}


$supplier=mysqli_real_escape_string($conn, $_POST['Supplier']);
$address=mysqli_real_escape_string($conn, $_POST['address']);
$item=mysqli_real_escape_string($conn, $_POST['item']);
$quantity=mysqli_real_escape_string($conn, $_POST['quantity']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$phoneno=mysqli_real_escape_string($conn, $_POST['phoneno']);
$added = $_SESSION['user'];
$sql = "INSERT INTO `supplies`( `supplier`,`phoneno`,`email`, `address`, `item`, `quantity`, `date`,`addedby`) VALUES ('$supplier','$phoneno','$email','$address','$item','$quantity',NOW(),'$added')";

$sqlm="UPDATE `product` SET `stock`=`stock`+'$quantity' where name='$item'";
if(($conn->query($sql) === TRUE)AND($conn->query($sqlm) === TRUE)){
 header("Location: http://localhost/practiceshit/supplier/supplier.php"); // Redirecting to other page
 }
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}

$conn->close();
?>