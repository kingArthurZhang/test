<?php
include "../public/common/config.php";

$id=$_GET['id'];
$sql="select * from user where id={$id}";

$rst=mysql_query($sql);

$row=mysql_fetch_assoc($rst);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>index</title>
</head>
<body>
    <h3>Edit Users</h3>
    <hr>
    <form action="update.php" method="post">
        <p>Username:</p>
        <p><input type="text" name="username" value='<?php echo $row['username'] ?>'></p>
        <p>Password:</p>
        <p><input type="text" name="password" value='<?php echo $row['password'] ?>'></p>
        <p>
            <input type="hidden" name="id" value='<?php echo $id ?>'>
            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">
        </p>
    </form>
</body>
</html>