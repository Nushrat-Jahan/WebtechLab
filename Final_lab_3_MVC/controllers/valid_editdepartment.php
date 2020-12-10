<?php
	require_once 'models/db_connect.php';
	$id = $_GET["id"];
	$query = "SELECT * FROM department WHERE d_id=$id";
	$department = get($query);
	$department = $department[0];
	if(isset($_POST["change"])){
		
		$name="";
		
		if(empty($_POST["edit_name"])){
			$name = $department["name"];
		}
		else 
		{
			$name = htmlspecialchars($_POST["edit_name"]);
		}
		$query = "update department set name='$name' where d_id=$id";
		execute($query);
		header ("Location: alldepartments.php");
	}	

?>