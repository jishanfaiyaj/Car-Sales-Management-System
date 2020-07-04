<?php

session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: admin.php");
}
$id=$_SESSION['user'];
$res=mysqli_query($con,"SELECT * FROM vehicle");
?>
<!DOCTYPE html>
<html>
<head>

<style>
body {
    background-color: lightblue;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
}

li a {
    display: block;
    color: #666;
  text-align: center;
    padding: 16px 20px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
	text-align: center;
}

li a.active {
	 display: block;
    color: white;
	 text-align: center;
	 .row::after {
    content: "";
    clear: both;
    display: table;
}
.row::after {
    content: "";
    clear: both;
    display: table;
}
[class*="col-"] {
    float: left;
    padding: 15px;
}

.col-3 {width: 25%;}


.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.menu li {
    padding: 12px;
    margin-bottom: 7px;
    background-color: #33b5e5;
    color: grey;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu li:hover {
    background-color: grey;
}	 
    
}
</style>

</head>
<body>
<ul>
<li><a href="index.php">Home</a></li>

	  <li><a href="about.php">About us</a></li>
		<li><a href="contact.php">Contacts</a></li>
      <li style= "float: right"><a href="logout.php?logout"> Logout</a></li>
      
    </ul>
	<br></br>
	<div class="row">
<div class="col-3 menu">
<ul>
		<li><a href="useradd.php">Add Employee</a></li>
</ul>
<br></br>
<ul>
		<li><a href="edit.php">Add Car</a></li>
</ul>
<br></br>
<ul>		
     <li><a href="vehicle.php">Cars Info</a></li>
</ul>	
<br></br>
<ul> 	
	 <li><a href="sold.php">Sold Cars</a></li>
	</ul>  

<div>
<div>
</body>
</html>