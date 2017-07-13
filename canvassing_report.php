<!DOCTYPE html>
<html>
<body>
	<?php
		include("admin/dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'President'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			echo $fetch['firstname']." ".$fetch1['total'];
			echo "<br />";
		}
	?>
</body>
</html>