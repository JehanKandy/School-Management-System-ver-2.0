<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADDED</title>
</head>
<body>
	<?php
		include "config.php";

		$index = $_POST['index_no'];
		$fn = $_POST['fn'];
		$ln = $_POST['ln'];
		$tp = $_POST['tp'];

		$q = "insert into teacher values('$index','$fn','$ln','$tp')";
		$result = mysqli_query($con, $q);

		if (!$result) {
			die("ERROR : ".mysqli_connect_error());
		}else{
			echo "Recode Add Successful....!";
		}

	?>
</body>
</html>