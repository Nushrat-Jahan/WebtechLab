<?php
	$username="root";
	$servername="localhost";
	$password="";
	$db = "final";
			
			
	$conn = mysqli_connect($servername,$username,$password,$db);
	if(!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
?>