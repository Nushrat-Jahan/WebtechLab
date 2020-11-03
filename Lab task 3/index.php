<?php 
	/*$file = fopen("data.txt","r");
	$i=1;
    while(!feof($file)){
		$line = fgets($file);
		$info = explode(":",$line);
		echo "username: $info[0] <br> ";
		echo "password: $info[1] <br> ";
		echo "type: $info[2] <br> ";
		
	}*/
	$xml=simplexml_load_file("data.xml");
	$users = $xml->user;
	$flag=true;
	foreach($users as $user){
		echo "Username: $user->username <br>" ;
		echo "Password: $user->password <br>" ;
		echo "Type: $user->type <br>" ;
	}
	if($flag){
		header("Location: dashboard.php");
	}else{
		echo "Invalid credentiails";
	}
	

?>