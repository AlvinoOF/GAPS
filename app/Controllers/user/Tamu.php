<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
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
		
		$this->load->model('Model_tamu','m_tamu', True);
	}
	public function index()
	{
		$data = array(
			'data' => $this->m_tamu->get(),
			'pages' => 'user/tamu/main',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function detail($id)
	{
		$data = array(
			'data' => $this->m_tamu->get($id)->row(),
			'pages' => 'user/tamu/detail',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function add()
	{
		$data = array(
			'pages' => 'user/tamu/tambah',
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
			'temui' => $input['temui'],
			'pengunjung' => json_encode($input['pengunjung']),
			'kendaraan' => $input['kendaraan'],
			'no_kendaraan' => $input['no_kendaraan'],
			'tujuan' => $input['tujuan'],
			'lokasi' => json_encode($input['lokasi']),
			'syarat' => json_encode($input['syarat']),
			'created_by' => $user,
		);
		$x = $this->m_tamu->save($data);
		if($x){
			redirect('user/tamu');
		}
		else{
			"ERROR";
		}
	}
}
