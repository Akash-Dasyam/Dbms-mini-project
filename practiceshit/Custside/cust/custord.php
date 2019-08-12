<?php
session_start();
$added = $_SESSION['cust'];
$id=$_SESSION['cid'];
$id2=$_SESSION['id1'];
$logout= "http://localhost/practiceshit/logout1.php";
$link3="http://localhost/practiceshit/Custside/cust/custprofile.php";
$link2 = "http://localhost/practiceshit/Custside/cust/custhis.php";
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
	background:url('musical.jpg')
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
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
	
}

.header {
  text-align:center;	
  padding-top:0;
  background: #555;
  color: #f1f1f1;
  background-color:orange;
  height:20px;
}
.radi{
	padding-top:10px;
	padding-left:20px;
	padding-bottom:10px;
}
.dropi{
	width:50%;
	
	}
.quan{
	width:50%;
	float:right;
	
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
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown {
    position: relative;
    display: inline-block;
}

</style>
<body style="background-color:white;">
<div class="bg" style="background:url('musical.jpg');">
<div class="header" id="myHeader">
  <h3>Welcome <?php echo $added; ?>!</h3>
</div>

<div class="form1">
<ul>
  <li><a class="active" href="#home">Buy</a></li>
  <li><a href='<?php echo $link2; ?>'>Order history </a></li>
  <li><a href='<?php echo $link3; ?>' >Profile</a></li>
</ul>
</div>
<div class="form2">
<form method="POST" action="custordinsert.php" autocomplete="off">
	
		<div class="quan">
		<label for="item">Quantity:</label>
		<input type="number" id="quantity" name="quantity" placeholder="Quantity" required>
	</div>	
	<div class="dropi">
		<label for="item" >Choose Item:</label>
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
  	<input type="submit" value="Place Order" name="place">
		<input type="reset">
  </form>	
  

</div>
	
</div>

<div class="footer">
  <p style="float:left;padding:0 0 0 30%; ">La Musicia Store</p>
  <p><a href='<?php echo $logout; ?>' style="color: white;float:left;padding:0 0 0 30%;"> LOG OUT</a></p>  
   
</div>

</body>
</html>