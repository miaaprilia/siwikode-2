<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testimoni extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_testimoni');
        $this->load->helper('url');

    }
    public function index()
    {
        if ($this->session->userdata('id') == NULL) {
			redirect();
		}
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'base_testimoni',
			'testimoni' => $this->M_testimoni->getAllTesti()->result()
		);
		$this->load->view('layout/template', $data);
	}
}