<?php

	$fname="";
	$err_fname="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$contact="";
	$err_contact="";
	$city="";
	$err_city="";
	$has_error=false;
	if(isset($_POST["ok"])){
		
		//Full name
		if(empty($_POST["fname"])){
			$err_fname="<sub>Full name Required</sub>";
			$has_error =true;	
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
		}
		
		//Username
		if(empty($_POST["uname"])){
			$err_uname="<sub>Username Required</sub>";
			$has_error =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		
		//Password
		if(empty ($_POST["pass"])){
			$err_pass="<sub>Password Required</sub>";
			$has_error = true;
		}
		else if (strlen($_POST["pass"]) < 8) {
			$err_pass = "<sub>Password must be 8 characters long</sub>";
			$has_error = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		//Confirm password
		if(empty ($_POST["cpass"])){
			$err_cpass="<sub>Confirm your password</sub>";
			$has_error = true;
		}
		else if($_POST["cpass"]!=$_POST["pass"]){
			$err_cpass="<sub>Password and confirm password doesn't match</sub>";
			$has_error = true;
		}
		
		
		//Gender
		if(!isset($_POST["gender"])){
			$err_gender="<sub>Please select a gender</sub>";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		
		
		//Email
		if(empty($_POST["email"])){
			$err_email="<sub>Please give your email address</sub>";
			$has_error = true;
		}
		elseif(!strpos($_POST["email"],"@")){
			$err_email="<sub>Invalid email address</sub>";
			$has_error = true;
		}
		else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$err_email = "<sub>Invalid email address</sub>";
			$has_error = true;
		}
		else{
			$email=htmlspecialchars($_POST["email"]);
		}
		
		//Contact
		if(empty($_POST["contact"])){
			$err_contact="<sub>Plase give your contact number</sub>";
			$has_error = true;
		}
		elseif(!is_numeric($_POST["contact"])){
			$err_contact="<sub>Contact number must be numeric</sub>";
			$has_error = true;
		}
		else{
			$contact=htmlspecialchars($_POST["contact"]);
		}
		
		
		//City
	
		 if (empty($_POST["city"])) {
			$err_city = "<sub>Select a city</sub>";
		}

		
		if(!$has_error && isset($_POST["ok"])){
			$users = simplexml_load_file("admins.xml");
			
			$user = $users->addChild("user");
			$user->addChild("fullname",$fname);
			$user->addChild("username",$uname);
			$user->addChild("password",$pass);
			$user->addChild("gender",$gender);
			$user->addChild("email",$email);
			$user->addChild("contact",$contact);
			$user->addChild("type","user");
			//echo "<pre>";
			//print_r($users);
			//echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			$file = fopen("admins.xml","w");
			fwrite($file,$xml->saveXML());
			
			header("Location: Login.php");
			
		}
	}
	
?>