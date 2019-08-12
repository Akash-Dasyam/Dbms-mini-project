<?php
$linkp = "http://localhost/practiceshit/profile.php";
$link4 = "http://localhost/practiceshit/supplier/supplier.php";
$link1 = "http://localhost/practiceshit/customer/customer.php";
$link3 = "http://localhost/practiceshit/orders/orders.php";
$logout= "http://localhost/practiceshit/logout.php";
$log = "http://localhost/practiceshit/log.php";
$linkpr = "http://localhost/practiceshit/product.php";
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";

 include("C:\/xampp\htdocs\practiceshit\css.php");
//Creating connection for mysqli
$conn = new mysqli($server, $user, $pass, $dbname);
session_start();
$added = $_SESSION['user'];
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
?>


<html>
<head>
<title>Date</title>
</head>
<style>
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
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: green;
    text-align:center;
	color: white;
}
.bg{
	height:300%;
	width:100%;
	background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);
	opacity:1.0;
}



.form2{
	position: absolute;
    top:  70%;
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
.form2 ul {
	
    list-style-type: none;
    margin: 0;
    padding: 0 ;
    overflow: hidden;
    background-color: #333;
	height:70px;
}
.form2 li {
	
    float: left;
	height:100px;
	width:33.33%;
    }

.form2 li:last-child {
    border-right: none;
}

.form2 li a {
    display: block;
    color: white;
    text-align: center;
    padding: 27px 20px;
    text-decoration: none;
}

.form2 li a:hover:not(.active) {
    background-color: #111;
	height:100px;
}

.form2 .active {
    background-color: #4CAF50;
	height:100px;
}
 	
input[type=submit],[type=reset] {
    width: 50%;
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	

}

input[type=submit]:hover,[type=reset]:hover {
    background-color: red;
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
.radi{
	padding-top:10px;
	padding-left:20px;
	padding-bottom:10px;
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
.dropi{
	
	width:50%;
	}
.quan{
	width:30%;
	
	
}
.btn{
	width: 50%;
    background-color:green ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	margin: 0 auto;
	float:left;
}
.btn:hover{
	background-color:red;
	
}
.bttn{
	width: 40%;
	height:15px;
    background-color: green;
    color: white;
    padding: 14px 27px;
    margin: 8px 0;
    border: none;
	text-align:center;
    border-radius: 4px;
    cursor: pointer;
	float:left;
}
.bttn:hover{
	background-color: red;
}





</style>
<body style="background-color:black;">
<div class="bg">
<div class="form1">
<ul>
  <li><a href='<?php echo $link1; ?>' >Create a new customer</a></li>
  <li><a class="active" href="#new .html">Display/Delete</a></li>
  <li><a href='<?php echo $link3; ?>' >Orders</a></li>
  <li><a href='<?php echo $link4; ?>' >Supplies</a></li>
  <li><a href='<?php echo $link5; ?>' >Messages</a></li>
  <li style="float:right;"><a href='<?php echo $linkp; ?>' style="background-color:grey;"><?php echo $added; ?></a></li> 
</ul>
</div>
<div class="form2">

<form action="" method="POST" autocomplete="off">
<label for="pdate">Customer purchase date</label></br>
<input type="date" id="pdate" name="pcdate"></br>
<input type="submit"  name="search1" value="Customers orders on this day"></br></br></br></br>
<label for="psdate"></label>Suppliers order date</br>
<input type="date" id="psdate" name="psdate" ></br>
<input type="submit"  name="search2" value="Supplies ordered on this day"></br>
</form>
<?php 
if(isset($_POST["search2"]))
{
	if(empty($_POST['psdate']))
	{
	}
else{ 	
if($added === 'admin'){ 
	$sqli = mysqli_query($conn,"select * from supplies where CAST(date as date)='$_POST[psdate]'");
	echo"<table border=1>";
	echo "<tr>";
		
		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "supplier"; echo "</th>";
		echo "<th>"; echo "email"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "added by"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["supplier"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["item"]; echo "</td>";
		echo "<td>"; echo $row["quantity"]; echo "</td>";
		echo "<td>"; echo $row["date"]; echo "</td>";
		echo "<td>"; echo $row["addedby"]; echo "</td>";
		echo "</tr>";
	}

	echo"</table>";
}else{
	$sqli = mysqli_query($conn,"select * from supplies where addedby='$added' AND CAST(date as date)='$_POST[psdate]'");
	echo"<table border=1>";
	echo "<tr>";
		
		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "supplier"; echo "</th>";
		echo "<th>"; echo "email"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $row["supplier"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["item"]; echo "</td>";
		echo "<td>"; echo $row["quantity"]; echo "</td>";
		echo "<td>"; echo $row["date"]; echo "</td>";
		echo "</tr>";
	}
	echo"</table>";	
}
	$conn->close();	
  }
 }

if(isset($_POST["search1"]))
{
	 if(empty($_POST['pcdate']))
	{
	}
else{
	if($added === 'admin'){  
	$sqli = mysqli_query($conn,"select * from orders where CAST(date as date)='$_POST[pcdate]'");
	echo"<table border=1>";
	echo "<tr>";
		

		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "delivery"; echo "</th>";
		echo "<th>"; echo "added by"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
	$cid=$row["cid"];
	$fnamei = mysqli_query($conn,"SELECT fname FROM customer WHERE  id='$cid'");
	$fnii= mysqli_fetch_array($fnamei);
	$fname = $fnii['fname'];
	
	$lnamei = mysqli_query($conn,"SELECT lname FROM customer WHERE  id='$cid'");
	$lnii= mysqli_fetch_array($lnamei);
	$lname = $lnii['lname'];
	
	$fnameii = mysqli_query($conn,"SELECT address FROM customer WHERE  id='$cid'");
	$fniii= mysqli_fetch_array($fnameii);
	$address = $fniii['address'];
		
		
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $fname; echo "</td>";
		echo "<td>"; echo $lname; echo "</td>";
		echo "<td>"; echo $row["item"]; echo "</td>";
		echo "<td>"; echo $row["quantity"]; echo "</td>";
		echo "<td>"; echo $row["date"]; echo "</td>";
		echo "<td>"; echo $address; echo "</td>";
		echo "<td>"; echo $row["delivery"]; echo "</td>";
		echo "<td>"; echo $row["addedby"]; echo "</td>";
		echo "</tr>";
	}
	echo"</table>";
	}
	else{
	$sqli = mysqli_query($conn,"select * from orders where CAST(date as date)='$_POST[pcdate]' AND addedby='$added'");
	echo"<table border=1>";
	echo "<tr>";
		

		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "delivery"; echo "</th>";
		
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
	$cid=$row["cid"];
	$fnamei = mysqli_query($conn,"SELECT fname FROM customer WHERE  id='$cid'");
	$fnii= mysqli_fetch_array($fnamei);
	$fname = $fnii['fname'];
	
	$lnamei = mysqli_query($conn,"SELECT lname FROM customer WHERE  id='$cid'");
	$lnii= mysqli_fetch_array($lnamei);
	$lname = $lnii['lname'];
	
	$fnameii = mysqli_query($conn,"SELECT address FROM customer WHERE  id='$cid'");
	$fniii= mysqli_fetch_array($fnameii);
	$address = $fniii['address'];
		
		
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		echo "<td>"; echo $fname; echo "</td>";
		echo "<td>"; echo $lname; echo "</td>";
		echo "<td>"; echo $row["item"]; echo "</td>";
		echo "<td>"; echo $row["quantity"]; echo "</td>";
		echo "<td>"; echo $row["date"]; echo "</td>";
		echo "<td>"; echo $address; echo "</td>";
		echo "<td>"; echo $row["delivery"]; echo "</td>";
	
		echo "</tr>";
	}
	echo"</table>";
	}
	$conn->close();	
}
}
?>
</div>
</div>
<div class="footer">
 <p style="float:left;padding:0 0 0 30%; ">La Musicia Store</p>
  <p><a href='<?php echo $logout; ?>' style="color: white;float:left;padding:0 0 0 30%;"> LOG OUT</a></p>  
  <p><a href='<?php echo $log; ?>' style="color: white;padding:0 0 0 0;"> Console Log</a></p>  
</div>
</body>
</html>
