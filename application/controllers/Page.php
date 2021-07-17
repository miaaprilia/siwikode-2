<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

	public function index()
	{
		$data = array(
			'title' => 'SIWIKODE',
			'content' => 'base'
		);
		$this->load->view('layout/template-user', $data);
	}

	public function testimoni($status = '')
	{
		if ($status == 'detail') {
			$id = $this->uri->segment(4);
			$data['data_wisata'] = $this->M_data->get_testimoni($id);
			$this->load->view('detail_rekreasi1', $data);
		}
	}
}
