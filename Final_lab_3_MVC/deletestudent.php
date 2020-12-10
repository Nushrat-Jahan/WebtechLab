<?php
   require_once 'controllers/StudentController.php'; 
   $id = $_GET["id"];
   deleteStudent($id);
   header("Location: allstudents.php");
?>