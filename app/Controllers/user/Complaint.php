<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaint extends CI_Controller {
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
		
		$this->load->model('Model_complaint','m_complaint', True);
	}
	public function index()
	{
		$data = array(
			'data' => $this->m_complaint->ambil(),
			'pages' => 'user/complaint/main',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function detail($id = null)
	{
		if(null !== $id){
			$data = array(
				'data' => $this->m_complaint->ambil($id),
				'pages' => 'user/complaint/detail',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/complaint');
		}
		
	}
	public function tambah()
	{
		$data = array(
			'pages' => 'user/complaint/tambah',
		);
		$this->load->view('base/wrapper',$data);
	}

	public function tambah_simpan()
	{
		$data = array(
			'nama_lengkap' => $this->input->post('name',true),
			'email' => $this->input->post('email',true),
			'phone' => $this->input->post('phone',true),
			'address' => $this->input->post('address',true),
			'complaint' => $this->input->post('complaint',true),
			'sugestion' => $this->input->post('suggestions',true),
			'status' => 1,
			'id_user' => $this->session->userdata('user_id')
		);
		
		$rs = $this->m_complaint->simpan($data);
		
		if($rs){
		 	echo "Success";
		}else{
			echo "Error";
		}
	}
}
