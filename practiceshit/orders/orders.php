<?php
include("C:\/xampp\htdocs\practiceshit\css.php");
$link4 = "http://localhost/practiceshit/supplier/supplier.php";
$link2 = "http://localhost/practiceshit/ret.php";
$linkp = "http://localhost/practiceshit/profile.php";
$link1 = "http://localhost/practiceshit/customer/customer.php";
$logout= "http://localhost/practiceshit/logout.php";
$log = "http://localhost/practiceshit/log.php";
$linkpr = "http://localhost/practiceshit/product.php";
session_start();
$added = $_SESSION['user'];
$error='';
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="project.css">
<title>
orders page
</title>
<body style="background-color:black;" >
<div class="bg">
<div class="form1">
<ul>
  <li><a href='<?php echo $link1; ?>' >Create a new customer</a></li>
  <li><a href='<?php echo $link2; ?>'>Display/Delete </a></li>
  <li><a class="active" href="#new 2.html">Orders</a></li>
  <li><a href='<?php echo $link4; ?>' >Supplies</a></li>
  <li><a href='<?php echo $link5; ?>' >Messages</a></li>
  <li style="float:right;"><a href='<?php echo $linkp; ?>' style="background-color:grey;"><?php echo $added; ?></a></li>
</ul>
</div>
<div class="form2">
<form method="POST" action="orderinsert.php" autocomplete="off">
	<label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last name.." required>
	
	<div class="quan">
		<label for="item">Quantity</label>
		<input type="number" id="quantity" name="quantity" placeholder="Quantity" required>
	</div>	
	<div class="dropi">
		<label for="item" >Item ordered</label>
		<select name="item" >
		  <option value="guitar">Guitar</option>
		  <option value="violin">Violin</option>
		  <option value="drums">Drums</option>
		  <option value="keyboard">Keyboard</option>
		  <option value="flute">Flute</option>
		</select></br>
	</div>
	<div class="switch">
  <label>
	Delivery:
    <input type="checkbox" name="del">
  </label>
</div>
	<input type="submit" value="Submit">
		<input type="reset">
<?php
	if (@$_GET['registered'] == 'true')
    $error ='Not registered yet.';
	?>
	<span><?php echo $error; ?></span>		
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