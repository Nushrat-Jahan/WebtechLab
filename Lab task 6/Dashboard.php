
<?php
  if (!isset($_COOKIE["username"])) {
    header("Location: Login.php");
  }
?>
<html>
	<head><title>
		Dashboard
	</title></head>
	<body>
				<img src="resources/headerlogo1">
				<img src="resources/headerlogo1">
				<table border="2"> 
					<tr>
						<td>
							<a href="Addbook.php">Add New Book</a>
						</td>
					</tr>
						<td> SR.NO</td>
						<td>NAME</td>
						<td>PUBLISHER</td>
						<td>ISBN</td>
						<td>PRICE</td>
						<td>IMAGE</td>
						<td>DELETE</td>
					</tr>
					<?php
	$books=simplexml_load_file("books.xml");
	
	$data=books->book;
	$no="";
	$name="";
	$pub="";
	$isbn="";
	$price="";
	$img="";
	$del="";
	for ($i=0; $i<1 $i++)
			{
				$no=$data[$i]->no;
				$name=$data[$i]->name;
				$pub=$data[$i]->publisher;
				$isbn=$data[$i]->isbn;
				$price=$data[$i]->prince;
				$img=$data[$i]->image;
				$del=$data[$i]->del;
				
				echo "<tr>
				<td>$no</td>
				<td>$name</td>
				<td>$pub</td>
				<td>$isbn</td>
				<td>$price</td>
				<td><img src='$img' width='30px' height='30px'</td>
				<td>$del</td>
				</tr>";
				
			}
?>
				</table>
	</body>
</html>
