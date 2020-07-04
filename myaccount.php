<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['cus']))
{
	header("Location: clogin.php");
}
$id=$_SESSION['cus'];

$res=mysqli_query($con,"SELECT * FROM customer JOIN vehicle ON customer.v_id=vehicle.v_id WHERE customer.c_id=$id;");
$Row=mysqli_fetch_array($res);


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
		<li><a href="viewdetails.php">View Cars</a></li>
      <li style= "float: right"><a href="logout.php?logout"> Logout</a></li>
      
    </ul>
	<br></br>
		
		<h3 class="text-uppercase">Information for User : <?php echo $Row['c_email']; ?><h3>
	
			<img src="uploads/<?php $path=explode("*",$Row['image']); echo $path[0]; ?>" width="600" height="300">
			</div>
			<p><h3><bold><i><?php echo $Row['model_name']; ?></i></bold></h3><p><br>
		</div>
		<div>
			<p><h4><i>Make:<?php echo $Row['manufacturer_name']; ?><i></h4></p>
			<p><h4><i>Model:<?php echo $Row['model_name']; ?><i></h4></p>
			<p> Category:  <?php echo $Row['category']; ?> </p>
			<p> Price: $  <?php echo $Row['s_price']; ?></p>
		
			<p> Status:   <?php echo $Row['status']; ?> </P>
			<p> Mileage/hr(km):   <?php echo $Row['mileage']; ?></p>
			<p> Registration-year:  <?php echo $Row['registration_year']; ?> </p>
			<p>Gear Type:   <?php echo $Row['gear']; ?></p>
			<p> Doors:  <?php echo $Row['doors']; ?> </p>
			<p>Seats:   <?php echo $Row['seats']; ?><p>
			<p> Tanks Capacity :  <?php echo $Row['tank']; ?>  Litters</p>
			
			<p> Warrenty Start Date :  <?php echo $Row['w_start']; ?></p>
			<p> Warrenty End date :  <?php echo $Row['w_end']; ?></p>
			
		</div>

	</div>
</div>

</body>
</html>