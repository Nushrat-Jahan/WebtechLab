<?php
	
	if (!isset($_COOKIE["username"])) {
    header("Location: login.php");
    }
	
	$bname="";
	$err_bname="";
	$cat="";
	$err_cat="";
	$pub="";
	$err_pub="";
	$ed="";
	$err_ed="";
	$isbn="";
	$err_isbn="";
	$pg="";
	$err_pg="";
	$price="";
	$err_price="";
	$has_error=false;
	
	if(isset($_POST["add"])){
		
		//Book name
		if(empty($_POST["bname"])){
			$err_bname="<sub>Please write down book name<sub>";
			$has_error =true;	
		}
		else{
			$bname = htmlspecialchars($_POST["bname"]);
		}
		
		
		//category
		if(empty($_POST["cat"])){
			$err_cat="<sub>Please write down category<sub>";
			$has_error =true;
		}

		//publisher
		if(empty($_POST["pub"])){
			$err_pub="<sub>Please write down your publisher name<sub>";
			$has_error = true;
		}
		else{
			$pub=htmlspecialchars($_POST["pub"]);
		}
		
		//edition
		if(empty($_POST["ed"])){
			$err_ed="<sub>Please write down your edition<sub>";
			$has_error = true;
		}
		else{
			$ed=htmlspecialchars($_POST["ed"]);
		}
		
		//isbn
		if(empty($_POST["isbn"])){
			$err_isbn="<sub>Please write down isbn<sub>";
			$has_error = true;
		}
		else{
			$isbn=htmlspecialchars($_POST["isbn"]);
		}
		
		//page
		if(empty($_POST["pg"])){
			$err_pg="<sub>Please write down page number<sub>";
			$has_error = true;
		}
		else if(!is_numeric($_POST["pg"])){
			$err_pg="<sub>Page number must be numeric</sub>";
			$has_error = true;
		}
		else{
			$pg=htmlspecialchars($_POST["pg"]);
		}
		
		//price
		if(empty($_POST["price"])){
			$err_price="<sub>Please write down your edition<sub>";
			$has_error = true;
		}
		else if(!is_numeric($_POST["price"])){
			$err_price="<sub>Price must be numeric</sub>";
			$has_error = true;
		}
		else{
			$price=htmlspecialchars($_POST["price"]);
		}
		
		if(!$has_error && isset($_POST["add"])){
			$books = simplexml_load_file("books.xml");
			
			$book = $books->addChild("book");
			$book->addChild("bookname",$bname);
			$book->addChild("publisher",$pub);
			$book->addChild("isbn",$isbn);
			$book->addChild("pg",$pg);
			$book->addChild("price",$price);
		
			//echo "<pre>";
			//print_r($books);
			//echo "</pre>";
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($books->asXML());
			
			
			$file = fopen("books.xml","w");
			fwrite($file,$xml->saveXML());
			
			header("Location: Dashboard.php");
			echo "Successfully added";
	
			
		}
	}
	if(isset($_POST["goback"]))
	{
		header("Location: Dashboard.php");
	}
?>
		