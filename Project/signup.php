<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title>SIGNUP</title>
<style>

h1,h2,h3{
	font-family:Arial, Helvetica, sans-serif;
	line-height:21px;
	color:white;
	}
	
.header
{
list-style-type:none;
margin:0;
padding:0;
top:0;
background-color:#333;
font-family:Arial, Helvetica, sans-serif;
font-style:normal;
position:fixed;
width:100%;
}


li
{
float:right;
}

a:hover{
	text-decoration:none;
	color: orange;
}

li a
{
display:block;
color:silver;
padding:20px;
text-decoration:none;
}



.dropdown {
    position: relative;
    display: inline-block;
	float:right;
}

.dropdown-content {
    display: none;
	top:100%;
    position: absolute;
    background-color: beige;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover 
{
background-color: orange
}

.dropdown:hover .dropdown-content {
    display: block;
}

body {
	background-image: url(blue.jpg);
background-size:cover;   	
margin:0;
padding:0;
}

.wrapper {	
	margin-top: 100px;
  margin-bottom: 0px;
}


form {
  border: 2px solid black;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 440px;
  margin: 0 auto; 
}
fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}
input {
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  margin: 0;
}
.account-info {
  padding: 20px 20px 0 20px;
}
.account-info label {
  color: black;
  display: block;
  font-weight: bold;
  margin-bottom: 20px;
}
.account-info input {
  background: #fff;
  border: 1px solid #c6c7cc;
   box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1);
  color: #636466;
  padding: 6px;
  margin-top: 6px;
  width: 200px;
  
}
.account-action {
  background: #f0f0f2;
  border-top: 1px solid #c6c7cc;
  padding: 20px;
}
.account-action .btn {
  background: linear-gradient(#49708f, #293f50);
  border: 0;
  color: #fff;
  cursor: pointer;
  font-weight: bold;
  float: left;
  padding: 8px 16px;
}
.account-action label {
  color: #7c7c80;
  font-size: 12px;
  float: left;
  margin: 10px 0 0 20px;
}


.formlabel{
    clear:left;
    display:block;
    float:left;
    padding:0 0.5em 0 0;
    text-align:right;
    width:8em;
	 margin-top: 15px;
  margin-left: 15px;
  margin-right:15px;
}

.forminput{
    float:left;
	margin-top: 15px;
}

.logo
{
	float:left;
}

</style>
</head>

<body>

<ul class="header">
<li> <a href="#Signup.php">Signup</a> </li>
<li> <a href="Login.php"> Login </a> </li>
<li> <a href="eligibility.php"> Eligibility </a> </li>
<div class="dropdown">
<li> <a href="#fleet.php"> Fleet </a> </li>
  <div class="dropdown-content">
    <a href="hatchback.php">Hatchback</a>
    <a href="suv.php">SUV</a>
    <a href="sedan.php">Sedan</a>
	<a href="luxury.php">Luxury</a>
  </div>
</div>
<li> <a href="Howitworks.php"> How it works </a> </li>
<li> <a href="Home.php"> Home </a> </li>
<li class="logo"><pre><h1>           <img src="logo-1488441891.png"></h1></li>
</ul>

<div class="wrapper">
<form action="" method="post">
  <fieldset class="account-info">
   <label for="name" class="formlabel">Name </label>
    <input id="name" name="name" type="text" class="forminput" onkeyup="this.value=this.value.toUpperCase()" required />
 
    <label for="address" class="formlabel">Address</label>
    <input id="address" name="address" type="text" class="forminput" onkeyup="this.value=this.value.toUpperCase()" required/>
 
	<label for="state" class="formlabel">State</label>
    <input id="state" name="state" type="text" class="forminput" onkeyup="this.value=this.value.toUpperCase()" required/>

   <label for="username" class="formlabel">Username</label>
   <input id="username" name="username" type="text" class="forminput" required/>

  <label for="password" class="formlabel">Password</label>
  <input id="password" name="password" type="password" class="forminput"required/>

  <label for="dob" class="formlabel">Date of Birth</label>
  <input id="dob" name="dob" type="date" class="forminput" required/>

 <label for="mobno" class="formlabel">Mobile No.</label>
  <input id="mobno" name="mobno" type="text" class="forminput" pattern="[7-9]{1}[0-9]{9}" placeholder="Enter a valid mobile number" maxlength="10" required/>	

 
  </fieldset>
	
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Create Account" style="margin-right: 30px">
	<input class="btn" type="reset" name="reset" value="  Reset" style="margin-right: 30px">
	<b>Already have an account?</b> <a href="Login.php"> Login </a>
    </fieldset>
</form>
</div>

  </body>
  </html>
  
    
 <?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   
   mysql_select_db("car_rental");
   
   
   
   
   
if(isset($_POST['submit']))
{
	//echo "<pre>";
	//print_r($_POST);
	//echo "</pre>";
	
	$name= $_POST['name'];
	$address= $_POST['address'];
	$state= $_POST['state'];
	$username= $_POST['username'];
	$password = $_POST['password'];
	$date_of_birth= $_POST['dob'];
	$mobile_no= $_POST['mobno'];
	$sql = "INSERT INTO `car_rental`.`login_rental`(`username`,`password`)
	Values('$username','$password')";
	$pqr = "INSERT INTO `car_rental`.`u_detail`(`name`,`address`,`state`,`username`,`password`,`Date_of_birth`,`Mobile_no`)
	Values('$name','$address','$state','$username','$password','$date_of_birth','$mobile_no')";
	
	if((mysql_query($sql))&&(mysql_query($pqr)))
	{
		header("Location: login.php?status=1");exit;
	}
	else
	{
		echo "not saved";
		echo mysql_error();
	}

}

?>
