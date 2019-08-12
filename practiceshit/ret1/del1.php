<?php
//Creating connection for mysqli
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "demo";
$conn = new mysqli($server, $user, $pass, $dbname);
session_start();
$added = $_SESSION['user'];
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
?><html>
<link rel="stylesheet" href="project.css">
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
	text-align:center;
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
	text-align:center;
   background-color: green;
    color: white;
}
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
	width:25%;
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
	width:90%;
	}
input[type=submit],[type=reset] {
    width: 50%;
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	
}

input[type=submit]:hover,[type=reset]:hover {
    background-color: red;
}
input[type=text],[type=date],[type=time],[type=number],[type=email],[type=password],select {
    width: 50%;
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
	float:right;
	
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
<form action="" method="POST" autocomplete="off">
<input type="submit"  name="display" value="All Customer Details"></br>
<input type="submit"  name="display1" value="All supply orders"></br>
<label for="name" >First Name:</label></br>
<input type="text" id="name" name="name" placeholder="name.."></br>
<label for="name" >Last Name:</label></br>
<input type="text" id="name" name="iname" placeholder="name.."></br>
<input type="submit"  name="delete1" value="Delete customer record"></br>	

<label for="fname">Supplier</label></br>
<input type="text" id="Supplier" name="sname" placeholder="Supplier" ></br>
<input type="submit"  name="delete2" value="Delete supplier record "></br>
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
	}
	$conn->close();	
}
if(isset($_POST["display1"]))
{
	 
	if($added === 'admin'){
	$sqli = mysqli_query($conn,"select * from supplies");
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
	}
	else{
		$sqli = mysqli_query($conn,"select * from supplies where addedby='$added'");
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
	}
	$conn->close();	
}
if(isset($_POST["delete1"]))
{	
	if($added === 'admin'){
	$sqli = mysqli_query($conn,"delete  from  customer where fname='$_POST[name]' AND lname='$_POST[iname]'");
	if($conn->query($sqli) == TRUE){
	echo "succesful";
 }
 else{
 echo "Invalid Deletion!";
 }
	}
	else{
	$sqli = mysqli_query($conn,"delete  from  customer where fname='$_POST[name]' AND lname='$_POST[iname]' AND addedby='$added'");
	if($conn->query($sqli) == TRUE){
	echo "succesful";
 }
 else{
 echo "Invalid Deletion!";
 }
	}
}
if(isset($_POST["delete2"]))
{
	if($added === 'admin'){
	$sqli = mysqli_query($conn,"delete from supplies where supplier='$_POST[sname]'");
if($conn->query($sqli) == TRUE){

  echo "succesful";
 }
 else{
 echo "Invalid Deletion!";
 }
	}
	else{
	$sqli = mysqli_query($conn,"delete from supplies where supplier='$_POST[sname]' AND addedby='$added'");
if($conn->query($sqli) == TRUE){
 echo "succesful";
 }
 else{
 echo "Invalid Deletion!";
 }
	}
	}
?>
</form>