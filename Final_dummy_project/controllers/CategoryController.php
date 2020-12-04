<?php
	require_once '../models/db_connect.php';
	function getAllCategories(){
		$query = "Select * from categories";
		$result = get($query);
		return $result;
	}
?>