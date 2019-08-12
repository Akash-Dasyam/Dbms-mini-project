<?php
session_start();
$added = $_SESSION['cust'];
$logout= "http://localhost/practiceshit/logout1.php";
$link1="http://localhost/practiceshit/Custside/cust/custord.php";
$link3="http://localhost/practiceshit/Custside/cust/custprofile.php";
$user = "root";
$pass = "";
$dbname = "demo";
 $server = "localhost";
//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="project.css">
<title>
New customer page
</title>
<style>
.bg{
	height:100%;
	width:100%;
	background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);
	opacity:1;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
	height:70px;
}

li {
    float: left;
	height:100px;
	width:33.33%;
    }

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 27px 20px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
	height:100px;
}

.active {
    background-color: #4CAF50;
	height:100px;
}

.form2{
	position: absolute;
    top:  54%;
    left: 50%;
    transform: translate(-50%,-50%);
	width:70%;
	border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	opacity:0.99;
	padding-bottom:10px;
	overflow-x:auto;
	width:90%;
	}




.header {
  text-align:center;	
  padding-top:0;
  background: #555;
  color: #f1f1f1;
  background-color:orange;
  height:20px;
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

</style>
<body style="background-color:black;">
<div class="bg" style="background:url('oZr3irkSDKpSSjmFkpgP6K.jpg');">
<div class="header" id="myHeader">
  <h3>Welcome <?php echo $added; ?>!</h3>
</div>

<div class="form1">
<ul>
  <li><a href='<?php echo $link1; ?>' >Buy</a></li>
  <li><a class="active" href="#home">Order history </a></li>
  <li><a href='<?php echo $link3; ?>' >Profile</a></li>
</ul>
</div>
<div class="form2">
	<?php

	$sql="SELECT id FROM customer where  username = '$added'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$cid = $row["id"];
	
	$sqli = mysqli_query($conn,"select * from orders where cid='$cid'");
	echo"<table border=1>";
	echo "<tr>";
		
		echo "<th>"; echo "id"; echo "</th>";
		
		echo "<th>"; echo "item"; echo "</th>";
		echo "<th>"; echo "quantity"; echo "</th>";
		echo "<th>"; echo "ordered on"; echo "</th>";
		
		echo "<th>"; echo "delivery"; echo "</th>";
		
	echo "</tr>";
	while($row=mysqli_fetch_array($sqli))
	{
		echo "<tr>";
		echo "<td>"; echo $row["id"]; echo "</td>";
		
		echo "<td>"; echo $row["item"]; echo "</td>";
		echo "<td>"; echo $row["quantity"]; echo "</td>";
		echo "<td>"; echo $row["date"]; echo "</td>";
		
		echo "<td>"; echo $row["delivery"]; echo "</td>";
		
		echo "</tr>";
	}
	echo"</table>";
	
	$conn->close();	

?>
</div>
	
</div>

<div class="footer">
  <p style="float:left;padding:0 0 0 30%; ">La Musicia Store</p>
  <p><a href='<?php echo $logout; ?>' style="color: white;float:left;padding:0 0 0 30%;"> LOG OUT</a></p>  
   
</div>

</body>
</html>