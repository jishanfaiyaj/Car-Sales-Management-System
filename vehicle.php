<?php
 session_start();
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


table, th, td {


    border: 1px solid black;
    
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
	
	  
	  <table height="200%"width="100%">
        <thead>
             <tr>
           
                <th>Car id</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Category</th>
                <th>Adding date(m/d/Y)</th>
                <th>Selling date</th>
                <th>Status</th>
                <th>Image</th>
                <th>Buying price</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
	   <?php
            $i = 1;
            while ($vehicle = mysqli_fetch_assoc($res)) { ?>
              <tr>
                <td><?php echo $vehicle['v_id']; ?></td>
                <td><?php echo $vehicle['model_name']; ?></td>
                <td><?php echo $vehicle['manufacturer_name']; ?></td>
                <td><?php echo $vehicle['category']; ?></td>
                <td><?php $date = new DateTime($vehicle['add_date']); echo $date->format('m/d/Y'); ?></td>
                <td><?php if($vehicle['sold_date']=== NULL){ echo 'NULL'; }else{ $date = new DateTime($vehicle['sold_date']); echo $date->format('m/d/Y'); }?></td>
                <td><?php echo $vehicle['status']; ?></td>
                <td><img src="uploads/<?php $path=explode("*",$vehicle['image']); echo $path[0]; ?>" width="200" height="100"></td>
                <td><?php echo $vehicle['b_price']; ?></td>
                <td>
	
					<a href="sell.php?id=<?php echo $vehicle['v_id']; ?>"<?php if($vehicle['status']!="Available") echo 'style="display:none"';  ?>>Sell</a>
                 
       
                    <a href="delete.php?id=<?php echo $vehicle['v_id']; ?>">Delete</a>
					
				</td>
            </tr>
            <?php } ?>
	  
</tbody>
    </table>
	
</body>
</html>