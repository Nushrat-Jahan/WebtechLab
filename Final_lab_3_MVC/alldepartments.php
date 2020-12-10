<?php 
	include 'admin_header.php';
	require_once 'controllers/DepartmentControllers.php';
	$department = getAllDepartments();
	
?>
<!--All Students starts -->
<form action="" method="post">
<div class="center">
	<h3 class="text">All Departments</h3>
	<table class="table table-striped">
		<thead>
			<th>ID#</th>
			<th> Name</th>
			<th>Edit</th>
			<th>Delete</th>
			
		</thead>
		<tbody>
			<?php
				foreach($department as $d){
					echo "<tr>";
						echo "<td>".$d["d_id"]."</td>";
						echo "<td>".$d["name"]."</td>";
						echo "<td><a href='editdepartment.php?id=".$d["d_id"]."' class='btn btn-success'>Edit</a></td>";
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					
				}
			?>
			
		</tbody>
	</table>
</div>
</form>
<!--Students ends -->
<?php include 'main_footer.php';?>