<?php include 'admin_header.php';
	include_once 'controllers/StudentController.php';
?>
<!--addproduct starts -->
	<div class="center">
		<form class="form-horizontal form-material" action="" method="post">
			<div class="form-group">
				<h4 class="text">ID:</h4> 
				<input type="text" class="form-control" name="s_id">
			</div>
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" class="form-control" name="name">
			</div>
			<div class="form-group">
				<h4 class="text">Date of Birth:</h4> 
				<input type="text" class="form-control"name="dob">
			</div>
			<div class="form-group">
				<h4 class="text">Credit:</h4> 
				<input type="text" class="form-control" name="credit">
			</div>
			<div class="form-group">
				<h4 class="text">CGPA:</h4> 
				<input type="text" class="form-control" name="cgpa">
			</div>
			<div class="form-group">
				<h4 class="text">Department:</h4> 
				<input type="text" class="form-control" name="department">
			</div>
			<div class="form-group text-center">
				<input type="submit" class="btn btn-success" value="Add Student" name="add_student" class="form-control">
			</div>
		</form>
	</div>

<!--addproduct ends -->
<?php include 'main_footer.php';?>