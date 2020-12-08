<?php
    require_once 'php_codes/valid_user.php';
    $users=getUser();
?>
<html>
    <head><title>Dashboard</title></head>
    <body>
        <center>
        <h1>Welcome to webtech</h1>
		<p>All user data</p>
        <table border="1" align="center">
            <tr>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            <?php
                foreach($users as $user){
                    echo "<tr>";
                    echo "<td>".$user["name"]."</td>";
                    echo "<td>".$user["username"]."</td>";
                    echo "<td>".$user["email"]."</td>";
                    echo "<td>".$user["phone"]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </center>
    </body>
</html>