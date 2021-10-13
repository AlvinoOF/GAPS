<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_incident extends CI_Controller {
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
		
		$this->load->model('Model_incident','m_incident', True);
	}
	public function index()
	{
		$data = array(
			'data' => $this->m_incident->ambil(),
			'pages' => 'user/report/incident',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function detail($id = null)
	{
		if(null !== $id){
			$data = array(
				'data' => $this->m_incident->ambil($id),
				'saran' => $this->m_incident->ambil_saran($id),
				'doc' => $this->m_incident->ambil_doc($id),
				'pages' => 'user/report/incident_detail',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/report_incident');
		}
		
	}
	public function tambah()
	{
		$data = array(
			'pages' => 'user/report/incident_tambah',
		);
		$this->load->view('base/wrapper',$data);
	}

	public function tambah_simpan()
	{
		$data = array(
			'id_client' => $this->session->userdata('perusahaan_id'),
			'id_user' => $this->session->userdata('user_id'),
			'user_type' => $this->session->userdata('auth'),
			'incident_no' => $this->input->post('nomor',true),
			'incident_date' => $this->input->post('inc_date',true),
			'incident_time' => $this->input->post('inc_time',true),
			'logweek' => $this->input->post('logweek',true),
			'badge_no' => $this->input->post('nomor',true),
			'incident_title' => $this->input->post('title',true),
			'incident_location' => $this->input->post('location',true),
			'shift' => $this->input->post('shift',true),
			'id_category' => $this->input->post('category',true),
			'reported_by' => $this->input->post('reported_by',true),
			'reported_date' => $this->input->post('report_date',true),
			'incident_detail' => $this->input->post('detail',true),
			'follow_up' => $this->input->post('follow_up',true),
			'important_level' => $this->input->post('level',true),
			'complete_plan' => $this->input->post('plan',true),
			'complete_plan_period' => $this->input->post('period',true),
			'kesimpulan' => $this->input->post('kesimpulan',true),
			'report_to' => $this->input->post('reported_to',true),
			'report_date' => $this->input->post('report_to_date',true),
		);
		
		$rs = $this->m_incident->simpan($data);
		
		if($rs){
		 	echo "Success";
		}else{
			echo "Error";
		}
	}
	public function dokumentasi($id = null)
	{
		if(null !== $id){
			$data = array(
				'id' => $id,
				'data' => $this->m_incident->ambil($id),
				'doc' => $this->m_incident->ambil_doc($id),
				'pages' => 'user/report/incident_doc',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/report_incident');
		}
		
	}
	public function dokumentasi_tambah($id = null)
	{
		if(null !== $id){
			$data = array(
				'data' => $this->m_incident->ambil($id),
				'pages' => 'user/report/incident_doc_tambah',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/report_incident');
		}
	}	
	public function dokumentasi_tambah_simpan()
	{
		$fileName = 'idoc_'.time().'_'.$_FILES['foto']['name'];
		$config['upload_path'] = './user_data/incident/doc';
		$config['file_name'] = $fileName; 
		$config['allowed_types'] = 'doc|docx|pdf|gif|jpg|png|jpeg|bmp'; 
		$this->load->library('upload',$config);
		$status = "";
		if(!$this->upload->do_upload('foto')){
			$status= $this->upload->display_errors();
		}else {
			$file = $this->upload->data();
			$data = array(
				'id_incident' => $this->input->post('id_incident',true),
				'id_user' => $this->session->userdata('user_id'),
				'user_type' => $this->session->userdata('auth'),
				'incident_foto' => $file['file_name'],
				'keterangan' => $this->input->post('keterangan',true),
				'tanggal' => $this->input->post('doc_date',true),
			);
			$rs = $this->m_incident->simpan_doc($data);
			if($rs){
				$status= "Success";
			}else{
				$status= "Error";
			}
		}
		echo json_encode($status);
	}
	public function follow_up($id = null)
	{
		if(null !== $id){
			$data = array(
				'id' => $id,
				'data' => $this->m_incident->ambil($id),
				'saran' => $this->m_incident->ambil_saran($id),
				'follow' => $this->m_incident->ambil_follow($id),
				'pages' => 'user/report/incident_saran',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/report_incident');
		}
		
	}
	public function follow_up_tambah($id = null,$id2 = null)
	{
		if(null !== $id){
			if(null !== $id2){
				$data = array(
					'data' => $this->m_incident->ambil($id),
					'saran' => $this->m_incident->ambil_saran(null,$id2),
					'pages' => 'user/report/incident_saran_tambah',
				);
				$this->load->view('base/wrapper',$data);
			}else{
				$this->session->set_flashdata('msg','Something Wrong!');
				$this->session->set_flashdata('msgj','error');
				redirect('user/report_incident/follow_up/'.$id);
			}
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/report_incident');
		}
	}
	public function follow_up_tambah_simpan()
	{
		$data = array(
			'id_incident_saran' => $this->input->post('id_incident_saran',true),
			'id_client_user' => $this->session->userdata('user_id'),
			'follow_up' => $this->input->post('follow_up',true),
			'follow_up_date' => $this->input->post('follow_up_date',true)
		);
		
		$rs = $this->m_incident->simpan_follow($data);
		
		if($rs){
		 	echo "Success";
		}else{
			redirect()->back()->withInput()->with('error',"User tidak ditemukan");
		}
	}	
}
