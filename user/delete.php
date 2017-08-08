<?php
header('content-type:text/html;charset=utf-8');

include "../public/common/config.php";

$id=$_GET['id'];
$sql="delete from user where id={$id}";

mysql_query($sql);
echo "<script>location='index.php'</script>";
?>