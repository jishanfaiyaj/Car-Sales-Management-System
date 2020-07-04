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
	  <li><a href="about.php">About us</a></li>
		<li><a href="contact.php">Contacts</a></li>
 <li><a href="view.php">Cars Info</a></li>
 <li style= "float: right"><a href="registration.php"> Signup</a></li>
        <li style="float: right"><a href="clogin.php">Client Login</a></li>
        <li style= "float: right"><a href="admin.php">Admin Login</a></li>
      
    </ul> 
<br></br>
<form name="myform" action="registration.php" method="post">
<fieldset>
First Name: <input type="text" placeholder="First Name" name="cf_name" required><br></br>
Last Name: <input type="text" placeholder="Last Name" name="cl_name" required><br></br>
Email: <input type="email" placeholder="Email" name="c_email" required><br></br>
Phone: <input type="number" placeholder="Phone" name="c_mobile" required><br></br>
NID: <input type="number" placeholder="NID Number" name="nid" required><br></br>
Address: <input type="text" placeholder="Address" name="c_address" required><br></br>
Password: <input type="password" placeholder="Password" name="c_pass" required ><br></br>
</br>

<input type="Submit" class="button" name="update" value="Submit">
<fieldset>
</form>

</body>
</html>
 <?php
include_once 'dbconnect.php';
if(isset($_POST['update'])){
$cf_name = mysqli_real_escape_string($con, $_POST['cf_name']);
$cl_name = mysqli_real_escape_string($con, $_POST['cl_name']);
$c_email = mysqli_real_escape_string($con, $_POST['c_email']);
$c_mobile = mysqli_real_escape_string($con, $_POST['c_mobile']);
$nid = mysqli_real_escape_string($con, $_POST['nid']);

$c_address = mysqli_real_escape_string($con, $_POST['c_address']);
$c_pass = mysqli_real_escape_string($con, $_POST['c_pass']);
 
$sql="INSERT INTO customer (cf_name, cl_name, c_email, c_mobile,nid,c_address,c_pass)
VALUES
('$cf_name','$cl_name','$c_email','$c_mobile','$nid','$c_address','$c_pass')";
 
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
