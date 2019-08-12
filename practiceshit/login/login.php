<?php
include("loginserv.php"); // Include loginserv for checking username and password
$link1= "http://localhost/practiceshit/signup/signup.php";
$logout= "http://localhost/practiceshit/logout.php";
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>
login page
</title>
<style>

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
	width:50%;
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
	width:60%;
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
</style>
</head>
<body style="background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);">
<div class="bg">
<div class="form1">
<ul>
  <li><a href='<?php echo $link1; ?>' >Sign Up</a></li>
  <li><a class="active" href="#about">Login </a></li>
  </ul>
</div>

<div class="form2">

<form method="POST" action="" >
<fieldset>
    <legend><h2>Login</h2></legend>
	<label for="text">Username:</label>
    <input type="text" id="username" name="username" placeholder="Username" autocomplete="off" required></br>
	
	<!--<label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="Your email.."  autocomplete="off"></br>
	-->
	
	<label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="password"  required autocomplete="off">
	
	<!----<a href="project.html" class="bttn">Login</a>--->
	
	<input type="submit" value="Login" name="submit">
	<input type="reset">
	<!-- Error Message -->
	<span><?php echo $error; ?></span>
	</fieldset>	
	</form>
</div>
</div>
<div class="footer">
  <p style="float:left;padding:0 0 0 30%; ">La Musicia Store</p>
  <p><a href='<?php echo $logout; ?>' style="color: white;float:left;padding:0 0 0 30%;"> EXIT</a></p>    
</div>
</body>

</html>