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
   $result=mysql_query('SELECT * FROM `temp2`');

while($row=mysql_fetch_array($result,true)){
$fullname=$row['Fullname'];
$state=$row['State'];
$address=$row['Address'];
$email=$row['Email'];      
$phone=$row['Phone'];      
$zipcode=$row['Zipcode'];                        
$carname=$row['Car_name'];  
$dot=$row['Date_of_Travel']; 
$dlocation=$row['Delivery_Location'];  
$dtime=$row['Delivery_Time']; 
$dlicenseno=$row['License_No'];  
$rent=$row['Rent'];
}
  $sql="INSERT INTO `car_rental`.`b_report` (
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
	mysql_query("truncate table `temp2`");
	mysql_query("truncate table `temp`");
	header("location:Ulogin.php");
	exit;
}	
}
?>