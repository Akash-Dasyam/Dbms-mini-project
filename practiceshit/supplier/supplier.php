<?php
$link3 = "http://localhost/practiceshit/orders/orders.php";
$link2 = "http://localhost/practiceshit/ret.php";
$link1 = "http://localhost/practiceshit/customer/customer.php";
$logout= "http://localhost/practiceshit/logout.php";
$log = "http://localhost/practiceshit/log.php";
$linkp = "http://localhost/practiceshit/profile.php";
$linkpr = "http://localhost/practiceshit/product.php";
session_start();
$added = $_SESSION['user'];
include("C:\/xampp\htdocs\practiceshit\css.php");
?>






<!--HTML--->
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="project.css">
<title>
supplier page
</title>
<style>

.bg{
	height:100%;
	width:100%;
	background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);
	opacity:1;
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
	float:left;
}

input[type=submit]:hover,[type=reset]:hover {
    background-color: red;
}
input[type=text],[type=date],[type=time],[type=number],[type=email],[type=password],select {
    width: 100%;
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
<body style="background-color:black;">
<div class="bg">
<div class="form1">
<ul>
<!---use target="_top" for href links-->
  <li><a href='<?php echo $link1; ?>' >Create a new customer</a></li>
  <li><a href='<?php echo $link2; ?>'>Display/Delete </a></li>
  <li><a href='<?php echo $link3; ?>' >Orders</a></li>
  <li><a class="active" href="#about">Supplies</a></li>
  <li><a href='<?php echo $link5; ?>' >Messages</a></li>
  <li style="float:right;"><a href='<?php echo $linkp; ?>' style="background-color:grey;"><?php echo $added; ?></a></li>
</ul>
</div>
<div class="form2">
<form method="POST" action="supplierinsert.php" autocomplete="off">
<label for="fname">Supplier</label>
    <input type="text" id="Supplier" name="Supplier" placeholder="Supplier" required>
	<label for="phone no">Phone No</label>
    <input type="text" id="phoneno" name="phoneno" autocomplete = "off"  placeholder="Phone no"   >
	<label for="adress">Email</label></br>
	<input type="email" id="email" name="email" placeholder="email.." required></br>
	<label for="adress">Address</label></br>
	<input type="text" id="address" name="address" placeholder="Address.." required></br>
	
<div class="quan">
		<label for="item">Quantity</label>
		<input type="number" id="quantity" name="quantity" placeholder="Quantity" required>
	</div>	
	<div class="dropi">
		<label for="item"  >Item ordered</label>
		<select name="item" required>
		  <option value="guitar">Guitar</option>
		  <option value="violin">Violin</option>
		  <option value="drums">Drums</option>
		  <option value="keyboard">Keyboard</option>
		  <option value="flute">Flute</option>
		</select></br>
	</div>
	
	<input type="submit" value="Submit">
		<input type="reset">
		
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
