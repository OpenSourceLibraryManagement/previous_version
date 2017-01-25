<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'library';
	
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if (mysqli_connect_errno()) {
    	die("Connect failed: "+ mysqli_connect_error());
	}
	//echo $conn->host_info;
?>