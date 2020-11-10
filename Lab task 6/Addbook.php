<?php include_once "php_codes/validation_addbook.php" ;?>
<html>
	<head></head>
	<body>
		
			<h1>Addbook</h1>
			<form action="" method="post">
				
				<table>
					<tr>
						<td>Book Name:</td>
					</tr>
						<td><input type="text" value="<?php echo $bname?>" name="bname"></td>
						<td><span style="color:red;">*<?php echo $err_bname;?></span>
						</td>
					</tr>
					<tr>
						<td>Category:</td>
					</tr>
						<td><input type="text" value="<?php echo $cat?>" name="cat"></td>
						<td><span style="color:red;">*<?php echo $err_cat;?></span>
						</td>
					</tr>
					<tr>
						<td>Description:</td>
					</tr>
						<td>
							<textarea cols="20" rows="3"></textarea>
						</td>
					</tr>
					<tr>
						<td>Publisher:</td>
					</tr>
						<td><input type="text" value="<?php echo $pub?>" name="pub"></td>
						<td><span style="color:red;">*<?php echo $err_pub;?></span>
						</td>
					</tr>
					<tr>
						<td>Edition: </td>
					</tr>
						<td><input type="text" value="<?php echo $ed?>" name="ed"></td>
						<td><span style="color:red;">*<?php echo $ed;?></span>
						</td>
					</tr>
					<tr>
						<td>ISBN:</td>
					</tr>
						<td><input type="text" value="<?php echo $isbn?>" name="isbn"></td>
						<td><span style="color:red;">*<?php echo $err_isbn;?></span>
						</td>
					</tr>
					<tr>
						<td>PAGES:</td>
					</tr>
						<td><input type="text" value="<?php echo $pg?>" name="pg"></td>
						<td><span style="color:red;">*<?php echo $err_pg;?></span>
						</td>
					</tr>
					<tr>
					<td><b>PRICE:</b></td>
					</tr>
						<td><input type="text" value="<?php echo $price?>" name="price"></td>
						<td><span style="color:red;">*<?php echo $err_price;?></span>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="add" value="add">
						</td>
					</tr>
				</table>
			</form>
	</body>
</html>
