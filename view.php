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

li a.active {
	 display: block;
    color: white;
	 text-align: center;
	 
    
}
</style>

</head>
<body>

<ul>
<li><a href="index.php">Home</a></li>
	  <li><a href="about.php">About us</a></li>
		<li><a href="contact.php">Contacts</a></li>
		<li><a href="view.php">Cars Info</a></li>
        <li style= "float: right"><a href="registration.php"> Signup</a></li>
        <li style="float: right"><a href="clogin.php">Client Login</a></li>
        <li style= "float: right"><a href="admin.php">Admin Login</a></li>
		
    </ul> 
     
<h1>Details</h1>
	
		<?php
		while ($Row = mysqli_fetch_assoc($res)) { ?>
		
		
				<img src="uploads/<?php $path=explode("*",$Row['image']); echo $path[0]; ?>"  width="500" height="300">
				
				<h3><bold><i><?php echo $Row['model_name']; ?></i></bold></h3>
			
			
				<p>Manufacturer:<?php echo $Row['manufacturer_name']; ?></p>
				<p>Model:<?php echo $Row['model_name']; ?></p>
				<p> Category:  <?php echo $Row['category']; ?> </p>
				<p> Price: $  <?php echo $Row['s_price']; ?></p>
				<p> Color:  <?php echo $Row['v_color']; ?> </p>
				<p> Status:   <?php echo $Row['status']; ?> </P>
				<p> Mileage/hr(km):   <?php echo $Row['mileage']; ?></p>
				<p> Registration-year:  <?php echo $Row['registration_year']; ?> </p>
				<p>Gear Type:   <?php echo $Row['gear']; ?></p>
				<p> Doors:  <?php echo $Row['doors']; ?> </p>
				<p>Seats:   <?php echo $Row['seats']; ?><p>
				<p> Tanks Capacity :  <?php echo $Row['tank']; ?> Litters</p><br></br>
				
			
	
	<?php } ?>
				

</body>
</html>