<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class R_incident extends CI_Controller {
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
		$this->load->model('Model_mst_ancaman','mst_ancaman', True);
	}
	public function index()
	{
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'data' => $this->m_incident->get(null,null,$client),
			'pages' => 'user/r_incident/main',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function detail($id)
	{
		$data = array(
			'data' => $this->m_incident->get($id)->row(),
			'ancaman' => $this->mst_ancaman->get(),
			'pages' => 'user/r_incident/detail',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function tambah()
	{
		$data = array(
			'ancaman' => $this->mst_ancaman->get(),
			'pages' => 'user/r_incident/tambah',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function up($id)
	{
		$data = array(
			'data' => $this->m_incident->get($id)->row(),
			'ancaman' => $this->mst_ancaman->get(),
			'pages' => 'user/r_incident/tambah2',
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
			'nm_inc' => $input['nm_inc'],
			'site' => $input['site'],
			'klien' => $input['klien'],
			'tgl_incident' => $input['tgl'],
			'nama_gapara' => $input['nama_gapara'],
			// 'kt_ancaman' => json_encode($input['kt_ancaman']),
			'nama1' => $input['nama1'],
			'alm1' => $input['alm1'],
			'tlp1' => $input['tlp1'],
			'tmp1' => $input['tmp1'],
			'tgl1' => $input['tgl1'],
			'agama1' => $input['agama1'],
			'nikah1' => $input['nikah1'],
			'suami1' => $input['suami1'],
			'anak1' => $input['anak1'],
			'nama2' => $input['nama2'],
			'alm2' => $input['alm2'],
			'tlp2' => $input['tlp2'],
			'tmp2' => $input['tmp2'],
			'tgl2' => $input['tgl2'],
			'agama2' => $input['agama2'],
			'nikah2' => $input['nikah2'],
			'suami2' => $input['suami2'],
			'anak2' => $input['anak2'],
			'apa' => $input['apa'],
			'dimana' => $input['dimana'],
			'dengan' => $input['dengan'],
			'lain' => $input['lain'],
			'aset1' => $input['aset1'],
			'uang1' => $input['uang1'],
			'alat1' => $input['alat1'],
			'lainnya1' => $input['lainnya1'],
			'aset2' => $input['aset2'],
			'uang2' => $input['uang2'],
			'alat2' => $input['alat2'],
			'lainnya2' => $input['lainnya2'],
			'tindakan' => json_encode($input['tindakan']),
			'created_by' => $user	,
		);
		$x = $this->m_incident->save($data);
		if($x){
			$this->load->library('upload');
			$dok = "";$gam1 = "";$gam2 = "";$bukti1 = "";$bukti2 = "";$bukti3 = "";

			$files = $_FILES;
			$config['upload_path'] = './user_data/report/incident/lampiran/';       
			$config['allowed_types'] = 'jpg|png|jpeg';           
			$config['max_size']    = 5000;
			if($files['dok']['name'] != ""){
				$upname = $files['dok']['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = time()."_lampiran_".$client."_".$x."_Doc.".$upext;

				$config['file_name'] = $newName;

				$this->upload->initialize($config);
				$this->upload->do_upload('dok');

				$up = $this->upload->data();
				$dok = $up['file_name'];
			}
			if($files['gam1']['name'] != ""){
				$upname = $files['gam1']['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = time()."_lampiran_".$client."_".$x."_IMG1.".$upext;

				$config['file_name'] = $newName;

				$this->upload->initialize($config);
				$this->upload->do_upload('gam1');

				$up = $this->upload->data();
				$gam1 = $up['file_name'];
			}
			if($files['gam2']['name'] != ""){
				$upname = $files['gam2']['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = time()."_lampiran_".$client."_".$x."_IMG2.".$upext;

				$config['file_name'] = $newName;

				$this->upload->initialize($config);
				$this->upload->do_upload('gam2');

				$up = $this->upload->data();
				$gam2 = $up['file_name'];
			}
			if($files['bukti1']['name'] != ""){
				$upname = $files['bukti1']['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = time()."_lampiran_".$client."_".$x."_BUKTI1.".$upext;

				$config['file_name'] = $newName;

				$this->upload->initialize($config);
				$this->upload->do_upload('bukti1');

				$up = $this->upload->data();
				$bukti1 = $up['file_name'];
			}
			if($files['bukti2']['name'] != ""){
				$upname = $files['bukti2']['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = time()."_lampiran_".$client."_".$x."_BUKTI2.".$upext;

				$config['file_name'] = $newName;

				$this->upload->initialize($config);
				$this->upload->do_upload('bukti2');

				$up = $this->upload->data();
				$bukti2 = $up['file_name'];
			}
			if($files['bukti3']['name'] != ""){
				$upname = $files['bukti3']['name'];
				$upext = pathinfo($upname,PATHINFO_EXTENSION);
				$newName = time()."_lampiran_".$client."_".$x."_BUKTI3.".$upext;

				$config['file_name'] = $newName;

				$this->upload->initialize($config);
				$this->upload->do_upload('bukti3');

				$up = $this->upload->data();
				$bukti3 = $up['file_name'];
			}
			$data = array(
				'dok' => $dok,
				'gam1' => $gam1,
				'gam2' => $gam2,
				'bukti1' => $bukti1,
				'bukti2' => $bukti2,
				'bukti3' => $bukti3,
			);
			$y = $this->m_incident->update($data,$x);
			redirect('user/r_incident');
		}
		else{
			"ERROR";
		}
	}
	public function tambah_save2()
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$input = $this->input->post(null, true);
		$data = array(
			'klien' => $input['klien'],
			'tgl_incident' => $input['tgl'],
			'nama_gapara' => $input['nama_gapara'],
			'jabatan' => $input['jab_gapara'],
			'eksposure' => $input['eksposure'],
			'keamanan' => $input['keamanan'],
			'eskalasi' => $input['eskalasi'],
			'kt_ancaman' => json_encode($input['kt_ancaman']),
			'nama1' => $input['nama1'],
			'alm1' => $input['alm1'],
			'tlp1' => $input['tlp1'],
			'tmp1' => $input['tmp1'],
			'tgl1' => $input['tgl1'],
			'agama1' => $input['agama1'],
			'nikah1' => $input['nikah1'],
			'suami1' => $input['suami1'],
			'anak1' => $input['anak1'],
			'nama2' => $input['nama2'],
			'alm2' => $input['alm2'],
			'tlp2' => $input['tlp2'],
			'tmp2' => $input['tmp2'],
			'tgl2' => $input['tgl2'],
			'agama2' => $input['agama2'],
			'nikah2' => $input['nikah2'],
			'suami2' => $input['suami2'],
			'anak2' => $input['anak2'],
			'apa' => $input['apa'],
			'dimana' => $input['dimana'],
			'dengan' => $input['dengan'],
			'mengapa' => $input['mengapa'],
			'bagaimana' => $input['bagaimana'],
			'bilamana' => $input['bilamana'],
			'aset1' => $input['aset1'],
			'uang1' => $input['uang1'],
			'alat1' => $input['alat1'],
			'lainnya1' => $input['lainnya1'],
			'aset2' => $input['aset2'],
			'uang2' => $input['uang2'],
			'alat2' => $input['alat2'],
			'lainnya2' => $input['lainnya2'],
			'tindakan' => json_encode($input['tindakan']),
			'dok' => $input['dok'],
			'gam1' => $input['gam1'],
			'gam2' => $input['gam2'],
			'bukti1' => $input['bukti1'],
			'bukti2' => $input['bukti2'],
			'bukti3' => $input['bukti3'],
			'is_r2' => 1,
			'kesimpulan' => json_encode($input['kesimpulan']),
			'saran' => json_encode($input['saran']),
			'tindakan2' => json_encode($input['tindakan2']),
			'keputusan' => json_encode($input['keputusan']),
			'updated_by' => $user,
			'r2_by' => $user,
			'r2_at' => date("Y-m-d H:i:s"),
		);
		$x = $this->m_incident->update($data,$input['inc_id']);
		if($x){
			redirect('user/r_incident');
		}
		else{
			echo "ERROR";
		}
	}
	public function close($id = null)
	{
		$user = $this->session->userdata('user_id');
		$client = $this->session->userdata('perusahaan_id');
		$data = array(
			'updated_by' => $user,
			'closed_by' => $user,
			'closed_at' => date("Y-m-d H:i:s"),
		);
		$x = $this->m_incident->update($data,$id);
		if($x){
			redirect('user/r_incident');
		}
		else{
			echo "ERROR";
		}
	}
}
