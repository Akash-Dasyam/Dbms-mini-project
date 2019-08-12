<html>
<link rel="stylesheet" href="project.css">
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
<form  method="POST" action="customerinsert.php"  autocomplete="off">

	<label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="First name.." required  autocomplete="off">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Last name.." required  >
	
	<label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required  autocomplete="off"></br>
	
	
	<label for="Dateofbirth">Birthday</label></br>
	<input type="date" id="dob" name="bday" required  ></br>
	
	<label for="gender">Gender</label></br>
	<div class="radi">
    <input type="radio" name="gender" value="male" checked> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other<br>
	</div>
	<label for="time1">1st time ordering from us??</label></br>
	<div class="radi">
    <input type="radio" name="time1" value="yes" checked> Yes
    <input type="radio" name="time1" value="no"> No
	</div>
	<div class="quan">
		<label for="item">Quantity</label>
		<input type="number" id="quantity" name="quantity" placeholder="Quantity" required >
	</div>	
	<div class="dropi">
		<label for="item" >Item purchased</label>
		<select name="item" >
		  <option value="guitar">Guitar</option>
		  <option value="violin">Violin</option>
		  <option value="drums">Drums</option>
		  <option value="keyboard">Keyboard</option>
		  <option value="flute">Flute</option>
		</select></br>
	</div>
	
	
	
	<label for="adress">Address</label></br>
	<input type="text" id="address" name="adress" placeholder="Address.." required ></br>
	
		<input type="submit" value="Submit">
		<input type="reset">
		
	
	</form>
	</html>