<?php
  if (!isset($_COOKIE["username"])) {
    header("Location: login.php");
  }
  
  $books = simplexml_load_file("books.xml");
?>
