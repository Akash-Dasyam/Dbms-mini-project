<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";

include("C:\/xampp\htdocs\practiceshit\css.php");
$logout= "http://localhost/practiceshit/logout.php";
$log   = "http://localhost/practiceshit/log.php";
$link4 = "http://localhost/practiceshit/supplier/supplier.php";
$link3 = "http://localhost/practiceshit/orders/orders.php";
$link2 = "http://localhost/practiceshit/ret.php";
$link1 = "http://localhost/practiceshit/customer/customer.php";

//Creating connection for mysqli
$conn = new mysqli($server, $user, $pass, $dbname);
session_start();
$added = $_SESSION['user'];
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
?>
<?php
if($added === 'admin'){  
 $cust = mysqli_query($conn,"select * from customer");
 $custr = mysqli_num_rows($cust);
 $cust1 = mysqli_query($conn,"select * from orders");
 $custr1 = mysqli_num_rows($cust1);
 $cust2 = mysqli_query($conn,"select * from supplies");
 $custr2 = mysqli_num_rows($cust2);
 $cust3 = mysqli_query($conn,"select * from manager");
 $custr3 = mysqli_num_rows($cust3);
 
 }
else{
 $cust = mysqli_query($conn,"select * from customer where addedby='$added'");
 $custr = mysqli_num_rows($cust);
  $cust1 = mysqli_query($conn,"select * from orders where addedby='$added'");
 $custr1 = mysqli_num_rows($cust1);
 $cust2 = mysqli_query($conn,"select * from supplies where addedby='$added'");
 $custr2 = mysqli_num_rows($cust2);
 $custr3 = 'Administrator only';
}
?>
<?php
$sql="SELECT * FROM manager where  username = '$added'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

$username = $row["username"];
$email = $row["email"];
$pswd  = $row["Pass"];
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Supplier base</title>
</head>
<style>
.bg{
	height:200%;
	width:100%;
	background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);
	opacity:1.0;
}
input[type=text],[type=date],[type=time],[type=number],[type=email],[type=password],select {
    width: 45%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

	
}
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

 td, th {
    border: 1px solid #ddd;
    padding: 8px;
	text-align:center;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
	text-align:center;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
	text-align:center;
   background-color: green;
    color: white;
	width:50%;
}
.form2{
	position: absolute;
    top:  90%;
    left: 50%;
    transform: translate(-50%,-50%);
	width:70%;
	border-radius: 5px;
    background-color:white;
    padding: 20px;
	opacity:0.99;
	padding-bottom:10px;
	width:90%;
	overflow-x:auto;
	}
	.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   font-style: italic;
   height: 50px;
   text-align: center;
}
input[type=submit],[type=reset] {
    width: 30%;
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	-webkit-align-items: center;
	

}

input[type=submit]:hover,[type=reset]:hover {
    background-color: red;
}


</style>
<body style="background-color:black;">
<div class="bg">
<div class="form1">
<ul>
  <li><a href='<?php echo $link1; ?>'>Create a new Customer</a></li>
  <li><a href='<?php echo $link2; ?>'>Display/Delete </a></li>
  <li><a href='<?php echo $link3; ?>' >Orders</a></li>
  <li><a href='<?php echo $link4; ?>' >Supplies</a></li>
  <li><a href='<?php echo $link5; ?>' >Messages</a></li>
  <li style="float:right;"><a class="active" href="#"><?php echo $added; ?></a></li>
</ul>
</div>
<div class="form2">
<form method="POST" action="profileins.php">
<p style="text-align:center;font-size:30px;">STATS</p>
	<label for="email">E-mail:</label></br>
    <input type="email" id="email" name="email" placeholder="Your email.." autocomplete="off" value='<?php echo $email; ?>'></br>
	
	<label for="password">Password:</label></br>
    <input type="text" id="password" name="password" placeholder="password"  autocomplete="off" value='<?php echo $pswd; ?>'></br>
	<!----<a href="project.html" class="bttn">Login</a>--->
	<input type="submit" value="Save new info" name="submit1" ></br>
</form>
<form method="POST">
  <?php
  echo"<table border=1>";
	echo "<tr>";
		echo "<th>"; echo "Name of manager:"; echo "</th>";
		echo "<td>"; echo $added; echo "</td>";	
	echo "</tr>";
	echo "<tr>";
		echo "<th>"; echo "No of Customers added:"; echo "</th>";
		echo "<td>"; echo $custr; echo "</td>";	
	echo "</tr>";	
	echo "<tr>";
		echo "<th>"; echo "No of orders added:"; echo "</th>";
		echo "<td>"; echo $custr1; echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>"; echo "No of Supply records:"; echo "</th>";
		echo "<td>"; echo $custr2; echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<th>"; echo "TOTAL managers:"; echo "</th>";
		echo "<td>"; echo ($custr3); echo "</td>";
	echo "</tr>";
	echo"</table>";
	if($added === 'admin'){ 
	echo "<input type='submit'  name='display' value='All managers'>";echo "</br>";
	}
	
	if(isset($_POST["display"]))
	{
	$sqli = mysqli_query($conn,"select * from manager");
	echo"<table border=1>";
	echo "<tr>";
		echo "<th>"; echo "Username"; echo "</th>";
		echo "<th>"; echo "Email"; echo "</th>";
		echo "<th>"; echo "Password"; echo "</th>";
		echo "<th>"; echo "Customers"; echo "</th>";
		echo "<th>"; echo "Orders"; echo "</th>";
		echo "<th>"; echo "Supply"; echo "</th>";
		echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
		echo "<tr>";
		
		echo "<td>"; echo $row["username"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["Pass"]; echo "</td>";
		$a=$row["username"];
		$custc = mysqli_query($conn,"select * from customer where addedby='$a'");
		$custrc = mysqli_num_rows($custc);
		echo "<td>"; echo $custrc; echo "</td>";
		$custo = mysqli_query($conn,"select * from orders where addedby='$a'");
		$custro = mysqli_num_rows($custo);
		echo "<td>"; echo $custro; echo "</td>";
		$custs = mysqli_query($conn,"select * from supplies where addedby='$a'");
		$custrs = mysqli_num_rows($custs);
		echo "<td>"; echo $custrs; echo "</td>";
		echo "</tr>";
	}
	echo"</table>";
	}
	
  ?>
 </form>
</div>
</div>
<div class="footer">
  <p style="float:left;padding:0 0 0 30%; ">La Musicia Store</p>
  <p><a href='<?php echo $logout; ?>' style="color: white;float:left;padding:0 0 0 30%;"> LOG OUT</a></p>  
  <p><a href='<?php echo $log; ?>' style="color: white;padding:0 0 0 0;"> Console Log</a></p> 
</div>
</body>
</html>