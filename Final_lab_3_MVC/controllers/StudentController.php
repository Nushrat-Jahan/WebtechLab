<?php
	require_once 'models/db_connect.php';
	if(isset($_POST['add_student'])){
			
			addStudent($_POST["s_id"],$_POST["name"],$_POST["dob"],$_POST["credit"],$_POST["cgpa"],$_POST["department"]);
			header("Location: allstudents.php");
	}
	function addStudent($s_id,$name,$dob,$credit,$cgpa,$department){
		$query = "INSERT INTO students VALUES('$s_id','$name',$dob,$credit,'$cgpa','$department')";
		execute($query);
	}
	function getAllStudents(){
		//$query = "SELECT p.*,c.name as 'c_name' from students p left join categories c on p.category_id = c.id";
		$query = "SELECT * FROM students";
		$result = get($query);
		return $result;
	}
	function getStudent($id){
		$query = "SELECT * FROM students WHERE s_id=$id";
		$result= get($query);
		if(count($result) > 0) $result = $result[0];
		return $result;
		
	}
	function deleteStudent($id) {
      $query = "delete from students where s_id = '$id'";
	  $result = execute($query);
	  return $result;
  }
	
?>