<?php
	include("admin/dbcon.php");
	session_start();
	session_destroy($_SESSION['voters_id']);
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[pres_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[vpinternal_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[vpexternal_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[secretary_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[auditor_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[treasurer_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[pio_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[busman_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[sgtarm_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[muse_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("INSERT INTO `votes` VALUES('', '$_SESSION[escort_id]', '$_SESSION[id]')") or die(mysql_error());
			mysql_query("UPDATE `voters` SET `status` = 'Voted' WHERE `voters_id` = '$_SESSION[id]'") or die(mysql_error());
			header("location:index.php");
		
?>