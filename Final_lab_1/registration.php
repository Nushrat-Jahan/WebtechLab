<?php include_once "php_codes/validation_registration.php" ;?>
<html>
	<head></head>
	<body>
		<div>
			<form action="" method="post" style="width: 700px;" align="center">
				<fieldset style="background-color: lightgray;" >
					<table align="center">
						<h1 align="center">Welcome to Registration.</h1>
						<tr><td><p align="center" style="color:green;">* Fields are required</p></td></tr>
						<tr>
						<td>Full name:</td>
						<td><input type="text" value="<?php echo $fname?>" name="fname"></td>
						<td><span style="color:red;">*<?php echo $err_fname;?></span></td>
						</tr>
						<tr>
						<td>Username:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
						<td><span style="color:red;">*<?php echo $err_uname;?></span></td>
						</tr>
						<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><span style="color:red;">*<?php echo $err_pass;?></span></td>
						</tr>
						<tr>
						<td>Confirm password:</td>
						<td><input type="password" value="<?php echo $cpass?>" name="cpass"></td>
						<td><span style="color:red;">*<?php echo $err_cpass;?></span></td>
						</tr>
						<tr>
						<td>Gender: </td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
							<td><span style="color:red;">*<?php echo $err_gender;?></span></td>
						</td>
						</tr>
						<tr>
						<td>E-mail Address:</td>
						<td><input type="text" value="<?php echo $email?>" name="email"></td>
						<td><span style="color:red;">*<?php echo $err_email;?></span></td>
						</tr>
						<tr>
						<td>Contact No:</td>
						<td><input type="text" value="<?php echo $contact?>" name="contact"></td>
						<td><span style="color:red;">*<?php echo $err_contact;?></span>
						</td>
						</tr>
						<tr>
						<td>City:</td>
						<td>
						<select name="city">
							<option disabled selected>Select a city</option>
							<option>Dhaka</option>
							<option>Ahmedabad</option>
							<option>Mumbai</option>		
							<option>Beijing</option>
							<option>Toronto</option>
							<option>Kuala lumpur</option>	
							<option>New York</option>
							<option>Jakarta</option>
							<option>Tokyo</option>								
						</select>
						</td>
						<td>
							<span style="color:red;">*<?php echo "$err_city"; ?></span>
						</td>	
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="ok" value="ok">
						</td>
					</tr>
					</table>
				</fieldset>
			</form>
		
		</diV>
	</body>
</html>
