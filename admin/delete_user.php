<?php
include('dbcon.php');
$user_id=$_GET['user_id'];
mysql_query("delete from user where user_id='$user_id'") or die(mysql_error());
header('location:user.php');
?>