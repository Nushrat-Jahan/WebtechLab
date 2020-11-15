<?php
  
    $uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$has_error=false;
   if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="<sub>Username Required</sub>";
			$has_error =true;	
		}

		if(empty ($_POST["pass"])){
			$err_pass="<sub>Password Required</sub>";
			$has_error = true;
		}
		if(!$has_error && isset($_POST["login"])){
			$file = simplexml_load_file("admins.xml");
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
				setcookie("username", $_POST["uname"], time() + 600);
				header("Location: Dashboard.php");
			}
			else
			{
				echo "Invalid credentiails";
			}
			
		}
	}
?>
