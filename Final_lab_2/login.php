<?php 
	include_once'php_codes/valid_user.php';
?>

<html>
	<head></head>
	<body>
		<form method="post" onsubmit="return validate()" action="">
			<h1>Welcome to Login</h1>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" id="username" name="username" placeholder="Username"><span id="err_username"></span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" placeholder="Password"><span id="err_password"></span></td>
				</tr>
				<tr>
					<td><input type="submit" value="Login" name="login"></td>
				</tr>
			</table>
		</form>
		<script src="js/valid_login.js"></script>
	</body>
	
</html>


