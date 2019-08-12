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
session_start();
$added = $_SESSION['user'];
//Creating connection for mysqli
$conn = new mysqli($server, $user, $pass, $dbname);
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);

}
?>


<html>
<head>
<title>Customer base</title>
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
    color: white;
	text-align:center;
	}
.bg{
	height:150%;
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
	height:100%;
	
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

<label for="name" >Name:</label></br>
<input type="text" id="name" name="name" placeholder="name.."></br>
<input type="submit"  name="search1" value="show Customer details"></br>
<div class="dropi">
		<label for="item" >Item ordered</label></br>
		<select name="sitem" >
		
		  <option value="guitar">Guitar</option>
		  <option value="violin">Violin</option>
		  <option value="drums">Drums</option>
		  <option value="keyboard">Keyboard</option>
		  <option value="flute">Flute</option>
		</select></br>
	</div>	
<input type="submit"  name="search2" value="item orders"></br>	
<input type="submit"  name="display" value="All Customer Details"></br>
<input type="submit"  name="display3" value="All Orders"></br>
</form>
<?php 
if(isset($_POST["display"]))
{
	if($added === 'admin'){  
	$sqli = mysqli_query($conn,"select * from customer");
	echo"<table border=1>";
	echo "<tr>";
		
		
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "email"; echo "</th>";
		echo "<th>"; echo "gender"; echo "</th>";
		echo "<th>"; echo "bdate"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "added by"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
		echo "<tr>";
		
		echo "<td>"; echo $row["fname"]; echo "</td>";
		echo "<td>"; echo $row["lname"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["gender"]; echo "</td>";
		
		echo "<td>"; echo $row["bdate"]; echo "</td>";
		echo "<td>"; echo $row["pdate"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["addedby"]; echo "</td>";
		echo "</tr>";
	}
	echo"</table>";
	}
	else{
	$sqli = mysqli_query($conn,"select * from customer where addedby='$added'");
	echo"<table border=1>";
	echo "<tr>";
		
		
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "email"; echo "</th>";
		echo "<th>"; echo "gender"; echo "</th>";
		
		echo "<th>"; echo "bdate"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "added by"; echo "</th>";
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
		echo "<tr>";
		
		echo "<td>"; echo $row["fname"]; echo "</td>";
		echo "<td>"; echo $row["lname"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["gender"]; echo "</td>";
		
		echo "<td>"; echo $row["bdate"]; echo "</td>";
		echo "<td>"; echo $row["pdate"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["addedby"]; echo "</td>";
		echo "</tr>";
	}
	echo"</table>";
	}
	$conn->close();	
}
if(isset($_POST["search1"]))
{
	 if(empty($_POST['name']))
	{
	}
else{
	if($added === 'admin'){ 
	$sqli = mysqli_query($conn,"select * from customer where fname='$_POST[name]'");
	echo"<table border=1>";
	echo "<tr>";
		
		
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "email"; echo "</th>";
		echo "<th>"; echo "gender"; echo "</th>";
		
		echo "<th>"; echo "bdate"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "added by"; echo "</th>";
		
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
		echo "<tr>";
		
		echo "<td>"; echo $row["fname"]; echo "</td>";
		echo "<td>"; echo $row["lname"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["gender"]; echo "</td>";
		
		echo "<td>"; echo $row["bdate"]; echo "</td>";
		echo "<td>"; echo $row["pdate"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		echo "<td>"; echo $row["addedby"]; echo "</td>";
		echo "</tr>";
	}
	echo"</table>";
	echo"</br>";
	echo"ORDERS:";
	$price = mysqli_query($conn,"SELECT id FROM customer WHERE fname='$_POST[name]'");
	$cidi= mysqli_fetch_array($price);
	$cid = $cidi['id'];
	//$sqli = mysqli_query($conn,"select * from orders where fname='$_POST[name]'");
	$sqli = mysqli_query($conn,"select * from orders where cid='$cid'");
	echo"<table border=1>";
	echo "<tr>";
		
		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "delivery?"; echo "</th>";
		echo "<th>"; echo "added by"; echo "</th>";
		
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
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
	$sqli = mysqli_query($conn,"select * from customer where addedby='$added' AND fname='$_POST[name]'");
	echo"<table border=1>";
	echo "<tr>";
		
		
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "email"; echo "</th>";
		echo "<th>"; echo "gender"; echo "</th>";
		
		echo "<th>"; echo "bdate"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		
		
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
		echo "<tr>";
	
		echo "<td>"; echo $row["fname"]; echo "</td>";
		echo "<td>"; echo $row["lname"]; echo "</td>";
		echo "<td>"; echo $row["email"]; echo "</td>";
		echo "<td>"; echo $row["gender"]; echo "</td>";
		
		echo "<td>"; echo $row["bdate"]; echo "</td>";
		echo "<td>"; echo $row["pdate"]; echo "</td>";
		echo "<td>"; echo $row["address"]; echo "</td>";
		
		echo "</tr>";
	}
	echo"</table>";
	echo"</br>";
	echo"ORDERS:";
	$price = mysqli_query($conn,"SELECT id FROM customer WHERE fname='$_POST[name]' AND addedby='$added' ");
	$cidi= mysqli_fetch_array($price);
	$cid = $cidi['id'];
	//$sqli = mysqli_query($conn,"select * from orders where fname='$_POST[name]'");
	$sqli = mysqli_query($conn,"select * from orders where cid='$cid'");
	echo"<table border=1>";
	echo "<tr>";
		
		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "delivery?"; echo "</th>";

		
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
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
if(isset($_POST["search2"]))
{
	 if($added === 'admin'){ 
	
	echo"</br>";
	
	$sqli = mysqli_query($conn,"select * from orders where item='$_POST[sitem]'");
	
	//$sqli = mysqli_query($conn,"select * from orders where fname='$_POST[name]'");
	
	echo"<table border=1>";
	echo "<tr>";
		
		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "delivery?"; echo "</th>";
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
	
	$sqli = mysqli_query($conn,"select * from orders where item='$_POST[sitem]' AND addedby='$added'");
	
	//$sqli = mysqli_query($conn,"select * from orders where fname='$_POST[name]'");
	
	echo"<table border=1>";
	echo "<tr>";
		
		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "delivery?"; echo "</th>";
	
		
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
if(isset($_POST["display3"]))
{
	 if($added === 'admin'){ 
	$sqli = mysqli_query($conn,"select * from orders");
	echo"<table border=1>";
	echo "<tr>";
		
		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "delivery?"; echo "</th>";
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
	$sqli = mysqli_query($conn,"select * from orders WHERE addedby='$added'");
	echo"<table border=1>";
	echo "<tr>";
		
		echo "<th>"; echo "id"; echo "</th>";
		echo "<th>"; echo "fname"; echo "</th>";
		echo "<th>"; echo "lname"; echo "</th>";
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "added on"; echo "</th>";
		echo "<th>"; echo "address"; echo "</th>";
		echo "<th>"; echo "delivery?"; echo "</th>";
		
		
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
	
	