<?php include ('head.php');?>

<style>
 body { 
    background:url("joke.jpg") no-repeat;
		background-size:cover;
}
 
 
 </style>

<body>

    <div class="container">
        <div class="row">
		<center><h1 style = "text-shadow:1px 1px #000000; color:green">Welcome to BSIS PSITS Voting Sytem</h1></center>
            <div class="col-md-4 col-md-offset-4 pull-right" style = "opacity:0.7;">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Admin Log in</h3></center>
                    </div>
                    <div class="panel-body">
                        <form role="form" method = "post" enctype = "multipart/form-data">
                            <fieldset>
							
                                <div class="form-group">
									<label for = "username" ><i class = "fa fa-user"></i> Username</label>
										<input class="form-control" placeholder="Please Log in your Username" name="username" type="text" autofocus>
                                </div>
								
                                <div class="form-group">
									<label for = "username" ><i class = "fa fa-key"></i> Password</label>
										<input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                             
                              
                                <button class="btn btn-lg btn-success btn-block " name = "login">Login</a>
								
								
                            </fieldset>
							
									<?php include ('login_query.php');?>
                        </form>
                    </div>
                </div>
            </div>
			
			 </div><div class = "col-md-12">
		
			<img src = "logo.png" style = "opacity:0.8; margin-top:-350px; width:500px; margin-left:40px;">
			</div>
        </div>
    </div>

  <?php include ('script.php');?>

</body>

</html>
