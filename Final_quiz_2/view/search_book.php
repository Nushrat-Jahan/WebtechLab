<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>

<?php
	include '../controller/BookController.php';
	$result = searchBook($_GET["name"]);
	$books = getAllBooks();
	echo " 
	   	<table class='table table-striped'>
			<thead>
				<th>ID#</th>
				<th> Name</th>
				<th>Author </th>
				<th>Edition</th>
				<th>Book Image</th>
			</thead>
		<tbody>
	    ";
	    if($_GET["name"]=="")
	    {
	    	foreach($books as $b){
					echo "<tr>";
						echo "<td>".$b["id"]."</td>";
						echo "<td>".$b["name"]."</td>";
						echo "<td>".$b["author"]."</td>";
						echo "<td>".$b["edition"]."</td>";
						echo "<td><a href='book_detail.php?id=".$b["id"]."'>
						<img src = 'resources/book_default.png' width=60px height=80px></a></td>";
					echo "</tr>";
					}
	    }
	if(count($result)>0)
	{
		
		foreach($result as $b){
					echo "<tr>";
						echo "<td>".$b["id"]."</td>";
						echo "<td>".$b["name"]."</td>";
						echo "<td>".$b["author"]."</td>";
						echo "<td>".$b["edition"]."</td>";
						echo "<td><a href='book_detail.php?id=".$b["id"]."'>
						<img src = 'resources/book_default.png' width=60px height=80px></a></td>";
					echo "</tr>";
					
				}
	}
	 echo "</tbody></table>";
?>
