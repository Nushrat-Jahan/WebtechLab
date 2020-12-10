<?php 
	include 'admin_header.php';
	require_once 'controllers/StudentController.php';
	$students = getAllStudents();
	
?>
<!--All Students starts -->
<form action="" method="post">
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
			<th>Edit</th>
			<th>Delete</th>
			
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
						echo "<td><a href='editstudent.php?id=".$s["s_id"]."' class='btn btn-success'>Edit</a></td>";
						echo "<td><a href='deletestudent.php?id=".$s["s_id"]."' class='btn btn-danger'>Delete</td>";
					echo "</tr>";
					
				}
			?>
			
		</tbody>
	</table>
</div>
</form>
<!--Students ends -->
<?php include 'main_footer.php';?>