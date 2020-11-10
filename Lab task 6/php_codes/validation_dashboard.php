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