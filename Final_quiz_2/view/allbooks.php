<?php 
	include 'book_header.php';
	require_once '../controller/BookController.php';
	$books = getAllBooks();
	
?>
<!--All Books starts -->
<form action="" method="post">
<div class="center">
	<h3 class="text">All Books</h3>
	<input type="text" class="form-control" onkeyup="liveSearch(this)" placeholder="Search.....">
	<div id="searched"></div>
</div>
<script>
	function liveSearch(textBox) {
		
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
               if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("searched").innerHTML = this.responseText;
               }
            }
            xhr.open("GET", "search_Book.php?name="+textBox.value, true);
            xhr.send();
        }
	</script>
</form>
<!--Books ends -->
<?php include 'book_footer.php';?>