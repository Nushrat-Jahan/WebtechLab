<?php
	require_once '../models/db_connect.php';
	function getAllBooks(){
		$query = "SELECT * FROM books";
		$result = get($query);
		return $result;
	}
	function getBookDetail($id){
		$query = "SELECT * FROM books WHERE id=$id";
		$result= get($query);
		if(count($result) > 0) $result = $result[0];
		return $result;
	}
	function searchBook($name){
		$query =  "Select id,name,author,edition from books where name like '%$name%'";
		$result = get($query);
		return $result;
	}
	
?>