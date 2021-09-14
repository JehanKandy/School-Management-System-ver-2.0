<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADD TEACHER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 align="center">ADD TEACHER</h1><br>
			<a href="index.php"><button class="h_button">To Home</button></a>
	
		<hr>
		<br>
	<form action="added_teacher.php" method="POST">
		
		<table border="0" align="center">
			<tr>
				<td>
					<p class="p2">Enter index Number </p>
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="index_no" class="row">
				</td>
			
		</tr>
			<tr>
				<td>
					<p class="p2">Enter First Name  </p>
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="fn" class="row">
				</td>			
		</tr>
			<tr>
				<td>
					<p class="p2">Enter Last Name  </p>
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="ln" class="row">
				</td>			
		</tr>
				<tr>
				<td>
					<p class="p2">Tele Phone Number </p>
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="tp" class="row">
				</td>			
		</tr>	
		<tr>
			<td>
				<input type="reset" value="Clear">
			</td>
			<td>
				
			</td>
			<td>
				<input type="submit" name="Submit">
			</td>
		</tr>
	</table>
	</form>
	<hr>


</body>
</html>