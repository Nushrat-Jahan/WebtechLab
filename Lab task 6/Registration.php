<?php include_once "php_codes/validation_registration.php" ;?>
<html>
	<head></head>
	<body>
		<div>
		<fieldset>
			<legend><h1>Welcome to Registration</h1></legend>
			* Fields are required
			<form action="" method="post">
				
				<table>
					<tr>
						<td>Full Name:</td>
						<td><input type="text" value="<?php echo $fname?>" name="fname"></td>
						<td><span style="color:red;">*<?php echo $err_fname;?></span>
						</td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
						<td><span style="color:red;">*<?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><span style="color:red;">*<?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td>Confirm Password:</td>
						<td><input type="password" value="<?php echo $cpass?>" name="cpass"></td>
						<td><span style="color:red;">*<?php echo $err_cpass;?></span>
						</td>
					</tr>
					<tr>
						<td align="right">Gender: </td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
						<td>
							<span style="color:red;">*<?php echo $err_gender;?></span>
						</td>
					</tr>
					<tr>
						<td>E-mail Address:</td>
						<td>
						<input type="text" name="email" value="<?php echo $email;?>"></td>
						<td><span style="color:red;">*<?php echo $err_email;?></span>
						</td>
					</tr>
					<tr>
						<td>Contact No:</td>
						<td><input type="text" value="<?php echo $contact?>" name="contact"></td>
						<td><span style="color:red;">*<?php echo $err_contact;?></span>
						</td>
					</tr>
					<tr>
					<td><b>City:</b></td>
					<td>
						<select>
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
						<?php echo $err_city;?>
					</td>
				</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="register" value="register">
						</td>
					</tr>
				</table>
			</form>
		</fieldset>
		</diV>
	</body>
</html>
