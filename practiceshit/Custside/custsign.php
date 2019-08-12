<?php
$link1= "http://localhost/practiceshit/Custside/custlogin.php";
$logout= "http://localhost/practiceshit/logout.php";
include("custinsert.php");
$framelink = "http://localhost/practiceshit/Custside/custsign1.php";
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>
signup page
</title>
<style>
.bg{
	height:100%;
	width:100%;
	<!---background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);--->
	background-color:black;
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
	height:70px;
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
	width:90%;
	height:70%;
	
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

   text-align: center;
}
</style>
</head>
<body style="background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);">
<div class="bg">
<div class="form1">
<ul>
  <li><a class="active" href="#about">Sign Up </a></li>
  <li><a href='<?php echo $link1; ?>' >Login</a></li>
  </ul>
</div>

<div class="form2">


<iframe src='<?php echo $framelink; ?>' width="100%" height="95%" style="border-color:green; border-width:10px">

</iframe>

</div>
</div>
<div class="footer">
  <p>La Musicia Store</p>
  
  
</div>
</body>
</html>