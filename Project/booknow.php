<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title>BOOK NOW</title>
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


.dropdown-content {
    display: none;
	top:100%;
    position: absolute;
    background-color: beige;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}


body {
	background-image: url(bg.jpg);
background-size:cover;
margin:0;   	
padding:0;
}


.wrapper {	
	margin-top: 120px;
  margin-bottom: 40px;
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
  background:lightgreen;
  border: 0;
  color:black;
  cursor: pointer;
  font-weight: bold;
  float:left;
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
<li> <a href="Ulogin.php">Back</a> </li>
<li> <a href="#Booknow.php">Booknow</a> </li>
<li> <a href="eligibility.php">Eligibility </a> </li>
<div class="dropdown">
<li> <a href="#fleet.php">Fleet </a> </li>
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
<form method="post" >
  <fieldset class="account-info">
    <label>
    State
    <input type="text" name="state" autocomplete="on" onkeyup="this.value=this.value.toUpperCase()" required>
    </label>
    <label>
    Travelling From
    <input type="text" name="tfrom" autocomplete="on" onkeyup="this.value=this.value.toUpperCase()" required>
    </label>
	<label>
    Travelling To
    <input type="text" name="tto" autocomplete="on" onkeyup="this.value=this.value.toUpperCase()" required>
    </label>
	<label>
	Pick-up Date
<input type="date" name="pud" min='2017-04-01' max='2050-01-01' required>
</label>
<label>
    No.of Days
    <input type="text" name="nod" onkeyup="this.value=this.value.toUpperCase()" required>
    </label>
</fieldset>
  <fieldset class="account-action">
  <input class="btn" type="submit" name="submit" value="SEARCH CAR">
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
   mysql_query("truncate table `temp`");
   
   
   
   
if(isset($_POST['submit']))
{

	$state= $_POST['state'];
	$t_from= $_POST['tfrom'];
	$t_to= $_POST['tto'];
	$pickup_date= $_POST['pud'];
	$no_of_days = $_POST['nod'];
	
	$sql = "INSERT INTO `car_rental`.`temp` (`state`, `t_from`, `t_to`, `pickup_date`, `no_of_days`) 
	VALUES ('$state', '$t_from', '$t_to', '$pickup_date', '$no_of_days')";
	
	if(mysql_query($sql))
	{
		header("Location: booknow2.php");exit;
	}
	else
	{
		echo "not saved";
		echo mysql_error();
	}

}

?>
