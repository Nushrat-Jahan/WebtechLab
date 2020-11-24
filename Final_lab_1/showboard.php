<?php
			
			include_once "php_codes/db_connection.php";
			$query="Select * from users";
			$results=mysqli_query($conn,$query);
			if(mysqli_num_rows($results)>0)
			{
				echo '<table border="1" style="border-collapse:collapse;">';
				echo "<tr>";
				echo "<th> ID</th>";
				echo "<th> Username </th>";
				echo "<th> Password </th>";
				echo "<th> Type </th>";
				echo "<th> Edit </th>";
				echo "<th> Delete </th>";
				echo "</tr>";
				
				while($row = mysqli_fetch_assoc($results))
				{
					echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["username"]."</td>";
					echo "<td>".$row["password"]."</td>";
					echo "<td>".$row["user_type"]."</td>";
					echo "<td> <a href='#'>".$row["ed"]."</a></td>";
					echo "<td> <a href='#'>".$row["dt"]."</a></td>";
					echo "</tr>";
				}
				echo "</table>";
			}
?>