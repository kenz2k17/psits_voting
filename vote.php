<?php include("admin/session.php")?>
<?php include ('head.php');?>
<?php include("sess.php")?>
<body>
    <div id="wrapper">
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                            PRESIDENT</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'President'") or die(mysql_error());
							while($fetch = mysql_fetch_array($query))
						{
						?>
                           <div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
				
				<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                           VICE PRESIDENT FOR INTERNAL AFFAIRS</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
			$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'Vice President for Internal Affairs'") or die(mysql_error());
			while($fetch = mysql_fetch_array($query))
			{
		?>
		<div id = "position">
			<img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px">
		<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
			<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vpinternal_id" class = "vpinternal"></center>
		</div>
		<?php
			}
		?>

						</div>
                       
                    </div>
                </div>
	
	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>VICE PRESIDENT FOR EXTERNAL AFFAIRS</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'Vice President for External Affairs'") or die(mysql_error());
					while($fetch = mysql_fetch_array($query))
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vpexternal_id" class = "vpexternal"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SECRETARY</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'Secretary'") or die(mysql_error());
					while($fetch = mysql_fetch_array($query))
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "secretary_id" class = "secretary"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>	
	
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>AUDITOR</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'Auditor'") or die(mysql_error());
					while($fetch = mysql_fetch_array($query))
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "auditor_id" class = "auditor"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	 <div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>TREASURER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'Treasurer'") or die(mysql_error());
					while($fetch = mysql_fetch_array($query))
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "treasurer_id" class = "treasurer"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>PIO</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'PIO'") or die(mysql_error());
					while($fetch = mysql_fetch_array($query))
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pio_id" class = "pio"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>BUSINESS MANAGER</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'Business Manager'") or die(mysql_error());
					while($fetch = mysql_fetch_array($query))
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "busman_id" class = "busman"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>SGT @ ARMS</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'Sgt. @ Arms'") or die(mysql_error());
					while($fetch = mysql_fetch_array($query))
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "sgtarm_id" class = "sgtarm"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>MUSE</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'Muse'") or die(mysql_error());
					while($fetch = mysql_fetch_array($query))
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
						<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "muse_id" class = "muse"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
	<div class="col-lg-6" style = "margin-left:350px;">
	  <div class="panel panel-primary">
            <div class="panel-heading">
			<center>ESCORT</center>
            </div>
            <div class="panel-body" style = "background-color:;">
				<?php
					$query = mysql_query("SELECT * FROM `candidate` WHERE `position` = 'Escort'") or die(mysql_error());
					while($fetch = mysql_fetch_array($query))
					{
				?>
						<div id = "position">
							<img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img">
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>	<center><input type = "checkbox"  value = "<?php echo $fetch['candidate_id'] ?>" name = "escort_id" class = "escort"></center>
						</div>
	
				<?php
					}
				?>
			</div>      
        </div>
     </div>
		
		<center><button style = "margin-top:-15px;"class = "btn btn-success ballot" type = "submit" name = "submit">Submit Ballot</button></center>
		</form>
</body>
</html>

