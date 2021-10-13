<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_monthly extends CI_Controller {
	function __construct() {
        parent::__construct();
		if(null !== $this->session->userdata('auth')){
			$auth = $this->session->userdata('auth');
			if($auth != 'user'){
				redirect($auth.'/dashboard');
			}
		}else{
			redirect('welcome');
		}
	}
	public function index()
	{
		$data = array(
			'pages' => 'user/report/monthly',
		);
		$this->load->view('base/wrapper',$data);
	}
}
