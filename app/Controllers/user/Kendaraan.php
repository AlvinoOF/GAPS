<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {
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
		
		$this->load->model('Model_kendaraan','m_kendaraan', True);
	}
	public function index()
	{
		$data = array(
			'data' => $this->m_kendaraan->get(),
			'pages' => 'user/kendaraan/main',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function detail($id)
	{
		$data = array(
			'data' => $this->m_kendaraan->get($id)->row(),
			'pages' => 'user/kendaraan/detail',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function add()
	{
		$data = array(
			'pages' => 'user/kendaraan/tambah',
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
			'tgl' => $input['tgl'],
			'pic' => $input['pic'],
			'telp' => $input['telp'],
			'departemen' => $input['departemen'],
			'jenis' => $input['jenis'],
			'pengemudi' => json_encode($input['pengemudi']),
			'kendaraan' => json_encode($input['kendaraan']),
			'tujuan' => $input['tujuan'],
			'lokasi' => json_encode($input['lokasi']),
			'syarat' => json_encode($input['syarat']),
			'created_by' => $user,
		);
		$x = $this->m_kendaraan->save($data);
		if($x){
			redirect('user/kendaraan');
		}
		else{
			"ERROR";
		}
	}
}
