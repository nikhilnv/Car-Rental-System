<?php
session_start();	
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   mysql_select_db("car_rental");
   $price=$_GET["price"];
   $name=$_GET["name"];
   $username=$_SESSION['abc'];
   $password=$_SESSION['def'];
   $value=mysql_query("select * from temp");
   while($row=mysql_fetch_array($value,true))
   {
	   $pdate=$row["pickup_date"];
	   $nod=$row["no_of_days"];
   }
   $detail=mysql_query("select * from u_detail where Username='$username' and Password='$password'");
   while($row=mysql_fetch_array($detail,true))
   {
	   $fname=$row["Name"];
	   $address=$row["Address"];
	$state=$row["State"];
	$mob=$row["Mobile_no"];
   }

   
   
   $tprice=$price*$nod;
   
   if (isset($_POST['submit'])) 
   {
	   
	$fullname=$_POST['fullname'];
	$state=$_POST['state'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$zipcode=$_POST['zipcode'];
	$carname=$_POST['carname'];
	$dot=$_POST['dot'];
	$dlocation=$_POST['dlocation'];
	$dtime=$_POST['dtime'];
	$dlicenseno=$_POST['dlicenseno'];
	$rent=$_POST['price'];
   
	   
  $sql="INSERT INTO `car_rental`.`temp2` (
`Fullname` ,
`State` ,
`Address` ,
`Email` ,
`Phone` ,
`Zipcode` ,
`Car_name` ,
`Date_of_Travel` ,
`Delivery_Location` ,
`Delivery_Time` ,
`License_No`,
`Rent`  
)
VALUES (
'$fullname', '$state', '$address', '$email', '$phone', '$zipcode', '$carname', '$dot', '$dlocation', '$dtime', '$dlicenseno','$rent'
)";

if(mysql_query($sql))
	{
		header("Location: payment.php");exit;
	}
	else
	{
		echo "not saved";
		echo mysql_error();
	}

	echo "sql query: $sql;";exit;

   }
?>


<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title>BOOK</title>
<link rel="stylesheet" href="buy.css" type="text/css">
</head>

<body>

<ul class="header">
<li> <pre><h1>           <img src="logo-1488441891.png" ></h1></li>
<li class="back"> <a href="booknow2.php"> Back </a> </li>
</ul>

<div class="form-style-3">
<form action="" method="post">
<fieldset><legend>Personal</legend>
<label for="field1"><span>Fullname </span><input type="text" class="input-field" name="fullname" value="<?php echo $fname?>" readonly required/></label>
<label for="field2"><span>State </span><input type="text" class="input-field" name="state" value="<?php echo $state?>" readonly required/></label>
<label for="field3"><span>Address </span><input type="text" class="input-field" name="address" value="<?php echo $address?>" readonly required/></label>
<label for="field4"><span>Email </span><input type="email" class="input-field" name="email"  required/></label>
<label for="field5"><span>Phone </span><input type="text" class="input-field" name="phone" value="<?php echo $mob?>" pattern="[7-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaining 9 digit with 0-9" maxlength="10" required/></label>
<label for="field6"><span>Zip code </span><input type="text" class="input-field" name="zipcode" pattern="[0-9]{6}" title="Six digit zip code" maxlength="6" required/></label>
</fieldset>

<fieldset><legend>Car Information and Delivery Arrangement</legend>
<label for="field7"><span>Car name </span><input type="text" class="input-field" name="carname" value="<?php echo $name?>" readonly required/></label>
<label for="field7"><span>Price </span><input type="text" class="input-field" name="price" value="<?php echo $tprice?>" readonly required/></label>
<label for="field8"><span>Pick-up Date </span><input type="date" class="input-field" name="dot" value="<?php echo $pdate?>" min='2017-04-01' max='2050-01-01' required/></label>
<label for="field9"><span>Delivery Location </span><input type="text" class="input-field" name="dlocation" required/></label>
<br />
<label for="field10"><span>Delivery Time </span><input type="time" class="input-field" name="dtime" required/></label>
<label for="field11"><span>Driver License No </span><input type="text" class="input-field" name="dlicenseno" maxlength="17" required/></label>
<br />
<input type="submit" name="submit"  value="Submit" /></label>
</fieldset>

</form>
</div>
  </body>
  </html>