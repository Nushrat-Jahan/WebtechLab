<?php
	
	require_once 'db_connect.php';

	$hasError=false;
	if(isset($_POST["register"])){
	
		if(!$hasError){
			addUser($_POST["name"],$_POST["username"],$_POST["email"],$_POST["phone"],$_POST["password"]);
			header("Location: login.php");
		}
	}
	elseif(isset($_POST["login"])){
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
	function addUser($name,$username,$email,$phone,$password)
	{
		$password = md5($password);
		$query= "INSERT INTO users VALUES ('$name','$username','$email','$phone','$password')";
		execute($query);	
	}
	function authenticate($username,$password){
		$password = md5($password);
		$query = "SELECT username FROM users WHERE username='$username' AND password='$password'";
		$result = get($query);
		if(count($result) > 0) return true;
		//if(count($result) > 0) return $result;
		return false;
	}
	
?>