<nav class="navbar navbar-default navbar-static-top navbar-primary navbar-fixed" role="navigation" style="margin-bottom:6px;background-color:#0022ff;color:white;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style = "color:white;">PSITS Automated Voting System</a>
					
            </div>
      

            <ul class="nav navbar-top-links navbar-right">
            
               <?php include ('admin/dbcon.php');
				$query=mysql_query ("SELECT * from voters where voters_id ='$_SESSION[id]'")or die (mysql_error ());
				$row=mysql_fetch_array($query);
				?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style = "color:white;font-size:14pt;">
						<i class="fa fa-arrow fa-fw"></i>Welcome: <?php echo $row['firstname']." ".$row['lastname'];?>
					</a>
                </li>
            </ul>
            