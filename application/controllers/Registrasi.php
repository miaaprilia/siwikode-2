<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function rekreasi()
	{
		$data = array(
			'content' => 'registrasi_rekreasi' , );
		$this->load->view('layout/template-user', $data);
	}

	public function kuliner()
	{
		$data = array(
			'content' => 'registrasi_kuliner' , );
		$this->load->view('layout/template-user', $data);
	}
}
