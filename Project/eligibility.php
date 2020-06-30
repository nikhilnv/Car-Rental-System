<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width,initial-scale=1">
<head>
<title> Eligibility</title>
<link rel="stylesheet" href="home.css" type="text/css">
<style>
body
{
margin:0; 
padding:0;
background-color:#f2f2f2;
}
 

div img {
	border-radius:25px;
	border: 2px solid cyan;
    padding: 20px; 
    width: 200px;
    height: 150px; 
}

.imgContainer img:hover {
    box-shadow: 0 0 5px 4px rgba(0, 140, 186, 0.5);
    background-color:cyan;
}

.imgContainer{
	margin:180px 0 0 0;
	margin-left:80px;
	float:left;
	z-index:-1;
	position:relative;
	left:0px;
	}
	
</style>
</head>
<body>

<ul class="header">
<li> <a href="Signup.php">Signup</a> </li>
<li> <a href="Login.php"> Login </a> </li>
<li> <a href="#eligibility.php"> Eligibility </a> </li>
<div class="dropdown">
<li> <a href="#fleet.php"> Fleet </a> </li>
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


<div class="imgContainer">
 <figure>
  <img src="user.png" >
  <figcaption><b>Users must be 18 years of age or older</b></figcaption>
</figure> 
</div>

<div class="imgContainer">
 <figure>
  <img src="licence.png" >
  <figcaption><b>Users must possess a valid Light Motor<br />Vehicle driving license</b></figcaption>
</figure> 
</div>

<div class="imgContainer">
 <figure>
  <img src="no-drug.png" >
  <figcaption><b> Users must not be undergoing any <br />alcohol/drug/other traffic violations in the past</b></figcaption>
</figure> 
</div>


</body>
</html>
