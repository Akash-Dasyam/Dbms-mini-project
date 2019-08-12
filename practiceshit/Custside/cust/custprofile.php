<?php
session_start();

$added = $_SESSION['cust'];
$id=$_SESSION['cid'];
$id2=$_SESSION['id1'];
$logout= "http://localhost/practiceshit/logout1.php";
$link1="http://localhost/practiceshit/Custside/cust/custord.php";
$link2="http://localhost/practiceshit/Custside/cust/custhis.php";
$user = "root";
$pass = "";
$dbname = "demo";
$server = "localhost";
//Creating connection for mysqli
$conn = new mysqli($server, $user, $pass, $dbname);


$sql="SELECT * FROM customer where  username = '$added'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$id=$row["id"];
$fname=$row["fname"];
$lname=$row["lname"];
$gender=$row["gender"];
$bdate= $row["bdate"];
$address=$row["address"];
$pdate=$row["pdate"];


$sql="SELECT * FROM oc where  username = '$added'";
$result=mysqli_query($conn,$sql);
$rowi=mysqli_fetch_array($result);
$email=$rowi["email"];
$pswd=$rowi["password"];
$username=$rowi["username"];



?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="project.css">
<title>
New customer page
</title>
<style>
.bg{
	height:160%;
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
    top:  90%;
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
</style>
<body style="background-color:black;">
<div class="bg" style="background:url('Best-Roland-Keyboard.jpg');">
<div class="header" id="myHeader">
  <h3>Welcome <?php echo $added;?>!</h3>
</div>

<div class="form1">
<ul>
  <li><a href='<?php echo $link1; ?>' >Buy</a></li>
  <li><a href='<?php echo $link2; ?>'>Order history </a></li>
  <li><a class="active" href="#home" >Profile</a></li>
</ul>
</div>
<div class="form2">
<h3 font color="red">Change your information if needed and select save
	<form method="POST" action="cpinsert.php">
	<fieldset>
	<label for="email">Username:</label></br>
    <input type="text" id="username" name="username" placeholder="Username" autocomplete="off" value='<?php echo $username; ?>'></br>
	<input type="submit" value="change username" name="submit2" onclick=alerti()>
	
    <legend><h2>Profile</h2></legend>
	<label for="fname">First Name</label></br>
    <input type="text" id="fname" name="firstname" autocomplete="off" value='<?php echo $fname; ?>'  autocomplete="off"></br>
    <label for="lname">Last Name</label></br>
    <input type="text" id="lname" name="lastname" autocomplete = "off" value='<?php echo $lname; ?>' placeholder="Last name.."   ></br>
	<label for="Dateofbirth">Birthday</label></br>
	<input type="date" id="dob" name="bday" value='<?php echo $bdate; ?>' ></br>
	<label for="gender">Gender</label></br>
	<div class="radi">
    <input type="radio" name="gender" value="male" <?php echo ($gender == 'male') ?  "checked" : "" ;  ?>> Male
    <input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ?  "checked" : "" ;  ?>> Female
    <input type="radio" name="gender" value="other" <?php echo ($gender == 'other') ?  "checked" : "" ;  ?>> Other<br>
	</div>
	<label for="adress">Address</label></br>
	<input type="text" id="address" name="adress" placeholder="Address.." value='<?php echo $address; ?>'></br>
	
	
	<label for="email">E-mail:</label></br>
    <input type="email" id="email" name="email" placeholder="Your email.." autocomplete="off" value='<?php echo $email; ?>'></br>
	
	<label for="password">Password:</label></br>
    <input type="text" id="password" name="password" placeholder="password"  autocomplete="off" value='<?php echo $pswd; ?>'></br>
	<!----<a href="project.html" class="bttn">Login</a>--->
	<input type="submit" value="Save new info" name="submit" ></br>
	
	</fieldset>	
	</form>
	</div>
	</h3>
</div>

	<script>
	function alerti(){
	
	alert('<?php echo $username." is no longer valid.Please login with the new username"; ?>');
	}
	
</script>";
<div class="footer">
  <p style="float:left;padding:0 0 0 30%; ">La Musicia Store</p>
  <p><a href='<?php echo $logout; ?>' style="color: white;float:left;padding:0 0 0 30%;"> LOG OUT</a></p>  
   
</div>

</body>
	</html>