<?php include_once "php_codes/validation_login.php" ;?>
<html>
	<head><title>
		Login
	</title></head>
	<body>
		<form action="" method="post" style="width: 800px";>
			<fieldset style="background-color: lightgray;">
				<table align="center">
					<h1 align="center">Login</h1>
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
						<td colspan="2" align="right">
							<input type="submit" name="login" value="login">
						</td>
					</tr>
					<tr>
    				<td>
    					<a href="Registration.php">Not registered yet?</a>
    				</td>
    			</tr>
				</table>
			</fieldset>
		</form>
	</body>
</html>
