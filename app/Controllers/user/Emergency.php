<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emergency extends CI_Controller {
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
			'pages' => 'user/emergency/main',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function contact()
	{
		$data = array(
			'pages' => 'user/emergency/contact',
		);
		$this->load->view('base/wrapper',$data);
	}
}
