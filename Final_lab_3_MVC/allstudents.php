<?php 
	include 'admin_header.php';
	require_once 'controllers/StudentController.php';
	$students = getAllStudents();
	
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Students</h3>
	<table class="table table-striped">
		<thead>
			<th>ID#</th>
			<th> Name</th>
			<th>DOB </th>
			<th> Credit</th>
			<th> CGPA</th>
			<th>Department</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($students as $s){
					echo "<tr>";
						echo "<td>".$s["s_id"]."</td>";
						echo "<td>".$s["name"]."</td>";
						echo "<td>".$s["dob"]."</td>";
						echo "<td>".$s["credit"]."</td>";
						echo "<td>".$s["cgpa"]."</td>";
						echo "<td>".$s["department"]."</td>";
						echo '<td><a href="editstudent.php" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					
				}
			?>
			
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'main_footer.php';?>