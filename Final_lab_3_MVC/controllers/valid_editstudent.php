<?php
	require_once 'models/db_connect.php';
	$id = $_GET["id"];
	$query = "SELECT * FROM students WHERE s_id=$id";
	$student = get($query);
	$student = $student[0];
	if(isset($_POST["change"])){
		
		$name="";
		$dob="";
		$credit="";
		$cgpa="";
		$department="";
		
		if(empty($_POST["edit_name"])){
			$name = $student["name"];
		}
		else 
		{
			$name = htmlspecialchars($_POST["edit_name"]);
		}
		if(empty($_POST["edit_dob"])){
			$dob = $student["dob"];	
		}
		else{
			$dob = htmlspecialchars($_POST["edit_dob"]);
		}
		if(empty($_POST["edit_credit"])){
			$credit = $student["credit"];
		}
		else{
			$credit = htmlspecialchars($_POST["edit_credit"]);
		}
		if(empty($_POST["edit_cgpa"])){
			$cgpa = $student["cgpa"];
		}
		else {
			$cgpa = htmlspecialchars($_POST["edit_cgpa"]);
		}
		if(empty($_POST["edit_department"])){
			$department = $student["department"];
		}
		else {
			$department = htmlspecialchars($_POST["edit_department"]);
		}
		$query = "update students set name='$name', dob='$dob', credit=$credit, cgpa='$cgpa' department='$department' where s_id=$id";
		execute($query);
		//echo "User state changed";
		header ("Location: allstudents.php");
	}
	

?>