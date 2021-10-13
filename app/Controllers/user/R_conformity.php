<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R_conformity extends CI_Controller {
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
		
		$this->load->model('Model_non_conformity','m_nconformity', True);
	}
	public function index()
	{
		$data = array(
			'data' => $this->m_nconformity->get(),
			'pages' => 'user/r_conformity/main',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function detail($id)
	{
		$data = array(
			'data' => $this->m_nconformity->get($id)->row(),
			'pages' => 'user/r_conformity/detail',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function tambah()
	{
		$data = array(
			'pages' => 'user/r_conformity/tambah',
		);
		$this->load->view('base/wrapper',$data);
	}
    public function analisa($id)
	{
		$data = array(
			'data' => $this->m_nconformity->get($id)->row(),
			'pages' => 'user/r_conformity/tambah2',
		);
		$this->load->view('base/wrapper',$data);
	}
    public function review($id)
	{
		$data = array(
			'data' => $this->m_nconformity->get($id)->row(),
			'pages' => 'user/r_conformity/tambah3',
		);
		$this->load->view('base/wrapper',$data);
	}
    public function tambah_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$data = array(
			'id_client' => $client,
			'tgl' => $input['tgl'],
			'lokasi' => $input['lokasi'],
			'pelapor' => $input['pelapor'],
			'dept' => $input['dept'],
			'jenis' => $input['jenis'],
			'temuan' => $input['temuan'],
			'dokumentasi' => json_encode($input['dokumentasi']),
            'status'=>"Open",
			'created_by' => $user,
		);
		$x = $this->m_nconformity->save($data);
		if($x){
			redirect('user/r_conformity');
		}
		else{
			"ERROR";
		}
	}
    public function analisa_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$data = array(
			'tgl2' => date("Y-m-d H:i:s"),
			'penanggung_jawab' => $input['penanggung_jawab'],
			'dept2' => $input['dept2'],
			'analisa' => $input['analisa'],
			'tindakan' => $input['tindakan'],
			'batas' => $input['batas'],
			'updated_by' => $user,
		);
		
		$x = $this->m_nconformity->update($data,$input['id']);
		if($x){
			redirect('user/r_conformity');
		}
		else{
			"ERROR";
		}
    }
    public function review_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$data = array(
			'reviewer' => $input['reviewer'],
			'dept3' => $input['dept3'],
			'tanggal_review' => $input['tgl'],
			'status' => $input['status'],
			'catatan' => $input['catatan'],
			'updated_by' => $user,
		);
        if($input['status'] == "Close"){
            $data['closed_at'] = date("Y-m-d H:i:s");
            $data['closed_by'] = $user;
        }
		
		$x = $this->m_nconformity->update($data,$input['id']);
		if($x){
			redirect('user/r_conformity');
		}
		else{
			"ERROR";
		}
	}
}
