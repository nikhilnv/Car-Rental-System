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
   
   
   
   if (isset($_POST['submit'])) 
   {
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$price=$_POST['price'];
	$timeliness=$_POST['timeliness'];
	$condition=$_POST['condition'];
	$service=$_POST['service'];
	$recommend=$_POST['recommend'];
	$message=$_POST['message'];
	   
	   
  $sql="INSERT INTO `car_rental`.`feedback` (
`Fullname` ,
`Email` ,
`Price` ,
`Timeliness` ,
`Condition` ,
`Service` ,
`Recommend` ,
`Message`   
)
VALUES (
'$fullname', '$email', '$price', '$timeliness', '$condition', '$service', '$recommend', '$message')";

if(mysql_query($sql))
	{
		header("Location: Ulogin.php?status=1");exit;
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
<title>FEEDBACK</title>
</head>
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
background-image: url(feedback.jpg);
background-size:cover;
margin:0;   	
padding:0;
}

.back
{
float:right;
}

.basic-grey {
margin-top: 120px;
  margin-bottom: 80px;
    margin-left:auto;
    margin-right:auto;
    max-width: 500px;
    background: #F7F7F7;
    padding: 25px 15px 25px 10px;
    font: 12px Georgia, "Times New Roman", Times, serif;
    color: #888;
    text-shadow: 1px 1px 1px #FFF;
    border:1px solid #E4E4E4;
}
.basic-grey h1 {
    font-size: 25px;
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom:1px solid #E4E4E4;
    margin: -10px -15px 30px -10px;;
    color: #888;
}
.basic-grey h1>span {
    display: block;
    font-size: 11px;
}
.basic-grey label {
    display: block;
    margin: 0px;
}
.basic-grey label>span {
    float: left;
    width: 20%;
    text-align: left;
    padding-right: 10px;
    margin-top: 10px;
    color: #888;
}
.basic-grey input[type="text"], .basic-grey input[type="email"], .basic-grey textarea{
    border: 1px solid #DADADA;
    color: #888;
    height: 30px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 3px 3px 3px 5px;
    width: 70%;
    font-size: 12px;
    line-height:15px;
    box-shadow: inset 0px 1px 4px #ECECEC;
    -moz-box-shadow: inset 0px 1px 4px #ECECEC;
    -webkit-box-shadow: inset 0px 1px 4px #ECECEC;
}
.basic-grey textarea{
    padding: 5px 3px 3px 5px;
}

.basic-grey textarea{
    height:100px;
}
.basic-grey .button {
    background: #E27575;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #FFF;
    box-shadow: 1px 1px 5px #B6B6B6;
    border-radius: 3px;
    text-shadow: 1px 1px 1px #9E3F3F;
    cursor: pointer;
}
.basic-grey .button:hover {
    background: #CF7A7A
}

</style>
<body>

<ul class="header">
<li> <pre><h1>           <img src="logo-1488441891.png" ></h1></li>
<li style="padding-left:50px;"> <a href="vdetail.php"> View Details</a> </li>
<li> <a href="booknow.php"> Book Car</a> </li>
<li> <a href="#feedback.php">Feedback</a> </li>
<li> <a href="mybooking.php">My Booking</a> </li>
<li class="back"> <a href="Ulogin.php"> Back</a> </li>
</ul>

<form action="" method="post" class="basic-grey">
    <h1>Feedback Form
        <span>Help us serve you better.</span>
    </h1>
    <label>
        <span>Your Name :</span>
        <input id="fullname" type="text" name="fullname" placeholder="Your Full Name" />
    </label>
   
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
    </label>
   
   
    <label>
        <span style= "width: 100%;">How would you rate our prices? :</span><br>
        <input id="price" type="radio" name="price" value="Very Good" />Very Good 
     <input id="price" type="radio" name="price" value="Good" /> Good
<input id="price" type="radio" name="price" value="Fair" /> Fair
<input id="price" type="radio" name="price" value="Poor" /> Poor
<input id="price" type="radio" name="price" value="Very Poor" /> Very Poor	 
	</label>
   <br>
    <label>
        <span style= "width: 100%;">How satisfied are you with the timeliness of car delivery? :</span><br>
        <input id="timeliness" type="radio" name="timeliness" value="Very Satisfied " />Very Satisfied  
     <input id="timeliness" type="radio" name="timeliness" value="Satisfied " /> Satisfied 
<input id="timeliness" type="radio" name="timeliness" value="Neutral" /> Neutral
<input id="timeliness" type="radio" name="timeliness" value="Unsatisfied" /> Unsatisfied	 
	</label>
   <br>
   <br>
   <label>
        <span style= "width: 100%;">How satisfied are you with the condition of the car? :</span><br>
        <input id="condition" type="radio" name="condition" value="Very Satisfied " />Very Satisfied  
     <input id="condition" type="radio" name="condition" value="Satisfied " /> Satisfied 
<input id="condition" type="radio" name="condition" value="Neutral" /> Neutral
<input id="condition" type="radio" name="condition" value="Unsatisfied" /> Unsatisfied	 
	</label>
   <br>
   
    <label>
        <span style= "width: 100%;">How would you rate your overall experience with our service? :</span><br>
        <input id="service" type="radio" name="service" value="Very Good" />Very Good 
     <input id="service" type="radio" name="service" value="Good" /> Good
<input id="service" type="radio" name="service" value="Fair" /> Fair
<input id="service" type="radio" name="service" value="Poor" /> Poor
<input id="service" type="radio" name="service" value="Very Poor" /> Very Poor	 
	</label>
   <br>
   
   
    <label>
        <span style= "width: 100%;">Would you recommend our product / service to other people? :</span><br>
        <input id="recommend" type="radio" name="recommend" value=" Definitely" /> Definitely  
     <input id="recommend" type="radio" name="recommend" value="Probably" />Probably 
<input id="recommend" type="radio" name="recommend" value="Not Sure" /> Not Sure 
<input id="recommend" type="radio" name="recommend" value="Probably Not" />Probably Not 
<input id="recommend" type="radio" name="recommend" value="Definitely Not" />Definitely Not 	 
	</label>
   <br>
   <br>
    <label>
        <span style= "width: 70%;" >What should we change in order to live up to your expectations? :</span>
        <textarea id="message" name="message" placeholder="Enter Message"></textarea>
    </label>
        
     <label>
        <span>&nbsp;</span>
        <input type="submit" name="submit" class="button" value="Send" />
    </label>    
</form>
</body>
</html>