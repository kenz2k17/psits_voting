
<?php include ('session.php');?>
<?php include ('head.php');?>
<style type="text/css">
@media print {
    #sort {
        display :  none;
    }
	#joke{
		
		display:none;
	}
	#print {
			
		display:none;
		
	}
	#heading {
		
		
		
	}
}
</style>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
					
                </div>
				
				
				
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading" id = "heading">
							<h4 class = "alert alert-success">Canvassing Report</h4>	
                        </div>
						
					<br/>
                       <form method="post" action="sort.php">
			
			<select name="position" id = "joke"class = "form-control pull-left" style = "width:300px;margin-left:19px; ">
				<option readonly>----Sort by Position----</option>
				<option>President</option>
				<option>Vice President for External Affairs </option>
				<option>Vice President for Internal Affairs</option>
				<option>Secretary</option>
				<option>Auditor</option>
				<option>Treasurer</option>
				<option>PIO</option>
				<option>Business Manager</option>
				<option>Sgt. @ Arms</option>
				<option>Muse</option>
				<option>Escort</option>
				
			</select>
			
			&nbsp;
			&nbsp;
			<button id ="sort" class = "btn btn-success">Sort</button><button onclick="window.print();" style = "margin-right:14px;" id ="print" class = "pull-right btn btn-info"><i class = "fa fa-print"></i> Print</button>	
</form>	
                        <div class="panel-body">
                            
						
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;" class = "alert alert-success">Candidate for President</td>
						<td style = "width:200px;"class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'President'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Vice President for Internal</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'Vice President for Internal Affairs'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
			
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Vice President for External</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'Vice President for External Affairs'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
						
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Secretary</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'Secretary'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>		
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Auditor</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'Auditor'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
			</table>	
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Treasurer</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'Treasurer'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for PIO</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'PIO'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Business Manager</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'Business Manager'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	
			
							
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Sergeant at Arms </td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'Sgt. @ Arms'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>

				
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Muse</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'Muse'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>				
			
			
			

				
			<table class="table table-striped table-bordered table-hover ">
					<thead>
						<td style = "width:600px;"class = "alert alert-success">Candidate for Escort</td>
						<td style = "width:200px;" class = "alert alert-success">Image</td>
						<td class = "alert alert-success">Total</td>
					
					</thead>
					<?php
		include("dbcon.php");
		$query = mysql_query("SELECT * FROM candidate WHERE position = 'Escort'");
		while($fetch = mysql_fetch_array($query))
		{
			$id = $fetch['candidate_id'];
			$query1 = mysql_query("SELECT COUNT(*) as total FROM `votes` WHERE candidate_id = '$id'");
			$fetch1 = mysql_fetch_assoc($query1);
			
	?>
					<tbody> 
						<td><?php echo $fetch ['firstname']. " ".$fetch ['lastname'];?></td>
						<td><img src = "<?php echo $fetch ['img'];?>" style = "width:40px; height:40px; border-radius:500px; " >
						<td style = "width:20px; text-align:center"><button class = "btn btn-primary"disabled><?php echo $fetch1 ['total'];?></button>	</td>
					<?php }?>
					</tbody>
					
					
			</table>	

				
			
			
			
			
			
			
			
			
			
							</div>				
				
							
							
							
							
							
                          </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
			<br />
			<br />
			<br/>
			<div class = "approved" style = "float:left;">
			<span><p>Approved by:</p></span> <br /><span  style = "font-weight:bolder;">Cristine V. Redoblo, MAEd.IT</span>
					<br/>
				<span>BSIS Chairperson</span>
			</div>
				
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

