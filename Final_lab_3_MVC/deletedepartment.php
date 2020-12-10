<?php
   require_once 'controllers/DepartmentController.php'; 
   $id = $_GET["id"];
   deleteDepartmet($id);
   header("Location: alldepartment.php");
?>