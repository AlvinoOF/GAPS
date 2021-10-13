<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R_daily_new extends CI_Controller {
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
		$this->load->model('Model_daily_security_new','m_d_security', True);
		$this->load->model('Model_daily_verbal','m_d_verbal', True);
		$this->load->model('Model_daily_guard','m_d_guard', True);
		$this->load->model('Model_daily_finding','m_d_finding', True);
	}
	public function index()
	{
		$data = array(
			'pages' => 'user/r_daily_new/main',
		);
		$this->load->view('base/wrapper',$data);
    }
    public function security()
	{
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'data' => $this->m_d_security->get(null,$client),
			'pages' => 'user/r_daily_new/security_list',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function security_detail($id = null)
	{
		if($id != null){
			$dt = $this->m_d_security->get($id)->row();
			$data = array(
				'data' => $dt,
				'foto' => $this->m_d_security->get_upload($id),
				'pages' => 'user/r_daily_new/security_detail',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/r_daily');
		}
    }
    public function security_add()
	{
		$data = array(
			'pages' => 'user/r_daily_new/security_add',
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
			'tanggal' => $input['tanggal'],
			'location' => $input['location'],
			'shift' => $input['shift'],
			'nama' => $input['nama'],
			'kegiatan' => $input['kegiatan'],
			'sub_kegiatan' => $input['sub_kegiatan'],
			'ringkasan' => $input['ringkasan'],
			'created_by' => $user,
		);
		$x = $this->m_d_security->save($data);
		if($x){
			$files = $_FILES;
			$jum = count($files);

			$this->load->library('upload');
			$config['upload_path'] = './user_data/report/daily/security/';       
			$config['allowed_types'] = 'jpg|png|jpeg';           
			$config['max_size']    = 5000;

			$num = 0;
			foreach($files as $key => $foto){

				$upname = $foto['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = "security_".$client."_".$x."_".time()."_".sprintf('%03d',$num).".".$upext;
				$config['file_name'] = $newName;  

				$this->upload->initialize($config);
				$this->upload->do_upload($key);
				$img = $this->upload->data();
				$arr = array(
					'id_daily_security_new' => $x,
					'file' => $img['file_name'],
					'created_by' => $user,
				);
				$this->m_d_security->upload($arr);
			}
			echo "Success";
		}
		else{
			echo "Error";
		}
    }
	public function security_add_img($id=null)
	{
		if($id != null){
			$dt = $this->m_d_security->get($id)->row();
			$data = array(
				'data' => $dt,
				'pages' => 'user/r_daily_new/security_add2',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/r_daily_new');
		}
    }
	public function security_save_img()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$id = $input['id'];
		$data = array(
			'updated_by' => $user,
		);
		$x = $this->m_d_security->update($data,$id);
		if($x){
			$files = $_FILES;
			$jum = count($files);

			$this->load->library('upload');
			$config['upload_path'] = './user_data/report/daily/security/';       
			$config['allowed_types'] = 'jpg|png|jpeg';           
			$config['max_size']    = 5000;

			$num = 0;
			foreach($files as $key => $foto){
				$upname = $foto['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = "security_".$client."_".$x."_".time()."_".sprintf('%03d',$num).".".$upext;
				$config['file_name'] = $newName;  

				$this->upload->initialize($config);
				$this->upload->do_upload($key);
				$img = $this->upload->data();
				if($img['orig_name']!=''){
					$arr = array(
						'id_daily_security_new' => $id,
						'file' => $img['file_name'],
						'created_by' => $user,
					);
					$this->m_d_security->upload($arr);
				}
			}
			echo "Success";
		}
		else{
			echo "Error";
		}
    }
	public function security_delete($id)
	{
		$user = $this->session->userdata('user_id');
		$data = array(
			'deleted_by' => $user,
			'deleted_at' => date("Y-m-d H:i:s"),
		);
		$x = $this->m_d_security->update($data,$id);
		if($x){
			echo "Success";
		}else{
			echo "Error";
		}
	}
	public function security_delete_img($id)
	{
		$user = $this->session->userdata('user_id');
		$data = array(
			'deleted_by' => $user,
			'deleted_at' => date("Y-m-d H:i:s"),
		);
		$x = $this->m_d_security->update_upload($data,$id);
		if($x){
			echo "Success";
		}else{
			echo "Error";
		}
	}


	//------------------------ VERBAL REPORT ---------------------------------------------------//


	public function verbal()
	{
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'data' => $this->m_d_verbal->get(null,$client),
			'pages' => 'user/r_daily_new/verbal_list',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function verbal_detail($id = null)
	{
		if($id != null){
			$dt = $this->m_d_verbal->get($id)->row();
			$data = array(
				'data' => $dt,
				'foto' => $this->m_d_verbal->get_upload($id),
				'pages' => 'user/r_daily_new/verbal_detail',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/r_daily');
		}
    }
	public function verbal_add()
	{
		$data = array(
			'pages' => 'user/r_daily_new/verbal_add',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function verbal_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);

		$data = array(
			'id_client' => $client,
			'tanggal' => $input['tanggal'],
			'location' => $input['location'],
			'nama' => $input['nama'],
			'jabatan' => $input['jabatan'],
			'kegiatan' => $input['kegiatan'],
			'sub_kegiatan' => $input['sub_kegiatan'],
			'kronologis' => $input['kronologis'],
			'tindakan' => $input['tindakan'],
			'bukti' => $input['bukti'],
			'created_by' => $user,
		);
		$x = $this->m_d_verbal->save($data);
		if($x){
			$files = $_FILES;
			$jum = count($files);

			$this->load->library('upload');
			$config['upload_path'] = './user_data/report/daily/verbal/';       
			$config['allowed_types'] = 'jpg|png|jpeg';           
			$config['max_size']    = 5000;

			$num = 0;
			foreach($files as $key => $foto){

				$upname = $foto['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = "verbal_".$client."_".$x."_".time()."_".sprintf('%03d',$num).".".$upext;
				$config['file_name'] = $newName;  

				$this->upload->initialize($config);
				$this->upload->do_upload($key);
				$img = $this->upload->data();
				$arr = array(
					'id_daily_verbal' => $x,
					'file' => $img['file_name'],
					'created_by' => $user,
				);
				$this->m_d_verbal->upload($arr);
			}
			echo "Success";
		}
		else{
			echo "Error";
		}
    }
	public function verbal_delete($id)
	{
		$user = $this->session->userdata('user_id');
		$data = array(
			'deleted_by' => $user,
			'deleted_at' => date("Y-m-d H:i:s"),
		);
		$x = $this->m_d_verbal->update($data,$id);
		if($x){
			echo "Success";
		}else{
			echo "Error";
		}
	}

	//------------------------ GUARD REPORT ---------------------------------------------------//


	public function guard()
	{
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'data' => $this->m_d_guard->get(null,$client),
			'pages' => 'user/r_daily_new/guard_list',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function guard_detail($id = null)
	{
		if($id != null){
			$dt = $this->m_d_guard->get($id)->row();
			$data = array(
				'data' => $dt,
				'foto' => $this->m_d_guard->get_upload($id),
				'pages' => 'user/r_daily_new/guard_detail',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/r_daily');
		}
    }
	public function guard_add()
	{
		$data = array(
			'pages' => 'user/r_daily_new/guard_add',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function guard_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);

		$data = array(
			'id_client' => $client,
			'tanggal' => $input['tanggal'],
			'location' => $input['location'],
			'tim' => $input['tim'],
			'barcode' => $input['barcode'],
			'finding' => $input['finding'],
			'created_by' => $user,
		);
		$x = $this->m_d_guard->save($data);
		if($x){
			$files = $_FILES;
			$jum = count($files);

			$this->load->library('upload');
			$config['upload_path'] = './user_data/report/daily/guard/';       
			$config['allowed_types'] = 'jpg|png|jpeg';           
			$config['max_size']    = 5000;

			$num = 0;
			foreach($files as $key => $foto){

				$upname = $foto['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = "guard_".$client."_".$x."_".time()."_".sprintf('%03d',$num).".".$upext;
				$config['file_name'] = $newName;  

				$this->upload->initialize($config);
				$this->upload->do_upload($key);
				$img = $this->upload->data();
				$arr = array(
					'id_daily_guard' => $x,
					'file' => $img['file_name'],
					'created_by' => $user,
				);
				$this->m_d_guard->upload($arr);
			}
			echo "Success";
		}
		else{
			echo "Error";
		}
    }
	public function guard_delete($id)
	{
		$user = $this->session->userdata('user_id');
		$data = array(
			'deleted_by' => $user,
			'deleted_at' => date("Y-m-d H:i:s"),
		);
		$x = $this->m_d_guard->update($data,$id);
		if($x){
			echo "Success";
		}else{
			echo "Error";
		}
	}


	//------------------------ FINDING REPORT ---------------------------------------------------//


	public function finding()
	{
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'data' => $this->m_d_finding->get(null,$client),
			'pages' => 'user/r_daily_new/finding_list',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function finding_detail($id = null)
	{
		if($id != null){
			$dt = $this->m_d_finding->get($id)->row();
			$data = array(
				'data' => $dt,
				'foto' => $this->m_d_finding->get_upload($id),
				'pages' => 'user/r_daily_new/finding_detail',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			$this->session->set_flashdata('msg','Something Wrong!');
			$this->session->set_flashdata('msgj','error');
			redirect('user/r_daily');
		}
    }
	public function finding_add()
	{
		$data = array(
			'pages' => 'user/r_daily_new/finding_add',
		);
		$this->load->view('base/wrapper',$data);
    }
	public function finding_save()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);

		$data = array(
			'id_client' => $client,
			'tanggal' => $input['tanggal'],
			'location' => $input['location'],
			'nama' => $input['nama'],
			'jabatan' => $input['jabatan'],
			'temuan' => $input['temuan'],
			'deskripsi' => $input['deskripsi'],
			'aksi' => $input['aksi'],
			'created_by' => $user,
		);
		$x = $this->m_d_finding->save($data);
		if($x){
			$files = $_FILES;
			$jum = count($files);

			$this->load->library('upload');
			$config['upload_path'] = './user_data/report/daily/finding/';       
			$config['allowed_types'] = 'jpg|png|jpeg';           
			$config['max_size']    = 5000;

			$num = 0;
			foreach($files as $key => $foto){

				$upname = $foto['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = "finding_".$client."_".$x."_".time()."_".sprintf('%03d',$num).".".$upext;
				$config['file_name'] = $newName;  

				$this->upload->initialize($config);
				$this->upload->do_upload($key);
				$img = $this->upload->data();
				$arr = array(
					'id_daily_finding' => $x,
					'file' => $img['file_name'],
					'created_by' => $user,
				);
				$this->m_d_finding->upload($arr);
			}
			echo "Success";
		}
		else{
			echo "Error";
		}
    }
	public function finding_delete($id)
	{
		$user = $this->session->userdata('user_id');
		$data = array(
			'deleted_by' => $user,
			'deleted_at' => date("Y-m-d H:i:s"),
		);
		$x = $this->m_d_finding->update($data,$id);
		if($x){
			echo "Success";
		}else{
			echo "Error";
		}
	}
}
