<?php include ('head.php');?>
 <style>
 body { 
    background:url("b.jpg") no-repeat;
		background-size:cover;
}
 
 
 </style>
<body>
    <div class="container">	

        <div class="row">
		
		<center><h1 style="color:white; font-family:monospace;font-weight:bolder; text-shadow: 2px 2px #00ff00;">Welcome to BSIS PSITS Election 2015</h1></center>
            <div class="col-md-4 col-md-offset-4" style = "float:right; opacity:0.8;">
			
                <div class="login-panel panel panel-default">
				
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Student Log in</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data"action = "login_query.php">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" ><i class = "fa fa-user"></i> ID number </label>
										<input class="form-control" placeholder="Please Log in your Username" name="idno" type="text" required = "required" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" ><i class = "fa fa-key"></i> Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" required = "required">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include 'login_query.php';?>
                        </form>
                    </div>
                </div>
            </div><div class = "col-md-12">
			<center>
			<img src = "chmsc.png" style = "opacity:0.8; margin-top:-300px; width:300px; margin-left:-600px;">
			<img src = "logo.png" style = "opacity:0.8; margin-top:-280px; width:300px; margin-left:12px;">
			
			
						<div class="login-panel panel panel-default" style = "margin-top:30px; background-color:transparent;">
							<div class = "panel panel-body" style = " background-color:transparent; color:white;">
									<center><font size= "3pt" bolder><i class= "fa fa-cog fa-spin"></i> Programmed and Designed by: Kenneth L. Aboy and Mark Arvin Arandilla &copy; 2015 <i class= "fa fa-cog fa-spin"></i></font></center>
							</div>
						</div>
			
			</center>
			</div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
