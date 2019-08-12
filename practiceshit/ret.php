<?php
$linkp = "http://localhost/practiceshit/profile.php";
$link4 = "http://localhost/practiceshit/supplier/supplier.php";
$link1 = "http://localhost/practiceshit/customer/customer.php";
$link3 = "http://localhost/practiceshit/orders/orders.php";
$logout= "http://localhost/practiceshit/logout.php";
$link9 = "http://localhost/practiceshit/ret1/cus.php";
$link6 = "http://localhost/practiceshit/ret1/pdate.php";
$link7 = "http://localhost/practiceshit/ret1/sup.php";
$link8 = "http://localhost/practiceshit/ret1/delete.php";
$linkpr = "http://localhost/practiceshit/product.php";
$log = "http://localhost/practiceshit/log.php";
session_start();
$added = $_SESSION['user'];
include("C:\/xampp\htdocs\practiceshit\css.php");
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="project.css">
<title>
retrieve records
</title>
<style>

.bg{
	height:100%;
	width:100%;
	background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);
	opacity:1.0;
}



.form2{
	position: absolute;
    top:  54%;
    left: 50%;
    transform: translate(-50%,-50%);
	width:70%;
	border-radius: 5px;
    background-color:black;
    padding: 20px;
	opacity:0.99;
	padding-bottom:10px;
	width:90%;
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
	width:20%;
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
<ul>
<!---use target="_top" for href links-->
  <li><a href='<?php echo $linkpr; ?>'>Product status</a></li>	
  <li><a href='<?php echo $link9; ?>'>Customers</a></li>
  <li><a href='<?php echo $link7; ?>' >Suppliers</a></li>
  <li><a href='<?php echo $link6; ?>'>Date</a></li>
  <li><a href='<?php echo $link8; ?>'>Delete</a></li>
  
  
</ul>

</div>

</div>
<div class="footer">
  <p style="float:left;padding:0 0 0 30%; ">La Musicia Store</p>
  <p><a href='<?php echo $logout; ?>' style="color: white;float:left;padding:0 0 0 30%;"> LOG OUT</a></p>  
  <p><a href='<?php echo $log; ?>' style="color: white;padding:0 0 0 0;"> Console Log</a></p>  
</div>
</body>
</html>