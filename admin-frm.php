<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="cust-reg.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Admin-login</title>
	</head>
	<body>

		<div class="main-center"><img src="img/logo.png" id=img><font size="10">ADMIN LOGIN</font> 
		  	

		  </div>
		<div class="container">
			<div class="row main">

				<div class="main-login main-center">
				  <h1 style="color: black"></h1>
				  <a href="index.html"><button class="btn btn-success" style="float:left;">Back</button></a>
					<form class="" method="post" action="admin-validate.php">
						
				           
							<br><br><div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Email Id</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="Email" class="form-control" name="admin-eml" id="username"  placeholder="Email Id" required="" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="admin-pswd" id="password"  placeholder=" Password" />
								</div>
							</div>
						</div>
						<div class="input-group">
							
						</div>						
										
                        <div style="color: black;">  
                          <label for="login" align="center"></label>
                        <center> <input type="submit"  id="sub" value="LOGIN" id="lgn"></center>
                             </div>

                 
                 		

						
					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>