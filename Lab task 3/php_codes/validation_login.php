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
			$file = simplexml_load_file("data.xml");
			$file = $file->user;
			$is_done = false;
			foreach ($file as $i)
			{
				if(($i->username==$_POST["uname"]) && ($i->password== $_POST["pass"]))
				{
					$is_done = true;
				}
			}
			
			if($is_done )
			{
				echo "This is successful<br>";
				header("Location: dashboard.php");
			}
			else
			{
				echo "Invalid credentiails";
			}
			
		}
	}
?>
