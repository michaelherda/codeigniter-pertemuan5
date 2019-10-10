<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Mahasiswa_model');
		$data['mhs'] = $this->Mahasiswa_model->getAllMahasiswa();
		$this->load->view('mahasiswa/index', $data);
	}


}
