<?php
	require_once 'models/db_connect.php';

	if(isset($_POST["login"])){
		if(!$hasError){
			$result = authenticate($_POST["username"],$_POST["password"]);
			if($result){
				header("Location: dashboard.php");
			}
			else{
				echo "Invalid Username or Password";
			}
		}
	}
	
	function authenticate($username,$password){
		$query = "SELECT username FROM add_admin WHERE username='$username' AND password='$password'";
		$result = get($query);
		if(count($result) > 0) return true;
		return false;
	}
	
?>