<?php
// we must never forget to start the session
session_start();
$errorMessage = '';
//add-ons
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="car_rental"; // Database name 
$tbl_name="login_rental"; // Table name 
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form 
if (isset($_POST['username']) && isset($_POST['password'])) {
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
$_SESSION['abc']=$myusername;
$_SESSION['def']=$mypassword;


$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$_SESSION['basic_is_logged_in'] = true;
$result=mysql_query($sql);
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);



if($count>0)
{
 if($myusername=='admin')
  {

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 
header("location:admin.php");
exit;
}

else 
{
	header("location:Ulogin.php");
	exit;
}
}


else {
echo"<p>" ;
echo "Wrong Username or Password";
echo"</p>";
}
}

?>


<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title>LOGIN</title>
<style> 
 
 
h1,h2,h3{
	font-family:Arial, Helvetica, sans-serif;
	line-height:21px;
	color:white;
	}

p{	
font-size:30px;
margin-top:70px;
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
	margin-top: 160px;
}


form {
  border: 2px solid black;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 340px;
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
  width: 100%;
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
	
.logo
{
	float:left;
}
	
</style>
</head>

<body>


<ul class="header">
<li> <a href="Signup.php">Signup</a> </li>
<li> <a href="#Login.php"> Login </a> </li>
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
<form method="post" name="frmLogin" id="frmLogin">
  <fieldset class="account-info">
    <label>
    Username
    <input type="text" name="username">
    </label>
    <label>
    Password
    <input type="password" name="password">
    </label>
  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Login" style="margin-right: 30px">
	<b>Not Registered?</b> <a href="signup.php">Create an Account</a>
  </fieldset>
</form>

</div>


  </body>
  </html>