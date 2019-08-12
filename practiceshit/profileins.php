<html>
<body>
<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";
$conn = new mysqli($server, $user, $pass, $dbname);
session_start();
$added = $_SESSION['user'];
$email1 = mysqli_real_escape_string($conn, $_POST['email']);
$pswd2 = mysqli_real_escape_string($conn, $_POST['password']);
if(isset($_POST["submit1"]))
{
mysqli_query($conn,"update manager set email = '$email1' where username='$added'");
mysqli_query($conn,"update manager set Pass = '$pswd2' where username='$added'");
header("Location:http://localhost/practiceshit/profile.php ");

}
else{
echo "failure";
}

?>
</body>
</html>