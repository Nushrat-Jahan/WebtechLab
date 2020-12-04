<?php
    require_once '../models/db_connect.php';
	$name="";
	$err_name="";
	$username="";
	$hasError=false;
	if(isset($_POST["sign_up"]))
	{
		if(empty($_POST["name"]))
		{
			$err_name="*Username required";
			$hasError=true;
		}
		else
		{
			$name = $_POST["name"];
		}
		if(!$hasError)
		{
			//echo "Ok";
			//dataentry
			addUser($name,$_POST["username"],$_POST["email"],$_POST["password"]);
			header("Location: login.php");
		}
	}
	else if(isset($_POST["login"]))
	{
		if(!$hasError)
		{
		
			$result = authenticate($_POST["username"],$_POST["password"]);
			if($result){
				header("Location: dashboard.php");
			}
		else{
			echo "Invalid username or password";
		}
		}
	}
	function addUser($name,$username,$email,$password)
		{
			$password = md5($password);
			$query = "INSERT INTO users VALUES('$name','$username','$email','$password')";
			execute($query);
		}
	function authenticate($username,$password)
		{
			$password = md5($password);
			$query = "SELECT username and password FROM users where username='$username' AND password='$password'";
			$result=get($query);
			//if(count($result)>0) return $result;
			if(count($result)>0) return true;
			return false;
		}
		
?>