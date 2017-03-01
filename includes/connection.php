<?php
	include('constants.php');
	$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if(!$con){
		die("Database connection failed : ".mysqli_error($con));
	}
	
	$db_select = mysqli_select_db($con,DB_NAME);
	if (!$db_select) {
		die("Database selection failed: " . mysqli_error($con));
	}
?>