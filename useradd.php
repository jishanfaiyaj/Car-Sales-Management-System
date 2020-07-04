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
<li><a href="index.php">Home</a></li>
	
<li><a href="management.php">Dashboard</a></li>
	  <li><a href="about.php">About us</a></li>
		<li><a href="contact.php">Contacts</a></li>
		<li style= "float: right"><a href="logout.php?logout"> Logout</a></li>
    </ul>
<br></br>	
<form name="myform" action="useradd.php" method="post">
<fieldset>
<br></br>
First Name: <input type="text"  placeholder="First Name" name="f_name"required><br></br>
last Name: <input type="text" placeholder="Last Name" name="l_name" required><br></br>
Email: <input type="email" placeholder="Email" name="u_email" required><br></br>
Phone: <input type="number" placeholder="Phone" name="u_mobile" required><br></br>
Type: <input type="text" placeholder="Type" name="u_type" required><br></br>
Address: <input type="text" placeholder="Address" name="u_address" required><br></br>
Password: <input type="password" placeholder="Password" name="u_pass" required><br></br>
</br>

<input type="Submit" class="button" name="update" value="Submit">
</fieldset>
</form>

</body>
</html>
 <?php
 session_start();

include_once 'dbconnect.php'; 
if(isset($_POST['update'])){
$f_name = mysqli_real_escape_string($con, $_POST['f_name']);
$l_name = mysqli_real_escape_string($con, $_POST['l_name']);
$u_email = mysqli_real_escape_string($con, $_POST['u_email']);
$u_mobile = mysqli_real_escape_string($con, $_POST['u_mobile']);
$u_type = mysqli_real_escape_string($con, $_POST['u_type']);
$u_address = mysqli_real_escape_string($con, $_POST['u_address']);
$u_pass = mysqli_real_escape_string($con, $_POST['u_pass']);
 
$sql="INSERT INTO users (f_name, l_name, u_email, u_mobile,u_type,u_address,u_pass)
VALUES
('$f_name','$l_name','$u_email','$u_mobile','$u_type','$u_address','$u_pass')";
 
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

