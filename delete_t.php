<?php 
include "config.php";

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['index_no'])) {
	$index_no = $_GET['index_no'];

	// write delete query
	$q = "DELETE FROM `teacher` WHERE `index_no`='$index_no'";

	// Execute the query

	$result = mysqli_query($con,$q);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
	}else{
		die("ERROR : ".mysqli_connect_error());
	}
}

?>