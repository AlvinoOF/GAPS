<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url('assets/logo/');?>gaps.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/splash/');?>css/main.css">
<!--===============================================================================================-->
</head>
<body onload="redir()">
	<?php $cl = $client->row();?>
	
	<div class="container-login100" style="background-image: url('<?=base_url('assets/splash/');?>images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<span class="login100-form-title p-b-37">
				Welcome
			</span>
			<span class="login100-form-title p-b-37">
				<img src="<?=base_url('user_data/profile/').$cl->logo;?>" style="max-height: 100px; max-width:">
			</span>
			<span class="login100-form-title p-b-37">
				<?=$cl->client_name;?><br><small><?=$this->session->userdata('nama_lengkap');?><br><?=$this->session->userdata('jabatan');?></small>
			</span>
		</div>
	</div>

<script>
	function redir(){
		var timer = setTimeout(function() {
			window.location.replace("<?=base_url('user/dashboard');?>");
        }, 3000);
	}
	
</script>
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=base_url('assets/splash/');?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/splash/');?>vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/splash/');?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?=base_url('assets/splash/');?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/splash/');?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/splash/');?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?=base_url('assets/splash/');?>vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/splash/');?>vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?=base_url('assets/splash/');?>js/main.js"></script>

</body>
</html>