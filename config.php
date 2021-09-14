<?php 
	define('db_server', 'localhost');
	define('db_username', 'root');
	define('db_password', '');
	define('db_name', 'school2');


	$con = mysqli_connect(db_server, db_username, db_password, db_name);


	if (!$con) {
		die("ERROR : Could not connect" . mysqli_connect_error());		
	}
?>