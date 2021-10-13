<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login || GREEN ASSET PROTECTION SYSTEM (GAPS)</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<link rel="icon" type="image/png" href="<?=base_url('assets/logo/');?>gaps.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/');?>css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="<?=base_url('');?>welcome/login">
					<div class="login100-form-social flex-c-m">
						<a href="#" class="flex-c-m m-r-5">
							<img src="<?=base_url('assets/logo/');?>gaps.png" style="max-height: 100px;">
						</a>
					</div>
					<br><br>
					<span class="login100-form-title p-b-43">
						<small>LOGIN</small><br><b style="font-size:25px">GREEN ASSET PROTECTION SYSTEM<br>(GAPS)</b>
					</span>
					<?php if(null !== $this->session->flashdata('msg')){ ?>
					<div class="alert alert-danger mg-b-0" role="alert">
						<button aria-label="Close" class="close" data-dismiss="alert" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
						<?=$this->session->flashdata('msg');?>.
					</div>
					<?php } ?>
					<div class="wrap-input100 validate-input" data-validate = "Masukan username anda">
						<input class="input100" type="text" name="user">
						<span class="focus-input100"></span>
						<span class="label-input100">Username / Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Masukan password anda">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
						</span>
					</div>
					<div class="login100-form-social flex-c-m">
						<a href="#" class="flex-c-m m-r-5">
							<img src="<?=base_url('assets/logo/');?>sucofindo.png" style="max-height: 75px;">
						</a>
						<a href="#" class="flex-c-m m-r-5" style="margin-left:30px">
							<img src="<?=base_url('assets/logo/');?>gapara.jpg" style="max-height: 75px;">
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('<?=base_url('assets/images/');?>2948496.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?=base_url('assets/login/');?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/login/');?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/login/');?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url('assets/login/');?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/login/');?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/login/');?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url('assets/login/');?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/login/');?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/login/');?>js/main.js"></script>

</body>
</html>