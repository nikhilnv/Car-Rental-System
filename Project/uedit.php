<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title>Details</title>
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


.back
{
float:right;
}
	
body {
	background-image: url('blue.jpg');
background-size:cover;   	
margin:0;
padding:0;
}

.wrapper {	
  top: 30;
  position: relative;
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


	
	
</style>
</head>

<body>

<ul class="header">
<li> <pre><h1>           <img src="logo-1488441891.png" ></h1></li>
<li style="padding-left:50px;"> <a href="#vdetail.php"> View Details</a> </li>
<li> <a href="booknow.php"> Book Car</a> </li>
<li> <a href="Feedback.php"> Feedback</a> </li>
<li class="back"> <a href="Ulogin.php"> Back</a> </li>
</ul>
<br>
<br>
<br>
<br>
<br>

</body>
</html>

<?php
// like i said, we must never forget to start the session
session_start();
// is the one accessing this page logged in or not?
if (!isset($_SESSION['basic_is_logged_in'])
|| $_SESSION['basic_is_logged_in'] !== true)

{

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
   mysql_select_db('car_rental');
   $pname=$_SESSION['abc'];
  $ppass=$_SESSION['def'];
  $result='';
   $result=mysql_query("SELECT * FROM `u_detail` WHERE Username='$pname' and Password='$ppass'");

   ?>
   
   
  
   <?php
while($row=mysql_fetch_array($result,true)){

?>


<div class="wrapper">
<form method="post">
  <fieldset class="account-info">
   <label for="name" class="formlabel">Name </label>
    <input id="name" name="name" type="text" class="forminput" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $row['Name'] ?>" required />
 
    <label for="address" class="formlabel">Address</label>
    <input id="address" name="address" type="text" class="forminput" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $row['Address'] ?>" required/>
 
	<label for="state" class="formlabel">State</label>
    <input id="state" name="state" type="text" class="forminput" onkeyup="this.value=this.value.toUpperCase()" value="<?php echo $row['State'] ?>" required/>

   <label for="username" class="formlabel">Username</label>
   <input id="username" name="username" type="text" class="forminput" value="<?php echo $row['Username'] ?>" required/>

  <label for="password" class="formlabel">Password</label>
  <input id="password" name="password" type="text" class="forminput" value="<?php echo $row['Password'] ?>" required/>

  <label for="dob" class="formlabel">Date of Birth</label>
  <input id="dob" name="dob" type="date" class="forminput" value="<?php echo $row['Date_of_Birth'] ?>" required/>

 <label for="mobno" class="formlabel">Mobile No.</label>
  <input id="mobno" name="mobno" type="text" class="forminput" pattern="[7-9]{1}[0-9]{9}" value="<?php echo $row['Mobile_no'] ?>" maxlength="10" required/>	

 
  </fieldset>
	
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="Change" style="margin-right: 30px">
	<input class="btn" type="reset" name="reset" value="  Reset" >
    </fieldset>
</form>
</div>


<?php
}
 ?>

<?php
}
   
if(isset($_POST['submit']))
{
	
	$name= $_POST['name'];
	$address= $_POST['address'];
	$state= $_POST['state'];
	$username= $_POST['username'];
	$password = $_POST['password'];
	$date_of_birth= $_POST['dob'];
	$mobile_no= $_POST['mobno'];
	
		
$sql="
update login_rental set 
Username='$username' ,
Password='$password'
where Username='$pname' AND Password='$ppass'";

		
		
		$tql="
	update u_detail set 
Name='$name' ,
Address='$address' ,
State='$state',
Username='$username' ,
Password='$password',
Date_of_Birth='$date_of_birth',
Mobile_no='$mobile_no'
where Username='$pname' and Password='$ppass'";

	
	if((mysql_query($sql))&&(mysql_query($tql)))
	{
		$_SESSION['abc']=$username;
		$_SESSION['def']=$password;
	header("location: vdetail.php");
	exit;
	}
	else
	{
	echo "not saved";
	echo mysql_error();
	}
	
}

?>
