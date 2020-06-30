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
   $username=$_SESSION['abc'];
   $password=$_SESSION['def'];
   $value=mysql_query("select * from temp2");
   while($row=mysql_fetch_array($value,true))
   {
	   $amt=$row["Rent"];
   }
?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title>PAY</title>
<link rel="stylesheet" href="buy.css" type="text/css">
</head>

<body>

<ul class="header">
<li> <pre><h1>           <img src="logo-1488441891.png" ></h1></li>
<li class="back"> <a href="Ulogin.php"> Back</a> </li>
</ul>

<div class="form-style-3">

<form method="post" onsubmit="alert('Thank you for choosing Car Rental.\n Your car has been booked and will be delivered to you at the specified date and time.');">

<fieldset><legend>Payment Details</legend>
<label for="field1"><span>Card Type</span>
    <select name="bank_name" required>
    <option value=""> - - - - - Please Select - - - - - </option>
    <option>Master card</option>
   <option>Visa card</option>
   <option>Maestro</option>
    </select> </label>
<label for="field5"><span>Name on Card </span><input type="text" class="input-field" name="cardname" placeholder="Exact name as on card" required /></label>
<label for="field2"><span>Card Number </span><input type="text" class="input-field" name="cardn" placeholder="Please enter your card no" maxlength="16" required /></label>
<label for="field3"><span>Expiry Date </span><input type="date" class="input-field" name="edate" required /></label>
<label for="field4"><span>Cvv </span><input type="password" class="input-field" name="cvv" maxlength="3" required /></label>
<label for="field5"><span>Amount </span><input type="text" class="input-field" name="amt" value="<?php echo $amt?>" readonly required /></label>
<input class="btn" type="submit" value="Pay" name="submit" />
</fieldset>
</form>
</div>
</body>
</html>

<?php $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
if(isset($_POST['submit']))
{
	header("location:final.php");
	exit;
}
?>	
