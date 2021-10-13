<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regulation extends CI_Controller {
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
			'pages' => 'user/regulation/identification',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function tambah()
	{
		$data = array(
			'pages' => 'user/regulation/tambah',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function ssp()
	{
		$data = array(
			'pages' => 'user/regulation/ssp',
		);
		$this->load->view('base/wrapper',$data);
	}
	
}
