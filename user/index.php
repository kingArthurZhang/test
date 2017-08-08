<?php
include "../public/common/config.php";
$sql="select * from user order by id";

$rst=mysql_query($sql);

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>index</title>
</head>
<body>
    <center>
        <h3>View Users | <a href="add.php">Add Users</a></h3>
        <hr>
        <table width='500px' border="1" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php
            while ($row=mysql_fetch_assoc($rst)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['username']}</td>";
                echo "<td>{$row['password']}</td>";
                echo "<td>".date('Y-m-d H:i:s',$row['time'])."</td>";
                echo "<td><a href='edit.php?id={$row['id']}'>Edit</a></td>";
                echo "<td><a href='delete.php?id={$row['id']}'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </center>
</body>
</html>