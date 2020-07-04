<?php
 session_start();
include_once 'dbconnect.php';

if(isset($_POST['submit']))
{
	$manufacturer_name =  $_POST['manufacturer_name'];
	$model_name =  $_POST['model_name'];
	$category =  $_POST['category'];
	$b_price =  $_POST['b_price'];
	$mileage =  $_POST['mileage'];
	$add_date =  $_POST['add_date'];
	$status =  "Available";
	$registration_year =  $_POST['registration_year'];
	$insurance_id =  $_POST['insurance_id'];
	$gear =  $_POST['gear'];
	$doors =  $_POST['doors'];
	$seats =  $_POST['seats'];
	$tank =  $_POST['tank'];
	$e_no = $_POST['e_no'];
	$v_color = $_POST['v_color'];
	$imagetmp=$_FILES["image"]["name"]; 
	//$imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));
	$sql="INSERT INTO vehicle (manufacturer_name, model_name, category,b_price,mileage,gear,add_date,status,registration_year,insurance_id,doors,seats,tank,image,e_no,v_color)
VALUES
('$manufacturer_name','$model_name','$category','$b_price','$mileage','$gear','$add_date','$status','$registration_year','$insurance_id','$doors','$seats','$tank','$imagetmp','$e_no','$v_color')";
	
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
else
	{
		?>
        <script>alert('successfull !');</script>
        <?php
	}
	}	

?>


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
table, th, td {
    border: 1px solid black;
    
}
.button {
    background-color: #ddd;
    border: none;
    color: #666;
   padding: 8px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}

</style>

</head>
<body>
<ul>
<li><a href="management.php">Dashboard</a></li>
	  <li><a href="about.php">About us</a></li>
		<li><a href="contact.php">Contacts</a></li>
		<li><a href="vehicle.php">Cars Info</a></li>
        <li style= "float: right"><a href="logout.php?logout"> Logout</a></li>
	  
      
    </ul>
	<br></br>

				<h1>ADD Cars</h1>
		

				<form name="myform" action="edit.php" method="post" enctype="multipart/form-data">
				<fieldset>
Manufacturer Name: <input type="text" name="manufacturer_name" required><br></br>
Model Name: <input type="text" name="model_name" required><br></br>
Category: <input type="text" name="category" required><br></br>
Buying Price: <input type="number" name="b_price" required><br></br>
Mileage: <input type="number" name="mileage" required><br></br>
Add Date: <input type="date" name="add_date" required><br></br>
Registration Year: <input type="date" name="registration_year" required><br></br>
Insurance ID: <input type="number" name="insurance_id" required><br></br>
Gear: <input type="text" name="gear" required><br></br>
Seats: <input type="number" name="seats" required><br></br>
Doors: <input type="number" name="doors" required><br></br>
Tank: <input type="number" name="tank" required><br></br>
Engine Number: <input type="text" name="e_no" required><br></br>
Vehicle Color: <input type="text" name="v_color" required><br></br>
						<label>Add Images</label>
						 <input type="file" name="image" required>

   <br></br>

								<button class="button" type="submit" name="submit">
									
										Add New Vehicle
								</button>
					</fieldset>		   
						
			</form> 					
</body>
</html>