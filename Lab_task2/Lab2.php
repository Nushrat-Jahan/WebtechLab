<?php

	
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirm_password="";
	$err_confirm_password="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$err_bdy="";
	$bdy="";
	$gender="";
	$err_gender="";
	$us="";
	$err_us="";
	$bio="";
	$err_bio="";
	
	$has_error = false;
	
	if(isset($_POST["register"])){
		
		//Name
		if(empty($_POST["name"])){
			$err_name="<sub>Please write down your name<sub>";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
			$err_name="";
			$has_error = false;
		}
		
		//Username
		if(empty($_POST["username"])){
			$err_username="<sub>Please give an username</sub>";
			$has_error = true;
		}
		elseif(strpos($_POST["username"]," ")){
			$err_username="<sub>No space is allowed in username</sub>";
			$has_error = true;
		}
		elseif(strlen($_POST["username"])<6){
			$err_username="<sub>Username must be atleast 6 character</sub>";
			$has_error = true;
		}
		else{
			$username=htmlspecialchars($_POST["username"]);
			$err_username="";
			$has_error = false;
		}
		
		//Password
		if(empty($_POST["password"])){
			$err_password="<sub>Please give your password</sub>";
			$has_error = true;
		}
		elseif(strlen($_POST["password"])<8){
			$err_password="<sub>Password must be atleast 8 character</sub>";
			$has_error = true;
		}
		elseif(!strpos($_POST["password"],"?") && !strpos($_POST["password"],"#")){
			$err_password="<sub>Password must have special character ? or #</sub>";
			$has_error = true;
		}
		elseif(!strpos($_POST["password"],"0") && !strpos($_POST["password"],"1")
				&& !strpos($_POST["password"],"2") && !strpos($_POST["password"],"3")
				&& !strpos($_POST["password"],"4") && !strpos($_POST["password"],"5")
				&& !strpos($_POST["password"],"6") && !strpos($_POST["password"],"7")
				&& !strpos($_POST["password"],"8") && !strpos($_POST["password"],"9")){
			$err_password="<sub>Password must have a neumeric value</sub>";
			$has_error = true;
		}		
		elseif(!ctype_upper($_POST["password"])){
			$err_password="<sub>Passward must contain atleast an uppercase character</sub>";
			$has_error = true;
		}
		elseif(!ctype_lower($_POST["password"])){
			$err_password="<sub>Passward must contain atleast a lowercase character</sub>";
			$has_error = true;
		}
		else{
			$password=htmlspecialchars($_POST["password"]);
			$err_password="";
			$has_error = false;
		}
		
		// Confirm Password
		if(empty($_POST["confirm_password"])){
			$err_confirm_password="<sub>Please confirm your password</sub>";
			$has_error = true;
		}
		elseif($_POST["password"]!= $_POST["confirm_password"]){
			$err_confirm_password="<sub>Password and Confirm password must be same</sub>";
			$has_error = true;
		}	
		else{
			$confirm_password=htmlspecialchars($_POST["confirm_password"]);
			$err_confirm_password="";
			$has_error = false;
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
			$err_email="";
			$has_error = false;
		}
		
		//Phone
		if(empty($_POST["phone"])){
			$err_phone="<sub>Plase give your phone number</sub>";
			$has_error = true;
		}
		elseif(!is_numeric($_POST["phone"])){
			$err_phone="<sub>Phone number must be numeric</sub>";
			$has_error = true;
		}
		else{
			$phone=htmlspecialchars($_POST["phone"]);
			$err_phone="";
			$has_error = false;
		}
		
		//Address
		if(empty($_POST["address"])){
			$err_address="<sub>Plase give your address</sub>";
			$has_error = true;
		}
		else{
			$address=htmlspecialchars($_POST["address"]);
			$err_address="";
			$has_error = false;
		}
		
		//Birth date
		if(!isset($_POST["bdy"])){
			$err_bdy="<sub>Please select your birth date</sub>";
			$has_error = true;
		}
		else{
			$bdy = $_POST["bdy"];
			$err_bdy="";
			$has_error = false;
		}
		
		//Gender
		if(!isset($_POST["gender"])){
			$err_gender="<sub>Plase select a gender</sub>";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
			$err_gender="";
			$has_error = false;
		}
		
		//About us
		if(!isset($_POST["us"])){
			$err_us = "<sub>Atleast select one option</sub>";
			$has_error = true;
		}
		else{
			$us=$_POST["us"];
			$err_us ="";
			$has_error = false;
		}
		
		//Bio
		if(empty($_POST["bio"])){
			$err_bio= "<sub>Please write your bio</sub>";
			$has_error = true;
		}
		else{
			$bio=$_POST["bio"];
			$err_bio="";
			$has_error = false;
		}
		
		if(!$has_error){
			echo $name;
		}
	}
	
?>
<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<legend><h1>Club Member Registration</h1></legend>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="name"> <?php echo $err_name;?></td>
					</tr>
					<tr>
						<td align="right">Username:</td>
						<td><input type="text" name="username"> <?php echo $err_username;?></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password"><?php echo $err_password;?></td>
					</tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="confirm_password"><?php echo $err_confirm_password;?></td>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text" name="email"><?php echo $err_email;?></td>
					</tr>
					<tr>
						<td align="right">Phone:</td>
						<td><input type="text" placeholder="code" size="3" name="phone"><?php echo $err_phone;?>
						     - <input type="text" placeholder="Number" size="9" name="phone"><?php echo $err_phone;?>
						</td>
					</tr>
						<td align="right">Address:</td>
						<td><input type="text" placeholder="Street Address" name="address"><?php echo $err_address;?></td>
					<tr>
					</tr>
						<td></td>
						<td><input type="text" placeholder="City" size="6" name="address"><?php echo $err_address;?> - 
							<input type="text" placeholder="State" size="6" name="address"><?php echo $err_address;?>
						</td>
					<tr>
					</tr>
						<td></td>
						<td><input type="text" placeholder="Postal/Zip Code" name="address"><?php echo $err_address;?>
						</td>
					<tr>
					</tr>
						<td align="right">Birth Date:</td>
						<td>
						<select>
							<option disabled selected>Day</option>
							<?php
								for($i=1; $i<=31; $i++)
								{
									echo "<option> $i </option>";
								}
							?>													
						</select>
						<select>
							<option disabled selected>Month</option>
							<?php
								$arr=array("January","February","March","April","May","June","July","August",
								"september","October","November","December");
								foreach($arr as $a)
								{
									echo "<option>$a</option>";
								}
							?>
							
						</select>
						<select>
						    <option disabled selected>Year</option>
							<?php
								for($i=1995; $i<=2005; $i++)
								{
									echo "<option> $i </option>";
								}
							?>							
						</select>
						<?php echo $err_bdy;?>
					<tr>
					</tr>
					<tr>
						<td align="right">Gender: </td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
							<?php echo $err_gender;?>
						</td>
					</tr>
					<tr>
						<td align="right">Where did you hear<br> about us?</td>
						<td>
							<input type="checkbox" name="us[]" value="A_Friend_or_Colleague"> A Friend or Colleague<?php echo $err_us;?><br>
							<input type="checkbox" name="us[]" value=" Google"> Google<br>
							<input type="checkbox" name="us[]" value="Blog_Post">Blog Post<br>
							<input type="checkbox" name="us[]" value="News_Article">News Article<br>
							
						</td>
					</tr>
					<tr>
						<td align="right">Bio:</td>
						<td>
							<textarea name="bio" ></textarea>
							<?php echo $err_bio;?>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>