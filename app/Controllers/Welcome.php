<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->model('Model_login','m_login', True);
		
	}
	
	public function index()
	{
		if(null !== $this->session->userdata('auth')){
			$auth = $this->session->userdata('auth');
			redirect($auth.'/dashboard');
		}
		$this->load->view('login');
	}
	
	public function login()
	{
		$user = $this->input->post('user',true);
		$pass = md5($this->input->post('pass',true));
		
		$rs = $this->m_login->cek_auth_client($user,$pass);
		
		if($rs->num_rows() > 0)
		{
			$row = $rs->row();
			$data = array(
				'sts_login' => true,
				'auth' => 'user',
				'user_id' => $row->id_client_user,
				'nama_lengkap' => $row->nama_lengkap,
				'jabatan' => $row->jabatan,
				'akses' => $row->akses,
				'perusahaan_id' => $row->id_client,
				'perusahaan' => $row->client_name,	
			);
			$this->session->set_userdata($data);
			redirect('user/dashboard/splash');
		}else{
			$rs2 = $this->m_login->cek_auth($user,$pass);
			if($rs2->num_rows() > 0)
			{
				$row = $rs2->row();
				$data = array(
					'sts_login' => true,
					'auth' => 'admin',
					'user_id' => $row->id_user,
					'nama_lengkap' => $row->nama_lengkap,
					'jabatan' => $row->jabatan,
					'akses' => $row->akses,
					'perusahaan' => $row->perusahaan,
				);
				$this->session->set_userdata($data);
				redirect('admin/dashboard/client');
			}else{
				$this->session->set_flashdata('msg','Username / Password Salah');
				redirect('welcome');
			}
		}
	}
	public function logout()
    {
        $this->session->sess_destroy();
		$this->session->set_flashdata('msg','Logout berhasil');
		redirect('welcome');
    }
}
