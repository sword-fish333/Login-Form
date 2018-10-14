<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Login Form</title>

	<style type="text/css">
		.parallax { 
    /* The image used */
    background-image: url("images/poster.jpg");

    /* Set a specific height */
    height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
	</style>
</head>
<body class="parallax">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 m-auto">
					<div class="card bg-dark mt-5">
						<div class="card-title bg-info text-white">
							<h3 class="text-center py-3">Login Form in PHP</h3>
						</div>

							<?php
								if(@$_GET['Empty']==true){

								?>
								<div class="alert-light text-danger">
									<?php echo $_GET['Empty']?>
								</div>
									<?php

								}
							?>

							<?php
								if(@$_GET['Invalid']==true){

								?>
								<div class="alert-light text-danger">
									<?php echo $_GET['Invalid']?>
								</div>
									<?php

								}
							?>

						<div class="card-body">
							
							<form action="process.php" method="POST" class="form-horizontal">
								<div class="form-group">
									<input type="text" name="UName" placeholder="User Name" class="form-control">
								</div>
								<div class="form-group">
									<input type="password" name="Password" placeholder="Password" class="form-control">
							</div>
							<button class="btn btn-success btn-md mb-1 mt-2" name="Login">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>