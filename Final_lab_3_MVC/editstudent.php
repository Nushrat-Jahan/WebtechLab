<?php 
	include 'admin_header.php';
	include_once "controllers/valid_editstudent.php";
	
?>
<!--editproduct starts -->
<div class="center">
<table>
	<td>
		<form class="form-horizontal form-material" action="" method="post">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" class="form-control" name="edit_name" value="<?php echo $student["name"];?>">
			</div>
			<div class="form-group">
				<h4 class="text">Date of birth:</h4> 
				<input type="text" class="form-control" name="edit_dob" value="<?php echo $student["dob"];?>">
				</select>
			</div>
			<div class="form-group">
				<h4 class="text">Credit:</h4> 
				<input type="text" class="form-control" name="edit_credit" value="<?php echo $student["credit"];?>">
			</div>
			<div class="form-group">
				<h4 class="text">CGPA:</h4> 
				<input type="text" class="form-control" name="edit_cgpa" value="<?php echo $student["cgpa"];?>">
			</div>
			<div class="form-group">
				<h4 class="text">Department:</h4> 
				<input type="text" class="form-control " name="edit_department" value="<?php echo $student["department"];?>"></input>
			</div>
			<div class="form-group text-center">
				
				<input type="submit" class="btn btn-success" value="Edit Student" class="form-control" name="change">
			</div>
		</form>
	</td>
</table>				
</div>

<!--editproduct ends -->
<?php include 'main_footer.php';?>
