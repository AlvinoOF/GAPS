<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R_daily extends CI_Controller {
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
		$this->load->model('Model_daily_security','m_d_security', True);
		$this->load->model('Model_daily_hse','m_d_hse', True);
		$this->load->model('Model_daily_uav','m_d_uav', True);
		$this->load->model('Model_daily_cms','m_d_cms', True);
	}
	public function index()
	{
		$data = array(
			'pages' => 'user/r_daily/main',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function security()
	{
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'data' => $this->m_d_security->get(null,$client),
			'pages' => 'user/r_daily/security_list',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function security_detail($id)
	{
		$dt = $this->m_d_security->get($id)->row();
		$data = array(
			'data' => $dt,
			'inc' => $this->m_incident->get(null,date("Y-m-d", strtotime($dt->tgl))),
			'pages' => 'user/r_daily/security_detail',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function security_add()
	{
		$data = array(
			'pages' => 'user/r_daily/security_add',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function security_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);

		$data = array(
			'id_client' => $client,
			'site' => $input['site'],
			'tgl' => $input['tgl'],
			'shift' => $input['shift'],
			'logistik' => $input['logistik'],
			'intel' => $input['intel'],
			'supervisor' => $input['supervisor'],
			'leader' => $input['leader'],
			'ringkasan' => $input['ringkasan'],
			'peristiwa' => json_encode($input['peristiwa']),
			'temuan' => json_encode($input['temuan']),
			'tindakan' => json_encode($input['tindakan']),
			'pra' => json_encode($input['pra']),
			'pkk' => json_encode($input['pkk']),
			'dk' => json_encode($input['dk']),
			'tk_keamanan' => $input['tk_keamanan'],
			'tk_karyawan' => $input['tk_karyawan'],
			'perbaikan' => $input['perbaikan'],
			'pengembangan' => $input['pengembangan'],
			'komunikasi' => $input['komunikasi'],
			'infolain' => $input['infolain'],
			'saran_tl' => $input['saran_tl'],
			'saran_rek' => $input['saran_rek'],
			'kesimpulan' => $input['kesimpulan'],
			'created_by' => $user,
		);
		$x = $this->m_d_security->save($data);
		if($x){
			$files = $_FILES;
			$jum = count($files['lampiran']['name']);
			$up_foto = array();
			if($jum > 0){
				$this->load->library('upload');
				for($i = 0;$i<$jum; $i++){
					if($files['lampiran']['name'][$i]['foto'] != ""){
						$upname = $files['lampiran']['name'][$i]['foto'];
						$upext = pathinfo($upname,PATHINFO_EXTENSION);
						$newName = time()."_lampiran_".$client."_".$x."_".sprintf('%03d',$i).".".$upext;
						
						$config['upload_path'] = './user_data/report/daily/lampiran/';
						$config['file_name'] = $newName;          
						$config['allowed_types'] = 'jpg|png|jpeg';           
						$config['max_size']    = 5000;
						
						$_FILES['lampiran']['name']= $files['lampiran']['name'][$i]['foto'];
						$_FILES['lampiran']['type']= $files['lampiran']['type'][$i]['foto'];
						$_FILES['lampiran']['tmp_name']= $files['lampiran']['tmp_name'][$i]['foto'];
						$_FILES['lampiran']['error']= $files['lampiran']['error'][$i]['foto'];
						$_FILES['lampiran']['size']= $files['lampiran']['size'][$i]['foto'];
						
						$this->upload->initialize($config);
						$this->upload->do_upload('lampiran');
						$img = $this->upload->data();
						$arr = array(
							'nama' => $input['lampiran'][$i]['nama'],
							'foto' => $img['file_name']
						);
						array_push($up_foto,$arr);
					}
				}
				$data = array(
					'lampiran' => json_encode($up_foto)
				);
				$y = $this->m_d_security->update($data,$x);
			}
			redirect('user/r_daily/security');
		}
		else{
			"ERROR";
		}
    }
	public function security_delete($id)
	{
		$user = $this->session->userdata('user_id');
		$data = array(
			'deleted_by' => $user,
			'deleted_at' => date("Y-m-d H:i:s"),
		);
		$y = $this->m_d_security->update($data,$id);
		redirect('user/r_daily/security');
	}

	//HSE
	public function hse()
	{
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'data' => $this->m_d_hse->get(null,$client),
			'pages' => 'user/r_daily/hse_list',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function hse_detail($id)
	{
		$data = array(
			'data' => $this->m_d_hse->get($id)->row(),
			'pages' => 'user/r_daily/hse_detail',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function hse_add()
	{
		$data = array(
			'pages' => 'user/r_daily/hse_add',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function hse_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$data = array(
			'id_client' => $client,
			'tgl' => $input['tgl'],
			'observer' => $input['observer'],
			'jabatan' => $input['jabatan'],
			'shift' => $input['shift'],
			'kondisi' => json_encode($input['kondisi']),
			'lokasi' => $input['lokasi'],
			'p3k' => $input['p3k'],
			'medic' => $input['medic'],
			'fatal' => $input['fatal'],
			'total' => $input['total'],
			'jumtk' => $input['jumtk'],
			// 'aktifitas' => $input['aktifitas'],
			'diamati1' => isset($input['diamati1']) ? $input['diamati1'] : null,
			'diamati2' => isset($input['diamati2']) ? $input['diamati2'] : null,
			'perbaikan' => isset($input['perbaikan']) ? $input['perbaikan'] : null,
			'tindakan1' => $input['jumtk'],
			'tindakan2' => $input['jumtk'],
			'tindakan3' => $input['jumtk'],
			'created_by' => $user,
		);
		$x = $this->m_d_hse->save($data);
		if($x){
			redirect('user/r_daily/hse');
		}
		else{
			"ERROR";
		}
    }

	//UAV
	public function uav()
	{
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'data' => $this->m_d_uav->get(null,$client),
			'pages' => 'user/r_daily/uav_list',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function uav_detail($id)
	{
		$data = array(
			'data' => $this->m_d_uav->get($id)->row(),
			'pages' => 'user/r_daily/uav_detail',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function uav_add()
	{
		$data = array(
			'pages' => 'user/r_daily/uav_add',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function uav_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$data = array(
			'id_client' => $client,
			'tanggal' => $input['tanggal'],
			'location' => $input['location'],
			'pilot' => $input['pilot'],
			'device' => $input['device'],
			'activity' => $input['activity'],
			'flight' => json_encode($input['flight']),
			'remarks' => $input['remarks'],
			'created_by' => $user,
		);
		$x = $this->m_d_uav->save($data);
		if($x){
			redirect('user/r_daily/uav');
		}
		else{
			"ERROR";
		}
    }

	//CMS
	public function cms()
	{
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'data' => $this->m_d_cms->get(null,$client),
			'pages' => 'user/r_daily/cms_list',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function cms_detail($id)
	{
		$data = array(
			'data' => $this->m_d_cms->get($id)->row(),
			'pages' => 'user/r_daily/cms_detail',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function cms_add()
	{
		$data = array(
			'pages' => 'user/r_daily/cms_add',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function cms_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$data = array(
			'id_client' => $client,
			'tanggal' => $input['tanggal'],
			'location' => $input['location'],
			'pilot' => $input['pilot'],
			'device' => $input['device'],
			'activity' => $input['activity'],
			'flight' => json_encode($input['flight']),
			'remarks' => $input['remarks'],
			'created_by' => $user,
		);
		$x = $this->m_d_cms->save($data);
		if($x){
			redirect('user/r_daily/cms');
		}
		else{
			"ERROR";
		}
    }
}
