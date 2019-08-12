<?php

$link1= "http://localhost/practiceshit/login/login.php";
$link0= "http://localhost/practiceshit/Custside/custlogin.php";
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="project.css">
<title>
starting page
</title>

<style>
.bg{
	height:100%;
	width:100%;
	background:url(https://spectator.imgix.net/content/uploads/2017/01/iStock-466336450.jpg?auto=compress,enhance,format&crop=faces,entropy,edges&fit=crop&w=730&h=486);
	opacity:1.0;
}
ul {
	left: 50%;
	width:50%;
	align:center;	
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
    background-color: green;
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
	margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
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
<body style="background-color:black;">
<div class="bg">
<div class="form2">
<h1 style="color:Green; text-align:center;font-style:italic;">La Musicia Store</h1>
<h1 style="color:red; text-align:center;">-Music store management</h1>
<h2>Hi!Are you a:</h2>
<div style="left:50%;">
<ul >
  <li><a href='<?php echo $link0; ?>'>Customer? </a></li>
  <li><a href='<?php echo $link1; ?>'>Manager?  </a></li>
  </ul>
  </div>
</div>
</div>
<div class="footer">
  <p>La Musicia Store...Project by Akash & Amith<p>
</div>
</body>
</html>