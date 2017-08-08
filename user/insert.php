<?php
header('content-type:text/html;charset=utf-8');

include "../public/common/config.php";

$username=$_POST['username'];
$password=$_POST['password'];
$time=time();

$sql="insert into user(username,password,time) values('{$username}','{$password}',{$time})";

if(mysql_query($sql)){
    echo "<script>location='index.php'</script>";
}else{
    echo "<script>location='insert.php'</script>";
}
?>