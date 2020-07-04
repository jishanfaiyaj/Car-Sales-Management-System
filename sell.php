
<?php 
session_start();
include_once 'dbconnect.php';

	$id = $_GET["id"]; 
	
			if(isset($_POST['sold']))
			{	
				$v_id = $id;
				$nid =  $_POST['nid'];
				$cf_name =  $_POST['cf_name'];
				$cl_name =  $_POST['cl_name'];
				$c_email =  $_POST['c_email'];
				$c_mobile =  $_POST['c_mobile'];
				$w_start =  $_POST['w_start'];
				$w_end =  $_POST['w_end'];
				$c_address =  $_POST['c_address'];
				$payment =  $_POST['payment'];
				$c_pass =  $_POST['c_pass'];
				$s_price =  $_POST['s_price'];

				$qrr="INSERT INTO customer(v_id,cf_name,cl_name,c_email,c_mobile,nid,w_start,w_end,c_address,payment,c_pass) 
				VALUES('$v_id','$cf_name','$cl_name','$c_email','$c_mobile','$nid','$w_start','$w_end','$c_address','$payment','$c_pass')";
				
					if(mysqli_query($con,$qrr))
					{
				
					  $result = mysqli_query($con,"UPDATE vehicle SET s_price = '" . $s_price . "',sold_date = '" . $w_start . "', status = 'Sold'  WHERE v_id =$v_id;");
						?>
						<script>document.location = 'vehicle.php';</script>
						<?php
					}
					else
					{
						?>
						<script>alert('error while Inserting data!! Possible Reason : Duplicate Data/Field Missing');</script>
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
		<li><a href="vehicle.php">Vehicle Info</a></li>
      <li><a href="logout.php?logout"> Logout</a></li>
	  
      
    </ul>
	<br></br>
	
					<h4>Add Customer Details to sell Car</h4>
				
			<form class="form-horizontal" method="post">  
				<fieldset>
			
						First Name:
								<br></br>
							<input name="cf_name" type="text" class="form-control" placeholder="First Name" required>	                	
							<br></br>
							Last Name:
								<br></br>
							<input name="cl_name" type="text" class="form-control" placeholder="Last Name" required>	                	
						
							<br></br>
						
							Vehicle ID:
								<br></br>
							<input name="v_id"  type="number" class="form-control" value="<?php echo $id; ?>" disabled>	                	
							<br></br>
							Email:
								<br></br>
							<input name="c_email" type="email" class="form-control" placeholder="Email Address" required>	                	
						
						<br></br>
						Selling Price:
							<br></br>
						 <input type="number" step="any" class="form-control" name="s_price" placeholder="Selling Price" required>
						
							<br></br>
							Address:
								<br></br>
					
							<input type="text" class="form-control" name="c_address" placeholder="Address" required>
			<br></br>
					Payment:
								<br></br>
					
							<input type="text" class="form-control" name="payment" placeholder="Payment" required>
			<br></br>
			NID:
				<br></br>
					
							<input type="number" class="form-control" name="nid" placeholder="National ID/ SSN" required>
					
							
				<br></br>
                                  Mobile:
								  <br></br>
									<input type="number" class="form-control" name="c_mobile" placeholder="Mobile No" required>
							<br></br>                   

							
									Warranty Start Date:
									<br></br>
									<input type="date" class="form-control" name="w_start" required>
								<br></br>
									Warranty End Date:
									<br></br>
									<input type="date" class="form-control" name="w_end"  required>
							
						<br></br>
								
								password:
								<br></br>
								<input type="password" class="form-control" name="c_pass" placeholder="Password For the customer" required>
										<br></br>
								<button class = "button" type="submit" name="sold" id="sold">Sell</button>
								<br><br>
							
									
							</fieldset>
						</form> 
			
	</body>
</html>