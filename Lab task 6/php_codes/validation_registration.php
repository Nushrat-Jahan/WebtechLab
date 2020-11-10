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
	$hasError=false;
	if(isset($_POST["register"])){
		
		//Full Name
		if(empty($_POST["fname"])){
			$err_fname="<sub>Please write down your full name<sub>";
			$has_error = true;
		}
		else{
			$fname=htmlspecialchars($_POST["fname"]);
		}
		
		//Username
		if(empty($_POST["uname"])){
			$err_uname="<sub>Please give an username</sub>";
			$has_error = true;
		}
		elseif(strpos($_POST["uname"]," ")){
			$err_uname="<sub>No space is allowed in username</sub>";
			$has_error = true;
		}
		elseif(strlen($_POST["uname"])<6){
			$err_uname="<sub>Username must be atleast 6 character</sub>";
			$has_error = true;
		}
		else{
			$uname=htmlspecialchars($_POST["uname"]);
		}
		
		//Password
		 if (empty($_POST["pass"])) {
   	  	$pass = "Password required*";
   	    }
   	    else {
   	  	$getPass = $_POST["pass"];
   	  	if (strpos($getPass, "#") == false && strpos($getPass, "?") == false && $getPass[0] !== "#" && $getPass[0] !== "?") {
   	  	  $pass = "Password must contain a special character [Hint: # / ?].<br>";
   	  	}
   	  	$num_present = false;
   	  	$upper_present = false;
   	  	$lower_present = false;
   	  	for ($i = 0; $i < strlen($getPass); $i++) {
          if ($getPass[$i] >= '0' && $getPass[$i] <= '9') {
          	$num_present = true;
          }
          if ($getPass[$i] >= 'A' && $getPass[$i] <= 'Z') {
          	$upper_present = true; 
          }
          if ($getPass[$i] >= 'a' && $getPass[$i] <= 'z') {
          	$lower_present = true;
          }
   	  	}
   	  	if ($upper_present == false || $lower_present == false) {
   	  	  $pass .= "Password must combine at lest one upper letter and one lower letter.<br>";
   	  	}
   	  	elseif ($num_present == false) {
   	  	  $pass .= "Password must contain at least one numeric character."; 
   	  	}
		else $pass=htmlspecialchars($_POST["pass"]);
   	    }
   	
		
		// Confirm Password
		if(empty($_POST["cpass"])){
			$err_cpass="<sub>Please confirm your password</sub>";
			$has_error = true;
		}	
		else{
			$cpass=htmlspecialchars($_POST["cpass"]);
		}
		
		//Gender
		if(!isset($_POST["gender"])){
			$err_gender="<sub>Plase select a gender</sub>";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		
		
		//Email
		if(empty($_POST["email"])){
			$err_email="<sub>Plase give your email address</sub>";
			$has_error = true;
		}
		elseif(!strpos($_POST["email"],"@")){
			$err_email="<sub>Invalid email address</sub>";
			$has_error = true;
		}
		elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$err_email = "Invalid email format";
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
			$err_city = $err_city. "Select a city";
		}
		else {
			$city=$_POST["city"];
		}
		
		if(!$hasError){
			$users = simplexml_load_file("admins.xml");
			
			$user = $users->addChild("user");
			$user->addChild("fullname",$fname);
			$user->addChild("username",$uname);
			$user->addChild("password",$pass);
			$user->addChild("gender",$gender);
			$user->addChild("email",$email);
			$user->addChild("contact",$contact);
			$user->addChild("city",$city);
			$user->addChild("type","user");
			echo "<pre>";
			print_r($users);
			echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("admins.xml.xml","w");
			fwrite($file,$xml->saveXML());
			
			//header("Location: login.php");
			
		}
	}
	
?>