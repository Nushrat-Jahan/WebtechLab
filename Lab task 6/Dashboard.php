<?php include_once "php_codes/validation_dashboard.php" ;?>
<html>
	<title>Dashboard</title>
	<body>
	
			<table align="center">
				<tr>
					<td>
						<span><img src="resources/img10.jpg" width=550px height=40px ></span>
					</td>
				</tr>
		    </table>
			<table align="center">
				<tr>
					<td>
						<span><img src="resources/headerlogo1.jpg" width=500px height=150px ></span>
					</td>
				</tr>
			</table>
			<table align="center">
				<tr>
					<td>
						<span><img src="resources/img10.jpg" width=500px height=40px ></span>
					</td>
				</tr>
			</table>
			<table border="1" style="padding:5px; outline: gray solid 10px;" align="center">
				<tr>
					<td colspan="7" align="left" >
						<a href="AddBook.php"> Add a new book </a>
					</td>
				</tr>
				<tr style=" text-decoration: underline;">
					<td> SR NO. </td>
					<td> NAME </td>
					<td> PUBLISHER </td>
					<td> ISBN </td>
					<td> PRICE </td>
					<td> IMAGE </td>
					<td> DELETE </td>
				</tr>
                        
                <?php
                   $cnt = 0;
                    foreach ($books as $i) {
                      	$cnt++;
                        echo "
                             <tr>
                                <td>   $cnt      </td>
                                <td>   $i->bookname      </td>
                                <td>   $i->publisher </td>
                                <td>   $i->isbn      </td>
								<td>   $i->price     </td> 
                                <td>  <img src = 'resources/book_default.png' width=60px height=80px></td>
                                <td> <img src='resources/drop.png' width=20px height=20px> </td>
                             </tr>
                            	";
                            }
                        ?>

					</table>

	</body>
</html>