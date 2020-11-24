<?php
  
	include_once "db_connection.php";
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
			
			$is_done = false;
			
			foreach ($file as $i)
			{
				if(($i->username==$_POST["uname"]) && ($i->password== md5($_POST["pass"])))
				{
					$is_done = true;
				}
			}
			$query="Select * from users";
			$results=mysqli_query($conn,$query);
			if(mysqli_num_rows($results)>0)
			{
				
				while($row = mysqli_fetch_assoc($results))
				{
					if(($row["username"]==$_POST["uname"]) && ($row["password"]== md5($_POST["pass"])))
					{
						$is_done = true;
					}
				}
				
			}
			if($is_done )
			{
				echo "This is successful<br>";
				setcookie("username", $_POST["uname"], time() + 600);
				header("Location: showboard.php");
			}
			else
			{
				echo "Invalid credentiails";
			}
			
		}
	}
?>
