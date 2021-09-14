<?php 
include "config.php";

//write the query to get data from users table

$q = "SELECT * FROM teacher";

//execute the query

$result = mysqli_query($con,$q);

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<h2>Students</h2>
		<a href="add_teacher.php"><button class="button">New Teacher</button></a>
<table class="styled-table">
	<thead>
		<tr>
		<th>Index NO</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Mobile Number</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			while ($r = mysqli_fetch_assoc($result)) {
		  
		?>

					<tr>
					<td><?php echo $r['index_no']; ?></td>
					<td><?php echo $r['fname']; ?></td>
					<td><?php echo $r['lname']; ?></td>
					<td><?php echo $r['tp_no']; ?></td>

					<td><a class="button" href="update_t.php ?index_no=<?php echo $r['index_no']; ?>">Update</a>&nbsp;<a class="button" href="delete_t.php ?index_no=<?php echo $r['index_no']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>