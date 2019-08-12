<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";
session_start();
//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);
$added = $_SESSION['cust'];
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}

$sqli="SELECT id FROM oc where  username = '$added'";
$resulti=mysqli_query($conn,$sqli);
$rowi=mysqli_fetch_array($resulti);
$id2=$rowi["id"];

$sql="SELECT id FROM customer where  username = '$added'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$id=$row["id"];


$fname=mysqli_real_escape_string($conn, $_POST['firstname']);
$lname=mysqli_real_escape_string($conn, $_POST['lastname']);
$address=mysqli_real_escape_string($conn, $_POST['adress']);
$bdate=mysqli_real_escape_string($conn, $_POST['bday']);
$gender=mysqli_real_escape_string($conn, $_POST['gender']);
$email=mysqli_real_escape_string($conn, $_POST['email']);
$pswd = mysqli_real_escape_string($conn, $_POST['password']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
if(isset($_POST["submit"]))
{
mysqli_query($conn,"update customer set fname = '$fname' where id='$id'");
mysqli_query($conn,"update customer set lname = '$lname' where id='$id'");
mysqli_query($conn,"update orders set fname = '$fname' where cid='$id'");
mysqli_query($conn,"update orders set lname = '$lname' where cid='$id'");
mysqli_query($conn,"update customer set address = '$address' where id='$id'");
mysqli_query($conn,"update customer set bdate = '$bdate' where id='$id'");
mysqli_query($conn,"update customer set gender = '$gender' where id='$id'");
mysqli_query($conn,"update customer set email = '$email' where id='$id'");

mysqli_query($conn,"update oc set password = '$pswd' where id='$id2'");
mysqli_query($conn,"update oc set email = '$email' where id='$id2'");


header("Location: http://localhost/practiceshit/Custside/cust/custprofile.php"); 
}
if(isset($_POST["submit2"]))
{
	mysqli_query($conn,"update customer set username = '$username' where id='$id'");
	mysqli_query($conn,"update oc set username = '$username' where id='$id2'");
	header("Location: http://localhost/practiceshit/Custside/custlogin.php"); 

	}
$conn->close();
?>
