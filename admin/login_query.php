<?php
							include('dbcon.php');
							
							if(isset($_POST['login']))
							{
							
							$username=$_POST['username'];
							$password=$_POST['password'];
							
								
								$result = mysql_query("SELECT * FROM user WHERE username = 	'$username' AND password = '$password'") or die(mysql_error());
							
								$row = mysql_fetch_array($result);
								$numberOfRows = mysql_num_rows($result);
								/*$name = $row['firstname']." ".$row['lastname'];
								$date = date("M d, Y");
								$time = date("H:i A" , strToTime("+8 hours"));				
								*/									
																
																if ($numberOfRows == 0) 
																	{
																		echo " <br><center><font color= 'red' size='3'>Please fill up the fields correctly</center></font>";
																	} 
																else if ($numberOfRows > 0)
																	{
																	session_start();
																	$_SESSION['id'] = $row['user_id'];
																	/*mysql_query("INSERT INTO `activitylog` VALUES('$name', 'has login', '$time', '$date')") or die(mysql_error());*/
																	header("location:candidate.php");
																
															}	
							
							}
							?>