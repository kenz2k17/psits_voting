<?php
							include('admin/dbcon.php');
							
							if(isset($_POST['login']))
							{
							
							$idno=$_POST['idno'];
							$password=$_POST['password'];
							
								
								$result = mysql_query("SELECT * FROM voters WHERE id_number = '$idno' && password = '$password' && `account` = 'active' && `status` = 'Unvoted'") or die(mysql_error());
								$row = mysql_fetch_array($result);
								$voted = mysql_num_rows(mysql_query("SELECT * FROM `voters` WHERE id_number = '$idno' && password = '$password' && `status` = 'Voted'"));
								$numberOfRows = mysql_num_rows($result);				
																	
																
													
																if ($numberOfRows > 0)
																	{
																	session_start();
																	$_SESSION['id'] = $row['voters_id'];
																header("location:vote.php");
																	}
																if($voted == 1)
																{
																	echo " <br><center><font color= 'red' size='30'>You Can Only Vote Once
																	<br/>
																	<br/>
																	
																	<img src = 'skull.png'/>
																	<br/>
																	<a href = 'index.php' style = 'background-color:red;padding :2px 4px; text-decoration:none; color:white; border:1px solid white; border-radius:6px;'> back to main</a>
																			
																	</center></font>";
																}
																else
																{
																	echo " <br><center><font color= 'red' size='3'>ERROR PROCESSING YOUR ACCOUNT PLEASE LOG IN CORRECTLY</center></font>
																			<br/>
																			<center>
																				<a href = 'index.php' style = 'background-color:red;padding :2px 4px; text-decoration:none; color:white; border:1px solid white; border-radius:6px;'> back to main</a>
																			
																			</center>
																			";
																		
																}
																	
							
							}
							?>