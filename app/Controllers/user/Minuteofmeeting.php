<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minuteofmeeting extends CI_Controller {
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
			'pages' => 'user/mom/manajemen',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function security()
	{
		$data = array(
			'pages' => 'user/mom/security',
		);
		$this->load->view('base/wrapper',$data);
	}
	
}
