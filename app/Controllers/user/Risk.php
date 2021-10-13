<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Risk extends CI_Controller {
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
		
		$this->load->model('Model_risk','m_risk', True);
	}
	public function index()
	{
		$data = array(
			'data' => $this->m_risk->get(),
			'pages' => 'user/risk/main',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function detail($id)
	{
		$data = array(
			'data' => $this->m_risk->get($id)->row(),
			'pages' => 'user/risk/detail',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function tambah()
	{
		$data = array(
			'pages' => 'user/risk/tambah',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function tambah_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
        $risk = array(
            array("2","1","1","0","0"),
            array("2","2","1","0","0"),
            array("3","2","1","0","0"),
            array("3","3","2","1","0"),
            array("3","3","2","1","1")
        );
		$data = array(
			'id_client' => $client,
			'aktivitas' => $input['aktivitas'],
			'aset' => $input['aset'],
			'ancaman' => $input['ancaman'],
			'pengendalian' => $input['pengendalian'],
			'kerawanan' => $input['kerawanan'],
			'peluang' => $input['peluang'],
			'keparahan' => $input['keparahan'],
			'risiko' => $risk[$input['peluang']][$input['keparahan']],
			'mitigasi' => $input['mitigasi'],
			'created_by' => $user,
		);
		$x = $this->m_risk->save($data);
		if($x){
			redirect('user/risk');
		}
		else{
			"ERROR";
		}
	}
}
