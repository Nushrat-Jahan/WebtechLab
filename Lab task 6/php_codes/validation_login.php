<?php
  
    $uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
   if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		//else{
			//$uname = htmlspecialchars($_POST["uname"]);
		//}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		//else{
			//$pass=htmlspecialchars($_POST["pass"]);
		//}
		
		if(!$hasError){
			$file = simplexml_load_file("admins.xml");
			$file = $file->user;
			$is_done = false;
			foreach ($file as $i)
			{
				if(($i->uname==$_POST["uname"]) && ($i->pass== $_POST["pass"]))
				{
					$is_done = true;
				}
			}
			
			if($is_done )
			{
				echo "This is successful<br>";
				header("Location: Dashboard.php");
			}
			else
			{
				echo "Invalid credentiails";
			}
			
		}
	}
?>
