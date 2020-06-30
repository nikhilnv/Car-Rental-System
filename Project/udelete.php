<?php
session_start();
// if the user is logged in, unset the session
if (!isset($_SESSION['basic_is_logged_in'])
|| $_SESSION['basic_is_logged_in'] !== true)

{
// not logged in, move to login page
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
   $name=$_SESSION['abc'];
   $pass=$_SESSION['def'];
   mysql_query("delete from login_rental WHERE Username='$name' and Password='$pass'");
   mysql_query("delete from u_detail WHERE Username='$name' and Password='$pass'");
   header('Location: login.php');
exit;
}

   ?>
