<?php 
	include_once'php_codes/valid_user.php';
?>

<html>
	<head></head>
	<body>
		<form method="post" onsubmit="return validate()" action="">
			<h1>Welcome to Resigtration</h1>
			<table>
				<tr>
					<td>Name</td>
					<td><input type="text" id="name" name="name" placeholder="Name"><span id="err_name"></span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" placeholder="Username"><span id="err_username"></span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" placeholder="Password"><span id="err_password"></span></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email" placeholder="Email"><span id="err_email"></span></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" id="phone" name="phone" placeholder="Phone"><span id="err_phone"></span></td>
				</tr>
				<tr>
					<td><input type="submit" value="Register" name="register"></td>
				</tr>
			</table>
		</form>
		<script src="js/valid_registration.js"></script>
	</body>
	
</html>


