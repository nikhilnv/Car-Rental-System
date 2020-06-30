<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title>BOOKING REPORT</title>
<link rel="stylesheet" href="viewstyle.css" type="text/css">
</head>

<body>

<ul class="header">
<li> <pre><h1>           <img src="logo-1488441891.png" ></h1></li>
<li style="padding-left:50px;"> <a href="#breport.php"> Booking Report</a> </li>
<li> <a href="viewfeedback.php">View Feedback</a> </li>
<li> <a href="cpassword.php">Change Password</a> </li>
<li class="back"> <a href="admin.php"> Back</a> </li>
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
   $result='';
   $result=mysql_query('SELECT * FROM `b_report`');

   ?>
   <table>
   <tr>
   
<th><?php echo "Fullname" ?></th>
<th><?php echo"State" ?></th>
<th><?php echo "Address" ?></th>
<th> <?php echo "Email" ?></th>      
<th> <?php echo "Phone" ?></th>      
<th> <?php echo  "Zipcode" ?></th>                        
<th> <?php echo  "Car Name" ?></th>
<th> <?php echo  "Rent" ?></th>
<th> <?php echo  "Date of Travel" ?></th>
<th> <?php echo  "Delivery Location" ?></th>
<th> <?php echo  "Delivery Time" ?></th>
<th> <?php echo  "License no" ?></th>
   
</tr>
  
   <?php
while($row=mysql_fetch_array($result,true)){
  
?>

<tr>
   

<td><?php echo $row['Fullname'] ?></td>
<td><?php echo $row['State'] ?></td>
<td><?php echo $row['Address'] ?></td>
<td> <?php echo $row['Email'] ?></td>      
<td> <?php echo $row['Phone'] ?></td>      
<td> <?php echo  $row['Zipcode'] ?></td>                        
<td> <?php echo  $row['Car_name'] ?></td>  
<td> <?php echo  $row['Rent'] ?></td>
<td> <?php echo  $row['Date_of_Travel'] ?></td>  
<td> <?php echo  $row['Delivery_Location'] ?></td>  
<td> <?php echo  $row['Delivery_Time'] ?></td>  
<td> <?php echo  $row['License_No'] ?></td>  

    </tr>
    <?php
    }
    ?>
   </table>
<?php
}
?>
