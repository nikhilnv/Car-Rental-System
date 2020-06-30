<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title>ADMIN</title>
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
background-image: url(adback.jpg);
background-size:cover;
margin:0;   	
padding:0;
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
<li> <a href="viewfeedback.php">View Feedback</a> </li>
<li> <a href="cpassword.php">Change Password</a> </li>
<li class="back"> <a href="login.php"> Logout</a> </li>
</ul>
</body>
</html>

<?php
// like i said, we must never forget to start the session
session_start();
// is the one accessing this page logged in or not?
if (!isset($_SESSION['basic_is_logged_in'])|| $_SESSION['basic_is_logged_in'] !== true) {
header('Location: login.php');
exit;
}
else
{
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
$_SESSION['admin_is_logged_in'] = true;
}
?>