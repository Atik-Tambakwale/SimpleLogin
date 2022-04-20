<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>User Registration</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-8cU710tp3iH9RniUh6fq5zJsGnjLzOWLWdZqBMLtqaoZUA6AWIE34lwMB3ipUNiTBP5jEZKY95SfbNnQ8cCKvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/lib/bootstrap-5.0.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/parsley.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/lib/growl-alert-box/alert.css">
	<style media="screen">
	.bg-img {
		/* The image used */
		background-image: url("<?php echo base_url();?>assets/images/top-line-management-login-background-1.jpg");

		/* Control the height of the image */
		min-height: 100vh;

		/* Center and scale the image nicely */
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		position: relative;
	}
	</style>
</head>
<body class="bg-img">
<input type="hidden" name="" id="path" value="<?php echo base_url();?>">
<div class="container-fluid">
	<div class="row">
			<nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">
						<img src="<?php echo base_url();?>assets/images/user.png" alt="" width="50">
						User Registration
					</a>
					<div class="">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
								<a class="nav-link" href="<?php echo base_url();?>">Login</a>
								<a class="nav-link active" aria-current="page" href="<?php echo base_url();?>register">Register User</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<div class="container mt-5">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="card card-body">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<h2 class="text-center">User Registration</h2>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<form class="" id="register_user_form" action="<?php echo base_url();?>user/register" method="post" data-parsley-validate="true">
									<div class="form-group mt-2">
										<label for="">Username :  </label><br>
										<input type="text" class="form-control" name="username" id="username" value="" required data-parsley-required="true">
									</div><br>
									<div class="form-group mt-2">
										<label for="">Email :  </label><br>
										<input type="email" class="form-control" name="email" id="email" value="" required data-parsley-type="email">
									</div><br>
									<div class="form-group mt-2">
										<label for="">Password :  </label><br>
										<input type="password" class="form-control" name="passwd" id="passwd" value="" required data-parsley-length="[8,16]">
									</div><br>
									<div class="form-group mt-2">
										<label for="">Confirm Password :  </label><br>
										<input type="password" class="form-control" name="c_passwd" id="c_passwd" value="" required data-parsley-equalto="#passwd">
									</div><br>
									<!-- <div class="form-group mt-2"> -->
										<input type="submit" class="btn btn-primary " name="" value="Submit">
									<!-- </div> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	<section class="footer">

	</section>
</div>
<script src="<?php echo base_url();?>assets/lib/bootstrap-5.0.2-dist/js/bootstrap.min.js" charset="utf-8"></script>
<script src="<?php echo base_url();?>assets/js/jquery.min.js" charset="utf-8"></script>
<script src="<?php echo base_url();?>assets/js/parsley.min.js" charset="utf-8"></script>
<script src="<?php echo base_url();?>assets/lib/growl-alert-box/alert.js" charset="utf-8"></script>
<script src="<?php echo base_url();?>assets/plugins/user.js" charset="utf-8"></script>
</body>
</html>
