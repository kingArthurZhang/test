<?php
header('content-type:text/html;charset=utf-8');

include "../public/common/config.php";

$username=$_POST['username'];
$password=$_POST['password'];
$id=$_POST['id'];

$sql="update user set username='{$username}',password='{$password}' where id='{$id}'";

if(mysql_query($sql)){
    echo "<script>location='index.php'</script>";
}else{
    echo "<script>location='edit.php'</script>";
}
?>