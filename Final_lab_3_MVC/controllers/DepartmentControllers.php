<?php
	require_once 'models/db_connect.php';
	if(isset($_POST['add_department'])){
			addDepartment($_POST["d_id"],$_POST["name"]);
			header("Location: alldepartments.php");
	}
	function addDepartment($d_id,$name){
		$query = "INSERT INTO department VALUES('$d_id','$name')";
		execute($query);
	}
	function getAllDepartments(){
		$query = "SELECT * FROM department";
		$result = get($query);
		return $result;
	}
	function getDepartment($id){
		$query = "SELECT * FROM department WHERE d_id=$id";
		$result= get($query);
		if(count($result) > 0) $result = $result[0];
		return $result;
	}
	function deleteStudent($id) {
      $query = "delete from department where d_id = '$id'";
	  $result = execute($query);
	  return $result;
  }
	
?>