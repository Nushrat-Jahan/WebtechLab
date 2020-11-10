<?php
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
	$hasError=false;
	
	if(isset($_POST["register"])){
		
		//Book Name
		if(empty($_POST["bname"])){
			$err_bname="<sub>Please write down your book name<sub>";
			$has_error = true;
		}
		else{
			$bname=htmlspecialchars($_POST["bname"]);
		}
		
		//category
		if(empty($_POST["cat"])){
			$err_cat="<sub>Please write down category<sub>";
			$has_error = true;
		}
		else{
			$cat=htmlspecialchars($_POST["cat"]);
		}
		
		//publisher
		if(empty($_POST["pub"])){
			$err_pub="<sub>Please write down your publisher name<sub>";
			$has_error = true;
		}
		else{
			$cat=htmlspecialchars($_POST["pub"]);
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
		else{
			$ed=htmlspecialchars($_POST["pg"]);
		}
		
		//price
		if(empty($_POST["price"])){
			$err_price="<sub>Please write down your edition<sub>";
			$has_error = true;
		}
		else{
			$price=htmlspecialchars($_POST["price"]);
		}
		if(!$hasError){
			$books = simplexml_load_file("books.xml");
			
			$book = $books->addChild("book");
			$book->addChild("bookname",$bname);
			$book->addChild("category",$cat);
			$book->addChild("publisher",$pub);
			$book->addChild("isbn",$isbn);
			$book->addChild("pg",$pg);
			$book->addChild("price",$price);
		
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($users->asXML());
			
			
			$file = fopen("books.xml","w");
			fwrite($file,$xml->saveXML());
			
			//header("Location: login.php");
			echo "Successfully added";
	
			
		}
	}
?>
		