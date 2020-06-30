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
if (isset($_POST['cpassword']) && isset($_POST['npassword'])) {
$cpassword=$_POST['cpassword']; 
$npassword=$_POST['npassword']; 
$value=$_SESSION['def'];
if($cpassword==$value)
{
$sql="update login_rental set Password='$npassword' where Password='$cpassword'";
$_SESSION['basic_is_logged_in'] = true;
mysql_query($sql);
$_SESSION['def']=$npassword;
echo"<p style='color:green'>";
echo"Your Password has been changed.";
echo"</p>";
}
else
{
echo"<p style='color:red'>";
echo"This is not your current password.";
echo"</p>";	
}
}
?>


<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title>CHANGE PASSWORD</title>
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
float:left;
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



body {
	background-image: url(blue.jpg);
background-size:cover;
margin:0;   	
padding:0;
}


.wrapper {	
	margin-top:160px;
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


.back
{
float:right;
}

	
</style>
</head>

<body>

<ul class="header">
<li> <pre><h1>           <img src="logo-1488441891.png" ></h1></li>
<li style="padding-left:50px;"> <a href="breport.php"> Booking Report</a> </li>
<li> <a href="viewfeedback.php"> View Feedback</a> </li>
<li> <a href="#cpassword.php">Change Password</a> </li>
<li class="back"> <a href="admin.php"> Back</a> </li>
</ul>


<div class="wrapper">
<form method="post">
  <fieldset class="account-info">
    <label>
    Current Password
    <input type="text" name="cpassword" required>
    </label>
    <label>
    New Password
    <input type="text" name="npassword" required>
    </label>
  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Change" >
  </fieldset>
</form>

</div>


  </body>
  </html>