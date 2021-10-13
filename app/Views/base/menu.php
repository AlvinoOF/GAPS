<?php 
	$auth = $this->session->userdata('auth');
	if($auth == 'admin'){
		$user = $this->session->userdata('auth');
		if(null !== $this->session->userdata('client')){
			include_once('menu_admin.php');
		}
	}elseif($auth == 'user'){
		$menu = $this->session->userdata('akses');
		$open = "";
		switch($menu){
			case "guard": $open = "menu_user_guard";break;
			case "chief": $open = "menu_user";break;
		}

		include_once($open.".php");
	}