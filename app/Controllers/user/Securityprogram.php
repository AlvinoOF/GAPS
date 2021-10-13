<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecurityProgram extends CI_Controller {
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
		$this->load->model('Model_activity_plan','m_plan', True);
	}
	public function index()
	{
		$year = date('Y');
		$data = array(
			'data' => $this->m_plan->get($year),
			'pages' => 'user/securityprogram/main',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function tambah()
	{
		$year = date('Y');
		$data = array(
			'data' => $this->m_plan->get($year),
			'pages' => 'user/securityprogram/tambah',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function tambah_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$year = date('Y');
		$data = array(
			'id_client' => $client,
			'id_mst' => $input['master'],
			'thn_act' => $year,
			'no_act' => $input['no'],
			'nama_act' => $input['operation'],
			'periodic_act' => $input['periodic'],
			'pic_act' => $input['pic'],
			'plan_act' => json_encode($input['plan']),
			'created_by' => $user,
		);
		$x = $this->m_plan->save($data);
		if($x){
			redirect('user/securityprogram');
		}
		else{
			"ERROR";
		}
	}
	public function tambah_actual()
	{
		$year = date('Y');
		$data = array(
			'data' => $this->m_plan->get($year),
			'pages' => 'user/securityprogram/tambah2',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function tambah_save2()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$year = date('Y');
		$id = $input['program'];
		$data = array(
			'id_client' => $client,
			'actual_act' => json_encode($input['actual']),
			'remark' => $input['remark'],
			'updated_by' => $user
		);
		$x = $this->m_plan->update($data,$id);
		if($x){
			redirect('user/securityprogram');
		}
		else{
			"ERROR";
		}
	}
}
