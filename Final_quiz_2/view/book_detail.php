<?php
	include 'book_header.php';
	require_once '../controller/BookController.php';
	$book =  getBookDetail($_GET["id"]);
?>

<form action="" method="post"> 	
	<p align="center">Book ID : <?php echo $book["id"];?></p>
	<p align="center">Book's name : <?php echo $book["name"];?></p>
	<p align="center">Book's author name : <?php echo $book["author"];?></p>
	<p align="center">Book's edition : <?php echo $book["edition"];?></p>	
</form>

<?php include 'book_footer.php';?>