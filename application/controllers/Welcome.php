<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Model_users');
	}

	public function index()
	{

		$this->load->view('login');
	}
	public function admin()
	{
		$admin = $_POST['admin_username'];
		$pass = $_POST['password'];
		//print_r($username);
		$data= $this->Model_users->cek_admin('admin', $pass);
		$dataunit = $this->Model_users->cek_asessor($admin, $pass);
		if( ($data == null) && ($dataunit == null))
		{
			$message = "Anda tidak memiliki hak akses kehalaman ini";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='".base_url("Welcome#admin")."';</script>";
		}
		else
		if($data != null	)
		{
			//if match
			foreach($data as $d);
				$newdata = array('admin_username' => $admin);
				$oi = $this->session->set_userdata($newdata);
				print_r($data);
				print_r($newdata);
				print_r($io);
				redirect('admin');

		}
		else {
			{
				//if match
				foreach($data as $d);
					$newdata = array('admin_username' => $admin);
					$oi = $this->session->set_userdata($newdata);
					print_r($data);
					print_r($newdata);
					print_r($io);
					redirect('Asessment_dedy');

			}
		}

	}


	public function pegawai()
	{
		$nopeg = $_POST['nopeg'];
		//print_r($username);
		$data= $this->model_users->cek_pegawai($nopeg);
		if($data == null)
		{
			$message = "Anda tidak memiliki hak akses kehalaman ini";
			echo "<script type='text/javascript'>alert('$message');
			window.location.href='".base_url("Welcome")."';</script>";
		}
		else
		{
			//if match
			foreach($data as $d);
				$newdata = array(
			    'nopeg'	=> $d->nopeg,
			    'nama'  => $d->nama
			);
			$this->session->set_userdata($newdata);
			redirect('Asessment_dedy');
			//print_r("ada");
		}
	}

	public function dashboard()
	{

	}


}
