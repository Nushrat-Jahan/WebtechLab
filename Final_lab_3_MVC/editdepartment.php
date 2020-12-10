<?php 
	include 'admin_header.php';
	include_once "controllers/valid_editdepartment.php";
	
?>
<!--editproduct starts -->
<div class="center">
<table>
	<td>
		<form class="form-horizontal form-material" action="" method="post">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" class="form-control" name="edit_name" value="<?php echo $department["name"];?>">
			</div>
			<div class="form-group text-center">
				
				<input type="submit" class="btn btn-success" value="Edit Department" class="form-control" name="change">
			</div>
		</form>
	</td>
</table>				
</div>

<!--editproduct ends -->
<?php include 'main_footer.php';?>
