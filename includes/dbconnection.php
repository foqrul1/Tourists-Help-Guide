<?php
	$server   = "localhost";
	$username = "root";
	$password = "";
	$database = "tourist";
	$conn = mysqli_connect($server,$username,$password,$database);

	if(!$conn){
		echo "Connection Failed".mysqli_connect_error();
	}
?>