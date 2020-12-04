<?php include 'admin_header.php';
	require_once '../controllers/ProductController.php';
	$products = getAllProducts();
?>
<!--All Products starts -->

<div class="center">
	<h3 class="text">All Products</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Category </th>
			<th> Price</th>
			<th> Quantity</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($product as $p){
					echo "<tr>";
						echo "<td>".$p["id"]."</td>";
						echo "<td>".$p["name"]."</td>";
						echo "<td>".$p["category"]."</td>";
						echo "<td>".$p["quantity"]."</td>";
						echo "<td><img src='".$p["image"]."' width='30px' height='30px'</td>"
						echo '<td><a href="editproduct.php" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</a></td>';
					echo "</tr>";
				}
			?>
			<td>1</td>
			<td>Groserry</td>
			<td>100</td>
			<td>10</td>
			<td>10.2.2020</td>
			<td><a href="editproduct.php" class="btn btn-success">Edit</a></td>
			<td><a class="btn btn-danger">Delete</td>
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>