<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecurityRisk extends CI_Controller {
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
	}
	public function index()
	{
		$data = array(
			'pages' => 'user/securityrisk/main',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function tambah()
	{
		$data = array(
			'pages' => 'user/securityrisk/tambah',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function detail($id = null)
	{
		if($id!==null){
			$judul="";$dt = "";
			switch($id){
				case "1":
					$judul = "Pemeriksaan Keluar Masuk Tamu";
				break;
				case "2":
					$judul = "Operasional produksi";
				break;
			}
			$data = array(
				'id' => $id,
				'data' => $dt,
				'judul' => $judul,
				'pages' => 'user/securityrisk/detail',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			redirect('user/securityrisk');
		}
	}
	public function tambah_detail($id = null)
	{
		$data = array(
			'id' => $id,
			'pages' => 'user/securityrisk/tambah_detail',
		);
		$this->load->view('base/wrapper',$data);
	}
	public function tindak($id = null)
	{
		if($id!==null){
			$judul="";$dt = "";
			switch($id){
				case "1":
					$judul = "Pemeriksaan Keluar Masuk Tamu";
				break;
				case "2":
					$judul = "Operasional produksi";
				break;
			}
			$data = array(
				'id' => $id,
				'data' => $dt,
				'judul' => $judul,
				'pages' => 'user/securityrisk/tindak',
			);
			$this->load->view('base/wrapper',$data);
		}else{
			redirect('user/securityrisk');
		}
    }
	
}
