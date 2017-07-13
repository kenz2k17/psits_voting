<?php
include('dbcon.php');
$candidate_id=$_GET['candidate_id'];
mysql_query("delete from candidate where candidate_id='$candidate_id'") or die(mysql_error());
header('location:candidate.php');
?>