<?php 
	include 'main_header.php';
	require_once 'controllers/UserController.php';
?>

<!--login starts -->
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form action="" method="post" onsubmit="return validate()" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" id="username" name="username" class="form-control"><span id="err_username"></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" id="password" name="password" class="form-control"><span id="err_password"></span>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" class="btn btn-danger" name="login" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="#" >Not registered yet? Sign Up</a>
		</div>
	</form>
	<script src="js/valid_login.js"></script>
</div>

<!--login ends -->
<?php include 'main_footer.php';?>