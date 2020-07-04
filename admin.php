<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: management.php");
}

if(isset($_POST['btn-login']))
{
	$u_email = mysqli_real_escape_string($con,$_POST['u_email']);
	$u_pass = mysqli_real_escape_string($con,$_POST['u_pass']);
	
	$res = mysqli_query($con,"SELECT * FROM users WHERE u_email='$u_email'");
	$row = mysqli_fetch_array($res);
	
	$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['u_pass']== $u_pass)
	{
		$_SESSION['user'] = $row['u_id'];
		header("Location: management.php");
	}
	else
	{
		?>
        <script>alert('Username or Password Is Wrong !');</script>
        <?php
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>

<style>
body {
    background-color: lightblue;
}
div {
    width: 500px;
    margin: auto; 
	text-align: center;
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
    </ul>    
				<div>
				<br></br>
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
							<br></br>
							E-mail:
							<br></br>
								<input class="form-control" placeholder="E-mail" name="u_email" type="email" autofocus="" required>
							</div>
						<br></br>
							Password:
							<br></br>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="u_pass" type="password" required>
							</div>
							<br></br>
							<button class="button" type="submit" name="btn-login">Sign In</button>
						</fieldset>
					</form>
				</div>
				
</body>

</html>
