<?php
include_once 'dbconnect.php';
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


div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 400px;
}

div.img:hover {
    border: 1px solid #ddd;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
.button {
    background-color: #ddd;
    border: none;
    color: #666;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>

</head>
<body>



<ul>
<li><a href="index.php">Home</a></li>
	  <li><a href="about.php">About us</a></li>
		<li><a href="contact.php">Contacts</a></li>
        <li style= "float: right"><a href="registration.php"> Signup</a></li>
        <li style="float: right"><a href="clogin.php">Client Login</a></li>
        <li style= "float: right"><a href="admin.php">Admin Login</a></li>
		<li><a href="view.php">Cars Info</a></li>
      
    </ul> 
<br></br>
	<h1 style="text-align: center">Car Sales Management System</h1>
<h2>Latest Models</h2>


<div class="img">
  <a target="_blank" href="fjords.jpg">
    <img src="images/7.jpg" alt="Car" width="400" height="200">
  </a>
  <div class="desc">MRP $230</div>
</div>

<div class="img">
  <a target="_blank" href="forest.jpg">
        <img src="images/8.jpg" alt="Car" width="400" height="200">
  </a>
  <div class="desc">MRP $247</div>
</div>

<div class="img">
  <a target="_blank" href= LIGHTS.jpg">
       <img src="images/9.jpg" alt="Car" width="400" height="200">
  </a>
  <div class="desc">MRP $237</div>
</div>
<br></br>
<br></br>



</body>
</html>