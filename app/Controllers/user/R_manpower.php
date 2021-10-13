<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R_manpower extends CI_Controller {
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
		$this->load->model('Model_manpower','m_manpower', True);
	}
	public function index()
	{
		$data = array(
			'data' => $this->m_manpower->get(),
			'pages' => 'user/r_manpower/main',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function detail($id = null)
	{
		if($id != null){
			$data = array(
				'data' => $this->m_manpower->get($id)->row(),
				'pages' => 'user/r_manpower/detail',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			redirect('user/r_manpower');
		}
	}
	public function add()
	{
		$data = array(
			'pages' => 'user/r_manpower/tambah',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function add_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$data = array(
			'id_client' => $client,
			'ktp' => $input['ktp'],
			'name' => $input['name'],
			'jenis' => $input['jenis'],
			'tmp_lahir' => $input['tmp_lahir'],
			'tgl_lahir' => $input['tgl_lahir'],
			'gender' => $input['gender'],
			'address' => $input['address'],
			'phone' => $input['phone'],
			'email' => $input['email'],
			'maritial' => $input['maritial'],
			'dependent' => $input['dependent'],
			'tinggi' => $input['tinggi'],
			'berat' => $input['berat'],
			'npwp' => $input['npwp'],
			'kta' => $input['kta'],
			'kta_exp' => $input['kta_exp'],
			'bank' => $input['bank'],
			'bank_acc' => $input['bank_acc'],
			'contract' => $input['contract'],
			'start' => $input['start'],
			'end' => $input['end'],
			'id' => $input['id'],
			'status' => $input['status'],
			'work' => $input['work'],
			'job' => $input['job'],
			'posisi' => $input['posisi'],
			'department' => $input['department'],
			'location' => $input['location'],
			// 'lampiran' => json_encode($input['lampiran']),
			'created_by' => $user,
		);
		$x = $this->m_manpower->save($data);
		if($x){
			redirect('user/r_manpower');
		}
		else{
			"ERROR";
		}
	}
	public function cert($id = null)
	{
		if($id != null){
			$data = array(
				'pages' => 'user/r_manpower/tambah_cert',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			redirect('user/r_manpower');
		}
	}
	public function exp($id = null)
	{
		if($id != null){
			$data = array(
				'pages' => 'user/r_manpower/tambah_exp',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			redirect('user/r_manpower');
		}
	}
}
