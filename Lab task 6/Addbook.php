<?php include_once "php_codes/validation_addbook.php" ;?>
<html>
	<head><title>Add book</title></head>
	<body>
		
			<form action="" method="post">
				
				<table align="center">
					<tr align="center">
						<td>
							<span><img src="resources/img10.jpg" width=550px height=40px ></span>
						</td>
					</tr>
					<tr align="center">
						<td><img src="resources/headerlogo1.jpg" width=450px height=150px ></td>
					</tr>
					<tr align="center">
						<td>
							<span><img src="resources/img10.jpg" width=500px height=30px ></span>
						</td>
					</tr>
					<tr>
						<td><h1 align="center" style="color:green;">Addbook</h1></td>
					</tr>
				</table>
				<table align="center">
					<tr>
						<td>Book name:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $bname?>" name="bname"></td>
						<td><span style="color:red;">*<?php echo $err_bname;?></span></td>
					</tr>
					<tr>
						<td>Category:</td>
					</tr>
					<tr>
						<td>
						<select name="cat">
							<option disabled selected>Select subject category</option>
							<option>Architecture</option>
							<option>EEE</option>
							<option>CSE</option>		
							<option>Mechanical</option>
							<option>Biochemistry</option>
							<option>Textile</option>								
						</select>
						</td>
						<td>
							<span style="color:red;">*<?php echo "$err_cat"; ?></span>
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
					<tr>
						<td><input type="text" value="<?php echo $pub?>" name="pub"></td>
						<td><span style="color:red;">*<?php echo $err_pub;?></span></td>
					</tr>
					<tr>
						<td>Edition:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $ed?>" name="ed"></td>
						<td><span style="color:red;">*<?php echo $err_ed;?></span></td>
					</tr>
					<tr>
						<td>ISBN:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $isbn?>" name="isbn"></td>
						<td><span style="color:red;">*<?php echo $err_isbn;?></span></td>
					</tr>
					<tr>
						<td>Pages:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $pg?>" name="pg"></td>
						<td><span style="color:red;">*<?php echo $err_pg;?></span></td>
					</tr>
					<tr>
						<td>Price:</td>
					</tr>
					<tr>
						<td><input type="text" value="<?php echo $price?>" name="price"></td>
						<td><span style="color:red;">*<?php echo $err_price;?></span></td>
					</tr>
					<tr>
						<td align="center">
							<input type="submit" name="add" value="add">
							<input type="submit" name="goback" value="goback">
						</td>
					
					</tr>
				</table>
			</form>
	</body>
</html>
