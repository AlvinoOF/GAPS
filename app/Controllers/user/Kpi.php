<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpi extends CI_Controller {
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
			'pages' => 'user/kpi/main',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function detail()
	{
		$data = array(
			'pages' => 'user/kpi/detail',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function chart()
	{
		$data = array(
			'pages' => 'user/kpi/chart',
		);
		$this->load->view('base/wrapper',$data);
    }
	
}
