<?php
session_start();
include_once 'dbconnect.php';
	
	$id = $_GET["id"];

//$id=$v_id;			

$sql = "DELETE FROM vehicle WHERE v_id=$id";
?>
<script>document.location = 'vehicle.php';</script>
<?php
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
else
{}
	
			
	
 mysqli_close($con);
?>

