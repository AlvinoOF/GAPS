<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
		$this->load->model('Model_login','m_login', True);
		if(null !== $this->session->userdata('auth')){
			$auth = $this->session->userdata('auth');
			if($auth != 'admin'){
				redirect($auth.'/dashboard');
			}
		}else{
			redirect('welcome');
		}
		$this->load->model('Model_client','m_client', True);
		$this->load->model('Model_incident','m_incident', True);
	}
	public function index()
	{
		$client = $this->session->userdata('id_client');
		$incident = $this->m_incident->count();
		$inc1 = 0;$inc2 = 0;$inc3 = 0;$inco = 0;$inct = 0;
		foreach($incident->result() as $rw){
			switch($rw->incident_status){
				case "Open" : $inc1 += $rw->jum;break;
				case "On Progress" : $inc2 += $rw->jum;break;
				case "Closed" : $inc3 += $rw->jum;break;
			}
		}
		$inco = $inc1+$inc2;
		$inct = $inc1+$inc2+$inc3;
		$cinc = array(
			'Total' => $inct,
			'Open' => $inco,
			'Closed' => $inc3,
		);
		$data = array(
			'incident' => $cinc,
			'pages' => 'admin/dashboard',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function client()
	{
		$data = array(
			'client' => $this->m_client->ambil(),
			'pages' => 'admin/select_user',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function set_client($id = null)
	{
		if(null !== $id){
			$client = $this->m_client->ambil($id)->row();
			$this->session->set_userdata('id_client',$id);
			$this->session->set_userdata('client',$client->client_name);
			redirect('admin/dashboard');
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('dashboard/client');
		}
		
	}
	public function video($id = null)
	{
		$data = array(
			'id' => $id,
		);
		$this->load->view('user/video_old',$data);
	}
	
}
