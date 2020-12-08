<?php
	
	require_once 'dbconnect.php';

	$hasError=false;
	if(isset($_POST["register"])){
	
		if(!$hasError){
			addUser(htmlspecialchars($_POST["name"]),htmlspecialchars($_POST["username"]),
			htmlspecialchars($_POST["email"]),htmlspecialchars($_POST["phone"]),htmlspecialchars($_POST["password"]));
			header("Location: ../login.php");
		}
	}
	elseif(isset($_POST["login"])){
		if(!$hasError){
			$result = authenticate(htmlspecialchars($_POST["username"]),htmlspecialchars($_POST["password"]));
			if($result){
				header("Location: ../dashboard.php");
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
		return false;
	}
	
	function getUser(){
        $query="SELECT * FROM users";
        return get($query);
    }
	
?>