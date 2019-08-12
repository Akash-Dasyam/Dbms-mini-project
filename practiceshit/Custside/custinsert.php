<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";
$error='';
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
$fname=mysqli_real_escape_string($conn, $_POST['firstname']);
$lname=mysqli_real_escape_string($conn, $_POST['lastname']);
$address=mysqli_real_escape_string($conn, $_POST['adress']);
$bdate=mysqli_real_escape_string($conn, $_POST['bday']);
$gender=mysqli_real_escape_string($conn, $_POST['gender']);
$phoneno=mysqli_real_escape_string($conn, $_POST['phoneno']);
$id = uniqid();
$queryi = mysqli_query($conn, "SELECT * FROM oc WHERE username='$username'");
$rows = mysqli_num_rows($queryi);
 if($rows == 1){
$error = "username not available";
 }
 else{
$sql = "INSERT INTO oc VALUES ('$id','$email', '$pswd','$username')";
$sqlm = "INSERT INTO `customer`(`fname`, `lname`,`phoneno`,`email`, `gender`, `bdate`,`address`,`pdate`,`addedby`,`username`) VALUES('$fname','$lname','$phoneno','$email','$gender','$bdate','$address',NOW(),'online','$username')";
 
if(($conn->query($sql) === TRUE)AND($conn->query($sqlm) === TRUE)){
 $error="success";
 header("Location:http://localhost/practiceshit/Custside/custsign1.php?registered=true"); // Redirecting to other page
 
 }
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$conn->close();
}
}
?>