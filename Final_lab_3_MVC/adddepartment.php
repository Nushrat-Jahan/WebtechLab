<?php include 'admin_header.php';?>
<!--addproduct starts -->
	<div class="center">
		<form class="form-horizontal form-material" action="" method="post">
			<div class="form-group">
				<h4 class="text">ID:</h4> 
				<input type="text" class="form-control" name="d_id">
			</div>
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" class="form-control" name="name">
			</div>
			
			<div class="form-group text-center">
				<input type="submit" class="btn btn-success" value="Add Department" name="add_department" class="form-control">
			</div>
		</form>
	</div>

<!--addproduct ends -->
<?php include 'main_footer.php';?>